<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Companies\CreateRequest;
use App\Http\Requests\Admin\Companies\UpdateRequest;
use App\Company;

class CompaniesController extends Controller
{
    protected $company;
    protected $companies;

    public function __construct() {
      $this->middleware('auth');
    }

    public function index() {
      $this->checkPermision();
      $this->companies = Company::fetch();

      return view('admin.property-management.companies.index')
        ->with(['companies' => $this->companies]);
    }

    public function show($id) {
      $this->company = Company::findOrFail($id);
      $this->companies = Company::fetch();
<<<<<<< HEAD
      
      return view('admin.property-management.companies.show')
        ->with([
          'company' => $this->company,
          'companies' => $this->companies,
=======

      return view('admin.property-management.companies.show')
        ->with([
          'company' => $this->comnpany,
          'companies' => $this->companies
>>>>>>> 12/19/19 9:52
        ]);
    }

    public function store(CreateRequest $request) {
      Company::create($this->data($request));
      return back();
    }

    public function update(UpdateRequest $request, $id) {
      $this->company = Company::findOrFail($id);
      $this->company->update($this->data($request));

      return back();
    }

    public function destroy($id) {
      $this->company = Company::findOrFail($id);
      $this->company->delete();
      
      return back();
    }

    protected function data($request) {
      return [
        'client_id' => Auth::user()->client->id,
        'name' => $request->name,
        'address' => $request->address,
        'postal_code' => $request->postal_code,
        'phone' => $request->phone,
        'tin' => $request->tin,
        'status' => $request->status,
        'remarks' => $request->remarks
      ];
    }

    protected function checkPermision() {
      if (Gate::denies('check', 'admin')) {
        abort(403);
      }
    }
}
