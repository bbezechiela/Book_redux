<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\BookClub;
use App\Models\BookClub_Moderators;
use Illuminate\Http\Request;

class BookClubController extends Controller
{
    // lets gow
    // selling club member checker
    function sellingClubMemberChecker(Request $request) {
        $currentUserId = $request->query('currentUserId');

        $checker = Users::where('id', '=', $currentUserId)->get();

        if ($checker->count() > 0) {
            return response()->json(['data' => $checker]);
        } else {
            return response()->json(['error' => 'User not part of the club']);
        }
    }   

    // selling club creation
    function createBookSellingClub(Request $request) {
        $clubName = $request->json('bookClubName');
        $clubModerator = $request->json('sellingClubModerators');
        $clubMembers = $request->json('sellingClubMembers');

        $creation = BookClub::create([
            'book_club_name' => $clubName,
            'book_club_moderators' => $clubModerator,
            'book_club_members' => $clubMembers,
        ]);

        if ($creation) {
            return response()->json(['data' => 'creation success', $creation]);
        } else {
            return response()->json('error', 'creation failed'); 
        }
    }

    // admin checker
    function adminChecker(Request $request) {
        $current_user_id = $request->query('currentUserId');

        // temporary, pero ig split anay it column moderators
        $checker = Users::where('id', '=', $current_user_id)->get();

        if ($checker->count() > 0) {
            return response()->json(['data' => $checker]);
        } else {
            return response()->json(['error' => 'User not admin']);
        } 
    }

    // moderator adder
    function addModerators(Request $request) {
        $user_id = $request->json('user_id');

        $adder = BookClub_Moderators::create([
            
        ]);

    }


}
