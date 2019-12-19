<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Contracts\Auth\Authenticatable;


class accounting extends Eloquent implements Authenticatable
{
    //
    public function dashboard()
    {
        return view('administrator/dashboard');
    }

    public function payment()
    {
        return view('administrator/dashboard');
    }

    public function expenses()
    {
        return view('administrator/dashboard');
    }

    public function income()
    {
        return view('administrator/dashboard');
    }
}
