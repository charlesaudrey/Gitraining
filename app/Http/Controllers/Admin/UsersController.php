<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use App\Mail\CreateUserMail;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\CreateRequest;
use App\Http\Requests\Admin\Users\UpdateRequest;
use App\User;
use App\Role;
use App\Property;

class UsersController extends Controller
{
    protected $user;
    protected $users;
    protected $token;
    protected $roles;
    protected $client;
    protected $properties;

    public function __construct() {
      $this->middleware('auth');
    }

    public function index() {
      $this->checkPermision();
      $this->client = Auth::user()->client;
      $this->users = User::fetch();
      
      return view('admin.users.index')->with(['users' => $this->users]);
    }

    public function create() {
      $this->properties = Property::fetch();
      $this->roles = Role::fetch();

      return view('admin.users.create')
        ->with([
          'roles' => $this->roles,
          'properties' => $this->properties
        ]);
    }

    public function store(CreateRequest $request) {
      $this->user = User::create([
        'client_id' => Auth::user()->client->id,
        'name' => $request->name,
        'email' => $request->email,
        'mobile' => $request->mobile,
        'password' => bcrypt($request->password),
        'status' => false,
      ]);
      
      $this->user->roles()->sync($request->roles);

      $this->user->properties()->sync($request->properties);

      $this->token = $this->user->confirm_token()->create(['token' => Str::random(50)]);
      
      try {
        Mail::to($this->user->email)->send(new CreateUserMail($this->token->token));
      } catch (\Exception $e) {
        //throw $th;
      }

      return redirect(route('users.index'));
    }

    public function edit($id) {
      $this->user = User::findOrFail($id);
      $this->properties = Property::fetch();
      $this->roles = Role::where('name', '!=', 'superadmin')->get();

      return view('admin.users.edit')
        ->with([
          'user' => $this->user,
          'roles' => $this->roles,
          'properties' => $this->properties,
        ]);
    }

    public function update(UpdateRequest $request) {
      $this->user = User::create([
        'client_id' => Auth::user()->client->id,
        'name' => $request->name,
        'mobile' => $request->mobile,
        'status' => $request->status,
      ]);
      
      $this->user->roles()->sync($request->roles);

      $this->user->properties()->sync($request->properties);

      return redirect(route('users.index'));
    }

    public function destroy($id) {
      $this->user = User::findOrFail($id);
      $this->user->delete();

      return back();
    }

    protected function checkPermision() {
      if (Gate::denies('check', 'admin')) {
        abort(403);
      }
    }
}
