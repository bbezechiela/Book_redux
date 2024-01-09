<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\BookClub;
use App\Models\BookClub_Moderators;
use App\Models\BookClub_Members;
use App\Models\BookClub_Join_Requests;
use Illuminate\Http\Request;

class BookClubController extends Controller
{
    // lets gow
    // selling club member checker
    function sellingClubMemberChecker(Request $request) {
        $currentUserId = $request->query('currentUserId');

        $checker = BookClub_Members::where('user_id', '=', $currentUserId)->get();

        if ($checker->count() > 0) {
            return response()->json(['data' => 'Current user is a member of this club']);
        } else {
            return response()->json(['error' => 'Current user is not a member of this club']);
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

    // moderator checker || member checker
    function moderatorChecker(Request $request) {
        $current_user_id = $request->query('currentUserId');

        $checker = BookClub_Moderators::where('user_id', '=', $current_user_id)->get();

        if ($checker->count() > 0) {
            return response()->json(['data' => $checker]);
        }  else {
            return response()->json(['error' => 'Moderator Checker Error']);
        }
    }

    // moderator adder
    function addModerators(Request $request) {
        $club_name = $request->json('club_name');
        $user_id = $request->json('user_id');

        $club_finder = BookClub::where('book_club_name', '=', $club_name)->get();
        $user_finder = Users::where('id', '=', $user_id)->get();

        if ($club_finder->count() > 0 && $user_finder->count() > 0) {
            foreach ($club_finder as $club) {
                $club_id = $club->book_club_id;
            }

            $adder = BookClub_Moderators::create([ 
                'club_id' => $club_id,
                'user_id' => $user_id
            ]);

            if ($adder) {
                return response()->json(['data' => 'Moderator Added Successfully']);
            } else {
                return response()->json(['error' => 'Error on adding a moderator']);
            }
        } else {
            return response()->json(['error' => 'Cant find book club or user']);
        }
    }

    // member adder
    function addMembers(Request $request) {
        $club_name = $request->json('club_name');
        $current_user_id = $request->json('user_id');

        $club_finder = BookClub::where('book_club_name', '=', $club_name)->get();
        $user_finder = Users::where('id', '=', $current_user_id)->get();

        if ($club_finder->count() > 0  && $user_finder->count() > 0) {
            foreach ($club_finder as $club) {
                $club_id = $club->book_club_id;
            }

            $adder = BookClub_Members::create([
                'club_id' => $club_id,
                'user_id' => $current_user_id
            ]);

            if ($adder) {
                return response()->json(['data' => 'Member Added Successfully']);
            } else {
                return response()->json(['error' => 'Error on Adding Member']);
            }
        } else {
            return response()->json(['error' => 'Cant find book club or user']);
        }
    }
    
    // book club join request
    function joinRequest(Request $request) {
        $current_user_id = $request->json('currentUserId');
        $current_bookclub_name = $request->json('currentBookClubName');
        $request_status = $request->json('requestStatus');
        
        $club_finder = BookClub::where('book_club_name', '=', $current_bookclub_name)->get();

        if ($club_finder->count() > 0) {
            foreach ($club_finder as $club) {
                $club_id = $club->book_club_id; 
            }

            $adder = BookClub_Join_Requests::create([
                'user_id' => $current_user_id,
                'book_club_id' => $club_id,
                'request_status' => $request_status
            ]);

            if ($adder) {
                return response()->json(['data' => 'Book selling club join request sent']);
            } else {
                return response()->json(['error' => 'Book selling club join request failed']);
            }
            
        } else {
            return response()->json(['error' => 'Cant the book club']);
        }
        

    }
}
