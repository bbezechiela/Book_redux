<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\BookClub;
use App\Models\BookClub_Members;
use App\Models\BookClub_Join_Requests;
use App\Models\BookClub_Events;
use Illuminate\Http\Request;

class BookClubController extends Controller
{
    // lets gow  
    // create event
    function createEvent(Request $request) {
        try {
            $current_bookclub_name = $request->json('current_bookClub_name');
            $current_user_id = $request->json('current_user_id');
    
            $validated = $request->validate([
                'event_name' => 'required',
                'event_type' => 'required',
                'event_start_date' => 'required',
                'event_end_date' => 'required',
                'event_start_time' => 'required',
                'event_end_time' => 'required',
                'event_description' => 'required',
                'event_image_upload' => 'required'
            ]);      
    
            $club_finder = BookClub::where('book_club_name', '=', $current_bookclub_name)->first();
            $user_finder = Users::where('id', '=', $current_user_id)->first();
    
            $fileNameWithExt = $request->file('event_image_upload')->getClientOriginalName();
            
            return response()->json(['data' => $fileNameWithExt]);
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $fileExtension = $request->file('event_image_upload')->getClientOriginalExtension();
            $fileNameToStore = $fileName . '_' . time() . $fileExtension;
            $request->file('event_image_upload')->move(public_path('images/profile_photos'), $fileNameToStore);
            $validated['event_image_upload'] = $fileNameToStore;
        } catch(\Exception $e) {
            return response()->json(['error' => $e]);
        }

        if (true) {
            $club_id = $club_finder->book_club_id;
            $user_id = $user_finder->id;

            $adder = BookClub_Events::create([ 
                'club_id' => $club_id,
                'user_id' => $user_id,
                'name' => $validated['event_name'],
                'type' => $validated['event_type'],
                'start_date' => $validated['event_start_date'],
                'end_date' => $validated['event_end_date'],
                'start_time' => $validated['event_start_time'],
                'end_time' => $validated['event_end_time'],
                'description' => $validated['event_description'],
                'image_path' => $validated['event_image_upload']
            ]);

            // $adder = BookClub_Events::create([ 
            //     'club_id' => 1,
            //     'user_id' => 2,
            //     'name' => 'heelo',
            //     'type' => 'Virtual',
            //     'start_date' => '1990-12-12',
            //     'end_date' => '1991-12-12',
            //     'start_time' => '11:12',
            //     'end_time' => '12:12',
            //     'description' => 'hellosdasdasdas',
            //     'image_path' => '021310123'
            // ]);
        
            if ($adder) {
                return response()->json(['data' => 'Event successfully created']);
            } else {
                return response()->json(['error' => 'Cant create event.']);
            }
        } else {
            return response()->json(['error' => 'Error on finding club or user']);
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

    // book club join request getter
    function joinRequestGetter(Request $request) {
        $request_status = $request->query('request_status');
    
        $request_checker = BookClub_Join_Requests::where('request_status', '=', $request_status)->get();

        if ($request_checker->count() > 0) {
            // iterate ha model collection
            foreach($request_checker as $join_request) {
                $user_id_getter = $join_request->user_id;
                $club_id_getter = $join_request->book_club_id;
            }

            // user and club checker
            $user_checker = Users::where('id', '=', $user_id_getter)->first();
            $club_checker = BookClub::where('book_club_id', '=', $club_id_getter)->first();
            if ($user_checker->count() > 0 && $club_checker->count() > 0) {
                return response()->json(['data' => $request_checker, 'user_info' => $user_checker, 'club_info' => $club_checker]);
            } else {
                return response()->json(['error' => 'problem might be in user checker or club checker']);
            }
        } else {
            return response()->json(['error' => 'failed to fetch requests']);
        }
    }

}

