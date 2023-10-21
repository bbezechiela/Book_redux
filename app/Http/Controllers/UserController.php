<?php

namespace App\Http\Controllers;

use App\Models\Books;
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
            return redirect('/home');
        } else {
            return view('users.login');
        }
    }

    public function signup(Request $request)
    {
        if ($request->session()->has('user')) {
            return redirect('/home');
        } else {
            return view('users.signup');
        }
    }

    public function home()
    {
        if (session()->has('user')) {

            // $users = Users::where();
            // $users = Users::find(session('id'));
            $post = Books::all();
            return view('users.homepage', ['post' => $post]);
            // return view('users.homepage')->with('post', $post);
            // return view('users.homepage', compact('post'));
        } else {
            return view('landing_page')->with('message', 'You have to login first');
        }
    }

    public function singleProduct()
    {
        return view('users.singleProduct');
    }

    public function cart()
    {
        return view('users.cart');
    }

    public function checkout()
    {
        return view('users.checkout');
    }

    public function deliveryAddress()
    {
        return view('users.deliveryAddress');
    }

    public function wishlist()
    {
        if (session()->has('user')) {
            return view('users.wishlist');
        } else {
            return view('landing_page')->with('message', 'You have to login first');
        }
    }

    public function categories()
    {
        return view('users.categories');
    }

    // public function myList()
    // {
    //     if (session()->has('user')) {
    //         return view('users.myList');
    //     } else {            
    //         return view('landing_page')->with('message', 'You have to login first');
    //     }
    // }

    public function myLikes()
    {
        return view('users.myLikes');
    }

    public function myProfile()
    {
        return view('users.myProfile');
    }

    public function myPurchase()
    {
        return view('users.myPurchase');
    }

    public function notification()
    {
        return view('users.notification');
    }

    public function readNotification()
    {
        return view('users.readNotification');
    }

    public function unreadNotification()
    {
        return view('users.unreadNotification');
    }

    public function message()
    {
        return view('users.message');
    }

    public function toReceive()
    {
        return view('users.toReceive');
    }

    public function deliveredMyPurchase()
    {
        return view('users.deliveredMyPurchase');
    }

    public function droppedMyPurchase()
    {
        return view('users.droppedMyPurchase');
    }

    public function refundMyPurchase()
    {
        return view('users.refundMyPurchase');
    }

    public function address()
    {
        return view('users.address');
    }

    public function changePassword()
    {
        return view('users.changePassword');
    }

    public function userReviewsAndRatings()
    {
        return view('users.userReviewsAndRatings');
    }
    
    public function orders()
    {
        return view('users.orders');
    }

    public function delivered()
    {
        return view('users.delivered');
    }

    public function dropped()
    {
        return view('users.dropped');
    }

    public function refund()
    {
        return view('users.refund');
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
                'id' => $user->id,
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
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
                'id' => $user["id"],
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
