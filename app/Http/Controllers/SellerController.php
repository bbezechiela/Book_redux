<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function sellerSignup()
    {
        return view('bookseller.sellerSignup');
    }


    public function sellerDashboard()
    {
        return view('bookseller.sellerDashboard');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required',
            'owner_name' => 'required',
            'email' => ['required', 'email'],
            'address' => 'required',
            'registration_number' => 'required',
            'business_name' => 'required',
            'phone_number' => 'required',
            'date_registered' => 'required',
            'permit' => 'required',
            'username' => 'required',
            'password' => 'required',
            'profile_photo' => 'required'
        ]);

        $validated["password"] =  bcrypt($validated["password"]);

        $fileNameWithExt = $request->file('profile_photo')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('profile_photo')->getClientOriginalExtension();
        $fileNameToStore = $fileName . '_' . time() . $extension;
        $request->file('profile_photo')->move(public_path('images/profile_photos'), $fileNameToStore);
        $validated["profile_photo"] = $fileNameToStore;

        $permitWithExt = $request->file('permit')->getClientOriginalName();
        $permitFileName = pathinfo($permitWithExt, PATHINFO_FILENAME);
        $permitExtension = $request->file('permit')->getClientOriginalExtension();
        $permitToStore = $permitFileName . '_' . time() . $permitExtension;
        $request->file('permit')->move(public_path('images/permits'), $permitToStore);
        $validated["permit"] = $permitToStore;

        // dd($validated);
        $user = Users::create($validated);
        if ($user) {
            $request->session()->put([
                'id' => $user->id,
                'type' => $user->type,
                'owner_name' => $user->owner_name,
                'business_name' => $user->business_name,
                'address' => $validated["address"],
                'user' => $validated["username"],
                'profile_pic' => $validated["profile_photo"]
            ]);
            return redirect('/sellerboard');
        } else {
            return view('bookseller.sellerSignup');
        }
    }
}
