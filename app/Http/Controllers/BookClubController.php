<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\BookClub;
use App\Models\BookClub_Event_Members;
use App\Models\BookClub_Join_Requests;
use App\Models\BookClub_Events;
use App\Models\BookClub_Posts;
use Illuminate\Http\Request;

class BookClubController extends Controller
{
    // lets gow  
    // create post
    function createPost(Request $request) {
        try {
            $current_bookclub_name = $request->input('current_bookClub_name');
            $current_user_id = $request->input('current_user_id');
    
            $validated = $request->validate([
                'caption' => 'required|max:255',
                'first_img' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:10240',
                'second_img' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:10240',
                'third_img' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:10240',
                'fourth_img' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:10240',
                'fifth_img' => 'sometimes|image|mimes:jpeg,png,jpg,gift|max:10240',
            ]);
    
            $club_finder = BookClub::where('book_club_name', '=', $current_bookclub_name)->first();
            $user_finder = Users::where('id', '=', $current_user_id)->first();
    
            // first image manipulation
            $firstImgWithExt = $request->file('first_img')->getClientOriginalName();
            $firstImgWithExt = str_replace(' ', '_', $firstImgWithExt);
    
            $firstImgFileName = pathinfo($firstImgWithExt, PATHINFO_FILENAME);
            $firstImgFileExtension = $request->file('first_img')->getClientOriginalExtension();
            $firstImgFileToStore = $firstImgFileName . '_' . time() . $firstImgFileExtension;
            $request->file('first_img')->move(public_path('images/profile_photos'), $firstImgFileToStore);
            $validated['first_img'] = $firstImgFileToStore; 
    
            // second image manipulation
            $secondImgWithExt = $request->file('second_img')->getClientOriginalName();
            $secondImgWithExt = str_replace(' ', '_', $secondImgWithExt);
    
            $secondImgFileName = pathinfo($secondImgWithExt, PATHINFO_FILENAME);
            $secondImgFileExtension = $request->file('second_img')->getClientOriginalExtension();
            $secondImgFileToStore = $secondImgFileName . '_' . time() . $secondImgFileExtension;
            $request->file('second_img')->move(public_path('images/profile_photos'), $secondImgFileToStore);
            $validated['second_img'] = $secondImgFileToStore; 
    
            // third image manipulation 
            $thirdImgWithExt = $request->file('third_img')->getClientOriginalName();
            $thirdImgWithExt = str_replace(' ', '_', $thirdImgWithExt);
    
            $thirdImgFileName = pathinfo($thirdImgWithExt, PATHINFO_FILENAME);
            $thirdImgFileExtension = $request->file('third_img')->getClientOriginalExtension();
            $thirdImgFileToStore = $thirdImgFileName . '_' . time() . $thirdImgFileExtension;
            $request->file('third_img')->move(public_path('images/profile_photos'), $thirdImgFileToStore);
            $validated['third_img'] = $thirdImgFileToStore; 
    
            // fourth image manipulation
            $fourthImgWithExt = $request->file('fourth_img')->getClientOriginalName();
            $fourthImgWithExt = str_replace(' ', '_', $fourthImgWithExt);
    
            $fourthImgFileName = pathinfo($fourthImgWithExt, PATHINFO_FILENAME);
            $fourthImgFileExtension = $request->file('fourth_img')->getClientOriginalExtension();
            $fourthImgFileToStore = $fourthImgFileName . '_' . time() . $fourthImgFileExtension;
            $request->file('fourth_img')->move(public_path('images/profile_photos'), $fourthImgFileToStore);
            $validated['fourth_img'] = $fourthImgFileToStore; 
    
            // fifth image manipulation
            $fifthImgWithExt = $request->file('fifth_img')->getClientOriginalName();
            $fifthImgWithExt = str_replace(' ', '_', $fifthImgWithExt);
    
            $fifthImgFileName = pathinfo($fifthImgWithExt, PATHINFO_FILENAME);
            $fifthImgFileExtension = $request->file('fifth_img')->getClientOriginalExtension();
            $fifthImgFileToStore = $fifthImgFileName . '_' . time() . $fifthImgFileExtension;
            $request->file('fifth_img')->move(public_path('images/profile_photos'), $fifthImgFileToStore);
            $validated['fifth_img'] = $fifthImgFileToStore; 
    
            if ($club_finder->count() > 0 && $user_finder->count() > 0) {
                $club_id = $club_finder->book_club_id;
            
                $adder = BookClub_Posts::create([
                    'club_id' => $club_id, 
                    'user_id' => $current_user_id,
                    'caption' => $validated['caption'],
                    'first_img' => $validated['first_img'],
                    'second_img' => $validated['second_img'],
                    'third_img' => $validated['third_img'],
                    'fourth_img' => $validated['fourth_img'],
                    'fifth_img' => $validated['fifth_img'],
                ]);
    
                if ($adder) {
                    return response()->json(['data' => 'Post created successfully']);
                } else {
                    return response()->json(['error' => 'Post creation failed']);
                }
            } else {
                return response()->json(['error' => 'Cant find book club or user']);
            }
        } catch(Exception $e) {
            return response()->json(['error' => $e]);
        }
    }

