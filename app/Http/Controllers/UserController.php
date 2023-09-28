<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\alert;

// use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function sidebar()
    {
        return view('components.sidebar');
    }

    public function welcome()
    {
        return view('landing_page');
    }

    public function login(Request $request)
    {
        if ($request->session()->has('user')) {
            return view('users.homepage');
        } else {
            return view('users.login');
        }
    }

    public function signup(Request $request)
    {
        if ($request->session()->has('user')) {
            return view('users.homepage');
        } else {
            return view('users.signup');
        }
    }

    public function home()
    {
        if (session()->has('user')) {
            return view('users.homepage');
        } else {
            return view('landing_page')->with('message', 'You have to login first');
        }
    }

    public function wishlist()
    {
        if (session()->has('user')) {
            return view('users.wishlist');
        } else {
            return view('landing_page')->with('message', 'You have to login first');
        }
    }

    public function myList()
    {
        if (session()->has('user')) {
            return view('users.myList');
        } else {            
            return view('landing_page')->with('message', 'You have to login first');
        }
    }

    public function store(Request $request)
    {
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
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240'
        ]);

        $validated["password"] =  bcrypt($validated["password"]);
        $validated["interest"] = implode(', ', $validated["interest"]);

        $fileNameWithExt = $request->file('profile_photo')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('profile_photo')->getClientOriginalExtension();
        $fileNameToStore = $fileName . '_' . time() . $extension;
        $request->file('profile_photo')->move(public_path('images/profile_photos'), $fileNameToStore);
        $validated["profile_photo"] = $fileNameToStore;


        $user = Users::create($validated);

        if ($user) {
            $request->session()->put([
                'first_name' => $validated["first_name"],
                'last_name' => $validated["last_name"],
                'address' => $validated["address"],
                'user' => $validated["username"],
                'profile_pic' => $validated["profile_photo"]
            ]);
            return redirect()->route('home');
        } else {
            return view('users.signup')->with('message', "Cannot sign up");
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return view('landing_page');
    }

    public function login_process(Request $request)
    {
        $login = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = Users::where('username', $login["username"])->first();
        if ($user && Hash::check($login["password"], $user["password"])) {
            $request->session()->put([
                'first_name' => $user["first_name"],
                'last_name' => $user["last_name"],
                'address' => $user["address"],
                'user' => $user["username"],
                'profile_pic' => $user["profile_photo"]
            ]);
            return redirect()->route('home');
        } else {
            return view('users.login')->with('message', 'Incorrect username or password');
        }
    }
}
