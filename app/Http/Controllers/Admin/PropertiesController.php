<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Properties\CreateRequest;
use App\Http\Requests\Admin\Properties\UpdateRequest;
use App\Property;
use App\Company;

class PropertiesController extends Controller
{
  protected $property;
  protected $companies;
  protected $properties;

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $this->checkPermision();
    $this->properties = Property::fetch();
    $this->companies = Company::fetch();

    return view('admin.property-management.properties.index')
      ->with([
        'companies' => $this->companies,
        'properties' => $this->properties
      ]);
  }

  public function show($id) {
    $this->property = Property::findOrFail($id);
    $this->properties = Property::fetch();

    return view('admin.property-management.properties.show')
      ->with([
        'property' => $this->property,
        'properties' => $this->properties,
      ]);
  }

  public function store(CreateRequest $request)
  {
    Property::create($this->data($request));
    return back();
  }

  public function update(UpdateRequest $request, $id) {
    $this->property = Property::findOrFail($id);
    $this->property->update($this->data($request));

    return back();
  }

  public function destroy($id) {
    $this->property = Property::findOrFail($id);
    $this->property->delete();
    
    return back();
  }

  protected function data($request) {
    return [
      'client_id' => Auth::user()->client->id,
      'company_id' => $request->company_id,
      'name' => $request->name,
      'details' => $request->details,
      'number' => $request->number,
      'status' => $request->status,
    ];
  }

  protected function checkPermision() {
    if (Gate::denies('check', 'admin')) {
      abort(403);
    }
  }
}
