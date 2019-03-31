<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function stu_login()
    {
    	return view('pages.stu_login');
    }
    public function login_page()
    {
    	return view('pages.login_page');
    }
    public function login()
    {
    	return view('auth.login');
    }
}
