<?php

namespace App\Http\Controllers;

use App\Models\Users;
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

    public function wishlist() {
        return view('users.wishlist');
    }

    public function myList() {
        return view('users.myList');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'first_name' => ['required', 'min:4'],
            'last_name' => ['required', 'min:4'],
            'email' => ['required', 'email'],
            'phone_number' => ['required', 'max:12'],
            'address' => ['required', 'min:4'],
            'birthday' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'interest' => 'required',
            'username' => 'required',
            'password' => 'required',
            'profile_photo' => 'required'
        ]);

        

        $validated["password"] =  bcrypt($validated["password"]);
        $validated["interest"] = implode(', ', $validated["interest"]);
        // dd($validated);

        $user = Users::create($validated);
        // auth()->login($user);
        return redirect()->route('home')->with('success', 'Inserted successfully');
    }

}
