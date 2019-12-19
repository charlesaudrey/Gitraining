<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function dashboard()
    {
        return view('rooms/dashboard');
    }

    public function roomMakeup()
    {
        return view('rooms/housekeeping/roomMakeup');
    }
    public function roomService()
    {
        return view('rooms/housekeeping/roomService');
    }

    public function forRepair()
    {
        return view('rooms/maintenance/forRepair');
    }
    public function repairItem()
    {
        return view('rooms/maintenance/repairItem');
    }


    public function laudryIn()
    {
        return view('rooms/laundry/laudryIn');
    }
    public function laundryout()
    {
        return view('rooms/laundry/laundryout');
    }
}
