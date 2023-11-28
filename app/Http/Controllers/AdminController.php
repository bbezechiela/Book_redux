<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
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
        return view('admin.manageUserListing');
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
        return view('admin.adminProfile');
    }

    public function manageSeller()
    {
        return view('admin.manageSeller');
    }
}