    // get posts
    function getPosts(Request $request) {
        $current_bookclub_name = $request->query('currentBookClubName');

        $club_finder = BookClub::where('book_club_name', '=', $current_bookclub_name)->first();

        if ($club_finder->count() > 0) {
            $club_id = $club_finder->book_club_id;

            $club_posts_getter = BookClub_Posts::where('club_id', '=', $club_id)->get();

            if ($club_posts_getter->count() > 0) {
                return response()->json(['data' => $club_posts_getter]);
            } else {
                return response()->json(['error' => 'Cant find any post']);
            }
        } else {
            return response()->json(['error' => 'Cant find book club']);
        }
    }

    // create event
    function createEvent(Request $request) {
        try {
            $current_bookclub_name = $request->input('current_bookClub_name');
            $current_user_id = $request->input('current_user_id');
    
            $validated = $request->validate([
                'event_name' => 'required|max:100',
                'event_type' => 'required',
                'event_start_date' => 'required|date|before:event_end_date',
                'event_end_date' => 'required|date|after:event_start_date',
                'event_start_time' => 'required',
                'event_end_time' => 'required',
                'event_description' => 'required|max:150',
                'event_image_upload' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            ]);      

            $club_finder = BookClub::where('book_club_name', '=', $current_bookclub_name)->first();
            $user_finder = Users::where('id', '=', $current_user_id)->first();
    
            $fileNameWithExt = $request->file('event_image_upload')->getClientOriginalName();
            $fileNameWithExt = str_replace(' ', '_', $fileNameWithExt);
            
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $fileExtension = $request->file('event_image_upload')->getClientOriginalExtension();
            $fileNameToStore = $fileName . '_' . time() . $fileExtension;
            $request->file('event_image_upload')->move(public_path('images/profile_photos'), $fileNameToStore);
            $validated['event_image_upload'] = $fileNameToStore;

            if ($club_finder->count() > 0 && $user_finder->count() > 0) {
                $club_id = $club_finder->book_club_id;

                $adder = BookClub_Events::create([ 
                    'club_id' => $club_id,
                    'user_id' => $current_user_id,
                    'name' => $validated['event_name'],
                    'type' => $validated['event_type'],
                    'start_date' => $validated['event_start_date'],
                    'end_date' => $validated['event_end_date'],
                    'start_time' => $validated['event_start_time'],
                    'end_time' => $validated['event_end_time'],
                    'description' => $validated['event_description'],
                    'image_path' => $validated['event_image_upload']
                ]);

                if ($adder) {
                    return response()->json(['data' => 'Event successfully created']);
                } else {
                    return response()->json(['error' => 'Cant create event.']);
                }
            } else {
                return response()->json(['error' => 'Error on finding club or user']);
            }
        } catch (Exception $e) {
            return response()->json(['error' => $e]);
        } 
    }

    // display events 
    function getEvents(Request $request) {
        $current_bookclub_name = $request->query('currentBookClubName');

        $club_finder = BookClub::where('book_club_name', '=', $current_bookclub_name)->first();

        if ($club_finder->count() > 0) {
            $club_id = $club_finder->book_club_id;

            $getter = BookClub_Events::where('club_id', '=', $club_id)->get();

            if ($getter->count() > 0) {
                return response()->json(['data' => $getter]);
            } else {
                return response()->json(['error' => 'No active events']);
            }
        }
    }

    // get user
    function getUser(Request $request) {
        $current_user_id = $request->query('userId');

        $getter = Users::where('id', '=', $current_user_id)->get();

        if ($getter->count() > 0) {
            return response()->json(['data' => $getter]);
        } else {
            return response()->json(['error' => 'Error in getting user']);
        }
    }

    // add event member
    function addMember(Request $request) {
        $event_id = $request->json('eventId');
        $current_user_id = $request->json('userId');    

        $adder = BookClub_Event_Members::create([
            'event_id' => $event_id,
            'user_id' => $current_user_id
        ]);

        if ($adder) {
            return response()->json(['data' => 'Member added to the said event']);
        } else {
            return response()->json(['error' => 'Failed to add member']);
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

