<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function dashboard()
    {
        return view('inventory/dashboard');
    }
    public function consumable()
    {
        return view('inventory/consumable');
    }

    public function nonconsumable()
    {
        return view('inventory/nonconsumable');
    }
    public function damageItems()
    {
        return view('inventory/damageItems');
    }
    public function laundryItems()
    {
        return view('inventory/laundryItems');
    }
}
