<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function index()
    {
        //
        return view('auth/login');

    }

    public function loginUser()
    {
        //
        return view('auth/loginUser');

    }

    public function loginStudent()
    {
        //
        return view('auth/loginStudent');

    }

    public function loginTeacher()
    {
        //
        return view('auth/loginTeacher');

    }

    public function loginAdmin()
    {
        //
        return view('auth/loginAdmin');

    }

}
