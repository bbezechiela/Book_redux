<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Users;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        $CurrDay = Carbon::now()->day;
        $CurrMon = Carbon::now()->month;
        $CurrYr = Carbon::now()->year;

        $CountCurrUser = Users::whereMonth('created_at', $CurrMon)->count();
        $CountCurrListing = Books::whereDay('created_at', $CurrDay)->count();

        return view('admin.dashboard', compact('CountCurrUser', 'CountCurrListing'));
    }

    public function manageResources()
    {
        return view('admin.manageResources');
    }

    public function manageRefund()
    {
        return view('admin.manageRefund');
    }

    public function manageReviews()
    {
        return view('admin.manageReviews');
    }

    public function manageUserAccounts()
    {
        return view('admin.manageUserAccounts');
    }

    public function manageRentingClub()
    {
        return view('admin.manageRentingClub');
    }

    public function manageSellingClub()
    {
        return view('admin.manageSellingClub');
    }

    public function manageExchangeClub()
    {
        return view('admin.manageExchangeClub');
    }

    public function manageUserListing()
    {
        $user = Books::all();
        return view('admin.manageUserListing', ['user' => $user]);
    }

    public function reportedListing()
    {
        return view('admin.reportedListing');
    }

    public function reportedPost()
    {
        return view('admin.reportedPost');
    }

    public function reportedExchangePost()
    {
        return view('admin.reportedExchangePost');
    }

    public function reportedRentPost()
    {
        return view('admin.reportedRentPost');
    }

    public function reportedUser()
    {
        return view('admin.reportedUser');
    }

    public function reportedSeller()
    {
        return view('admin.reportedSeller');
    }

    public function adminProfile()
    {
        $user = Users::find(session('id'));
        return view('admin.adminProfile', ['user' => $user]);
    }

    public function manageSeller()
    {
        return view('admin.manageSeller');
    }

    public function updateProfile(Request $request)
    {
        // dd($request->all());
        $user = Users::find($request["id"]);
        if ($request["profile_photo"] == null) {
            if ($request["password"] == null) {
                $user->update([
                    'first_name' => $request["first_name"],
                    'last_name' => $request["last_name"],
                    'email' => $request["email"],
                    'phone_number' => $request["phone_number"]
                ]);
                return redirect('/adminprofile')->with('success', 'Profile updated successfully');
            } else {
                if (Hash::check($request["curr_pass"], $user->password)) {
                    $user->update([
                        'first_name' => $request["first_name"],
                        'last_name' => $request["last_name"],
                        'email' => $request["email"],
                        'phone_number' => $request["phone_number"],
                        'password' => bcrypt($request["password"])
                    ]);
                    return redirect('/adminprofile')->with('success', 'Profile updated successfully');
                } else {
                    return redirect('/adminprofile')->with('message', 'Your current password do not match');
                }
            }
        } else {
            $fileNameWithExt = $request->file('profile_photo')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('profile_photo')->getClientOriginalExtension();
            $fileNameToStore = $fileName . '_' . time() . $extension;
            $request->file('profile_photo')->move(public_path('images/profile_photos'), $fileNameToStore);
            // $validated["profile_photo"] = $fileNameToStore;
            if ($request["password"] == null) {
                $user->update([
                    'profile_photo' => $fileNameToStore,
                    'first_name' => $request["first_name"],
                    'last_name' => $request["last_name"],
                    'email' => $request["email"],
                    'phone_number' => $request["phone_number"]
                ]);
                return redirect('/adminprofile')->with('success', 'Profile updated successfully');
            } else {
                if (Hash::check($request["curr_pass"], $user->password)) {
                    $user->update([
                        'profile_photo' => $fileNameToStore,
                        'first_name' => $request["first_name"],
                        'last_name' => $request["last_name"],
                        'email' => $request["email"],
                        'phone_number' => $request["phone_number"],
                        'password' => bcrypt($request["password"])
                    ]);
                    return redirect('/adminprofile')->with('success', 'Profile updated successfully');
                } else {
                    return redirect('/adminprofile')->with('message', 'Your current password do not match');
                }
            }
        }
    }

    public function deleteUserListing($id) {
        $listing = Books::with('item')->find($id);
        $listing->item()->delete();
        $listing->delete();

        if ($listing) {
            return redirect('/manageuserlisting');
        } else {
            return redirect('/manageuserlisting')->with('error', 'Cannot delete Item');
        }    
    }



    // API's
    public function getNewUsersToday()
    {
        $CurrentDay = Carbon::now()->day;
        $CountCurrentUser = Users::whereDay('created_at', $CurrentDay)->count();

        return $CountCurrentUser;
    }

    public function getNewUsersThisMonth()
    {
        $CurrentMonth = Carbon::now()->month;
        $CountCurrentUser = Users::whereMonth('created_at', $CurrentMonth)->count();

        return $CountCurrentUser;
    }

    public function getNewUsersThisYear()
    {
        $CurrentYear = Carbon::now()->year;
        $CountCurrentUser = Users::whereYear('created_at', $CurrentYear)->count();

        return $CountCurrentUser;
    }

    public function getNewListingToday()
    {
        $CurrentDay = Carbon::now()->day;
        $CountCurrentUser = Books::whereDay('created_at', $CurrentDay)->count();

        return $CountCurrentUser;
    }

    public function getNewListingThisMonth()
    {
        $CurrentMonth = Carbon::now()->month;
        $CountCurrentUser = Books::whereMonth('created_at', $CurrentMonth)->count();

        return $CountCurrentUser;
    }

    public function getNewListingThisYear()
    {
        $CurrentYear = Carbon::now()->year;
        $CountCurrentUser = Books::whereYear('created_at', $CurrentYear)->count();

        return $CountCurrentUser;
    }
}
