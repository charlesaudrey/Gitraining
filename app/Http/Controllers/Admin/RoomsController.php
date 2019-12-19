<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Rooms\CreateRequest;
use App\Http\Requests\Admin\Rooms\UpdateRequest;
use App\Room;
use App\Property;

class RoomsController extends Controller
{
  protected $properties;

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $this->checkPermision();
    $this->properties = Property::fetch();
    $this->rooms = Room::fetch();

    return view('admin.property-management.rooms.index')
      ->with([
        'properties' => $this->properties,
        'rooms' => $this->rooms
      ]);
  }

  public function store(CreateRequest $request)
  {
    Room::create($this->data($request));
    return back();
  }

  public function destroy($id) {
    $this->room = Room::findOrFail($id);
    $this->room->delete();

    return back();
  }

  public function update(UpdateRequest $request, $id) {
    $this->room = Room::findOrFail($id);
    $this->room->update($this->data($request));
    
    return back();
  }

  protected function data($request) {
    return [
      'client_id' => Auth::user()->client->id,
      'property_id' => $request->property_id,
      'name' => $request->name,
      'room_number' => $request->room_number,
      'details' => $request->details,
      'guest' => $request->guest,
      'rate' => $request->rate,
      'maintenance' => $request->maintenance,
      'status' => $request->status,
    ];
  }

  protected function checkPermision() {
    if (Gate::denies('check', 'admin')) {
      abort(403);
    }
  }
}
