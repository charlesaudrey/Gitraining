<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function index()
    {
        return view('administrator/dashboard');
    }

    public function userList()
    {
        return view('administrator/userManagement/userList');
    }

    public function userProperty()
    {
        return view('administrator/userManagement/userProperty');
    }

    public function adduserList()
    {
        return view('administrator/userManagement/addUserList');
    }
    public function editUser()
    {
        return view('administrator/userManagement/editUser');
    }
    public function viewUser()
    {
        return view('administrator/userManagement/viewUser');
    }



    public function companyList()
    {
        return view('administrator/propertyManagement/companyList');
    }

    public function properties()
    {
        return view('administrator/propertyManagement/properties');
    }

    public function propertyRooms()
    {
        return view('administrator/propertyManagement/propertyRooms');
    }
}
