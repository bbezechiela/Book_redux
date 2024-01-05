<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\BookClub;
use Illuminate\Http\Request;

class BookClubController extends Controller
{
    //lets gow
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
            return response->json('data', 'successfull ' + $creation);
        } else {
            return response->json('error', 'creation failed'); 
        }

    }
}
