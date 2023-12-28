<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    function index()
    {

        return view('user.auth.login');
    }
    function dashboard()
    {
        return view('dashboard.index');
    }
}
