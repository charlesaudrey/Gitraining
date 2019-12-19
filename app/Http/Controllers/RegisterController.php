<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Register\CreateRequest;
use App\Mail\RegisterUserMail;
use App\User;
use App\Role;

class RegisterController extends Controller
{
    public function __construct() {
      $this->middleware('guest');
    }

    public function index() {
      return view('register.index');
    }

    public function show($id) {
      return view('register.show');
    }

    public function store(CreateRequest $request) {
      $this->user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'mobile' => $request->mobile,
        'password' => bcrypt($request->password),
      ]);

      $this->roles = Role::where('name', 'superadmin')->get();

      $this->user->roles()->sync($this->roles);

      $this->token = $this->user->confirm_token()->create([
        'token' => Str::random(50)
      ]);
      
      try {
        Mail::to($this->user->email)->send(new RegisterUserMail($this->token->token));
      } catch (\Exception $e) {
        //throw $th;
      }

      return redirect(route('register.show', $this->user->id));
    }
}
