<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function channelManager()
    {
        return view('settings/channelManager');
    }
}
