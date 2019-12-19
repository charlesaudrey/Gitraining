<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountingController extends Controller
{
    public function dashboard()
    {
        return view('accounting/dashboard');
    }
    public function payment()
    {
        return view('accounting/payment');
    }
    public function expenses()
    {
        return view('accounting/expenses');
    }
    public function income()
    {
        return view('accounting/income');
    }
}
