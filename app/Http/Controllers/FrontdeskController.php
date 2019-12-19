<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontdeskController extends Controller
{
    //

    public function dashboard()
    {
        return view('frontdesk/dashboard');
    }
    public function booking()
    {
        return view('frontdesk/booking');
    }
    public function reservation()
    {
        return view('frontdesk/reservation');
    }
}
