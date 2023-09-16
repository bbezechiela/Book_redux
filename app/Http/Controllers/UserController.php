<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function sidebar() {
        return view('components.sidebar');
    }

    public function welcome() {
        return view('landing_page');
    }

    public function login() {
        return view('users.login');
    }

    public function signup() {
        return view('users.signup');
    }

    public function home() {
        return view('users.homepage');
    }

    public function myList() {
        return view('users.myList');
    }

}
