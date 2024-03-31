<?php

namespace App\Http\Controllers;

use App\Models\Conversations;
use App\Models\Messages;
use App\Models\Users;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // mabuhay philippines
    function getConversations(Request $request) {
        $lastConversationTimestamp = $request->query('lastConversationTimestamp');
        $current_username = $request->query('current_username');
              
        $getter = Conversations::where('conversation_name', 'like', '%' . $current_username . '%')->where('created_at', '>', $lastConversationTimestamp)->get();

        $receiverUsernames = [];

        foreach ($getter as $conversation) {
            $conversation_name = $conversation->conversation_name;
        
            $arr = explode(',', $conversation_name);
            $receiver_username = ($arr[0] === $current_username) ? strval($arr[1]) : strval($arr[0]);
        
            $getterTwo = Users::select('profile_photo')->where('username', $receiver_username)->first();

            $newKey = 'profile_photo';
            $newValue = $getterTwo;

            $conversation[$newKey] = $newValue;
        }
        
        if ($getter->isNotEmpty()) {
            return response()->json(['data' => $getter]);
        } else {            
            return response()->json(['error' => 'No conversation']);
        }
    }

    // send message from conversation approach
    function sendMessageTwo(Request $request) {
        // $current_username = $request->json('current_username');
        // $sender_id = $request->json('sender_id');
        // $message_content = $request->json('message_content');
        // $message_type = $request->json('message_type');
        // $conversation_name = $request->json('conversation_name');
        // $conversation_id = $request->json('conversation_id');
        $current_username = $request->input('current_username');
        $sender_id = $request->input('sender_id');
        $message_type = $request->input('message_type');
        $conversation_id = $request->input('conversation_id');
        $conversation_name = $request->input('conversation_name');

        $message_content = null;
        if ($message_type != 'text') {
            $validated = $request->validate([
                'message_content' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240'
            ]);

            // get original file contents including name
            $imgWithOrigName = $request->file('message_content')->getClientOriginalName();
            $imgWithOrigName = str_replace(' ', '_', $imgWithOrigName);
            
            // just get the filename
            $imgFileName = pathinfo($imgWithOrigName, PATHINFO_FILENAME);
            // just get file name extension
            $imgFileNameWithExt = $request->file('message_content')->getClientOriginalExtension();

            $imgToStore = $imgFileName . '_' . time() . '.' . $imgFileNameWithExt;
            $request->file('message_content')->move(public_path('images/messages_photos'), $imgToStore);
            
            $message_content = $imgToStore;

        } else {
            $message_content = $request->input('message_content');
        }

        // ig explode para mag bulag hira hin container it duwa na string
        $arr = explode(',', $conversation_name);
        $receiver_name = ($arr[0] === $current_username) ? strval($arr[1]) : strval($arr[0]);

        // pag kuha receiver id
        $receiverIdQuery = Users::where('username', $receiver_name)->get();

        if (!$receiverIdQuery->isEmpty()) {
            $receiver_id = $receiverIdQuery->first()->id;
            
            $messageInput = Messages::create([
                'sender_id' => $sender_id,
                'receiver_id' => $receiver_id,
                'message_content' => $message_content,
                'message_type' => $message_type,
                'conversation_id' => $conversation_id,
            ]);

            if ($messageInput) {
                return response()->json(['message' => 'Message sent successfuly']);
            } else {
                return response()->json(['message' => 'Message was not sent successfuly']);
            }

        } else {
            return response()->json(['error' => 'cant be found']);
        }
    }

    // send message from search approach
    function sendMessage(Request $request) {
        $sender_id = $request->json('sender_id'); 
        $receiver_id = $request->json('receiver_id');
        $message_content = $request->json('message_content');
        $conversation_name = $request->json('conversation_name');

        $participantsUserArr = explode(',', $conversation_name);
        sort($participantsUserArr);
        $sorted_conversation_name = implode(',', $participantsUserArr);

        $checker1 = Conversations::where('conversation_name',  $sorted_conversation_name)->first();

        if ($checker1) {
            $messageInsert = Messages::create([
                'sender_id' => $sender_id,
                'receiver_id' => $receiver_id,
                'message_content' => $message_content,
                'conversation_id' => $checker1->conversation_id
            ]);
            if ($messageInsert) {
                return response()->json(['message' => 'message inserted successfully']);
            } else {
                return response()->json(['message' => 'Database errorr']);
            }
        } else {
            return response()->json(['message' => 'waray pa kita convo']);
        }
    }

    // get messages
    function getMessage(Request $request) {
        // since nagamit kita backtick syntax pag pass hin value tikang ha url need to gumamit hin query function ha request class para ma retreive an value 
        $lastMessageTimestamp = $request->query('lastMessageTimestamp');
        $conversation_name = $request->query('conversationName');
    
        $participantsUserArr = explode(',', $conversation_name);
        sort($participantsUserArr);
        $sorted_conversation_name = implode(',', $participantsUserArr);

        $checkConversations = Conversations::where('conversation_name', $sorted_conversation_name)->first();

        if ($checkConversations) {
            $getMessage = Messages::where('conversation_id', $checkConversations->conversation_id)->where('created_at', ">", $lastMessageTimestamp)->get();

            if ($getMessage) {
                return response()->json(['data' => $getMessage]);
            } else {
                return response()->json(['data' => 'Theres no record']);        
            }
        }      
    }

    // search user function (I MADE SOME CHANGES. IT CAN NOW SEARCH USER BY USERNAME, FNAME, & LNAME)
    function searchUser(Request $request) {
    
        $username = $request->query('username');
        $first_name = $request->query('first_name');
        $last_name = $request->query('last_name');

        $getUsername = Users::where('username', "=", $username)->first();
        $getFirst_name = Users::where('first_name', "=", $first_name)->first();
        $getLast_name = Users::where('last_name', "=", $last_name)->first();

        if ($getUsername) {
            return response()->json(['data' => $getUsername]);
            return response()->json(['data' => $getFirst_name]);
            return response()->json(['data' => $getLast_name]);
        } else {
            return response()->json(['error' => 'Theres no record']);
        }
    }

    // create conversation function
    function createConversation(Request $request) {
        $conversation_name = $request->json('conversation_name');

        $participantsUserArr = explode(',', $conversation_name);
        sort($participantsUserArr);
        $sorted_conversation_name = implode(',', $participantsUserArr);
        
        $checkConversations = Conversations::where('conversation_name', $sorted_conversation_name)->first();
        
        if ($checkConversations) {
            return response()->json(['message' => 'mayda na exist na conversation']);
        } else {
            $createConversation = Conversations::create([
                'conversation_name' => $sorted_conversation_name
            ]);
            if ($createConversation) {
                return response()->json(['message' => 'new conversation created successfully', 'data' => $createConversation]);
            } else {
                return response()->json(['message' => 'creation denied']);
            }
        }
    }

    // delete conversation ctn based 
    function deleteConversationCtnBased(Request $request) {
        $conversation_id = $request->query('conversation_id');
    
        $deleteMessages = Messages::where('conversation_id', $conversation_id)->delete();

        if ($deleteMessages) {
            $deletedConvo = Conversations::where('conversation_id', $conversation_id)->get();
            $deleteConversation = Conversations::where('conversation_id', $conversation_id)->delete();
            if ($deleteConversation) {
                return response()->json(['data' => $deletedConvo]);
            }
        } else {
            return response()->json(['error' => 'cant find anything']);
        }
    }

    // delete conversation search based
    function deleteConversationSearchBased(Request $request) {
        $conversation_name = $request->query('conversation_name');

        $explodeCtn = explode(',', $conversation_name);
        sort($explodeCtn);
        $implodeCtn = implode(',', $explodeCtn);

        $getConversationId = Conversations::where('conversation_name', $implodeCtn)->first();

        if ($getConversationId) {
            $conversation_id = $getConversationId->conversation_id;
            $deleteMessages = Messages::where('conversation_id', $conversation_id)->delete();

            if ($deleteMessages) {
                $deleteConversation = Conversations::where('conversation_id', $conversation_id)->delete();

                    if ($deleteConversation) {
                    return response()->json(['data' => 'deleted successfuly pati container']);
                }
            }
        } else {
            return response()->json(['error' => 'may error']);
        }
    }

    // full name getter
    function fullnameGetter(Request $request) {
        $receiverUsername = $request->query('receiverUsername');

        $getter = Users::select('first_name', 'last_name')->where('username', $receiverUsername)->first();
        
        if ($getter) {
            return response()->json(['data' => $getter]);   
        } else {
            return response()->json(['error' => 'cant find user']);
        }
    }

     // testing
    function messages($username) {
        return view('users.message', ['data' => $username]);
    }

    // messages from left nav
    function messageses() {
        return view('users.message', ['data' => 'noone']);
    }

    function messageUsingPost(Request $request) {
        $username = $request->query('username');

        $getter = Users::where('username', '=', $username)->get();

        if ($getter->count() > 0) {
            return response()->json(['data' => $getter]);
        } else {
            return response()->json(['error' => 'error']);
        }
    }

    function sendMessageThree(Request $request) {
        $sender_id = $request->json('sender_id');
        $receiver_id = $request->json('receiver_id');
        $message_content = $request->json('message_content');
        $conversation_name = $request->json('conversation_name');        

        $participantsUserArr = explode(',', $conversation_name);
        sort($participantsUserArr);
        $sorted_conversation_name = implode(',', $participantsUserArr);

        $checker = Conversations::where('conversation_name', $sorted_conversation_name)->first();

        if ($checker) {
            $messageInsert = Messages::create([
                'sender_id' => $sender_id,
                'receiver_id' => $receiver_id,
                'message_content' => $message_content,
                'conversation_id' => $checker->conversation_id
            ]);
            if ($messageInsert) {
                return response()->json(['message' => 'message inserted successfully']);
            } else {
                return response()->json(['message' => 'Database errorr']);
            }
        } else {
            return response()->json(['message' => 'waray pa kita convo']);
        }
    }

    function getMessagesPostApproach(Request $request) {
         // since nagamit kita backtick syntax pag pass hin value tikang ha url need to gumamit hin query function ha request class para ma retreive an value 
         $lastMessageTimestamp = $request->query('lastMessageTimestamp');
         $conversation_name = $request->query('conversationName');
     
         $participantsUserArr = explode(',', $conversation_name);
         sort($participantsUserArr);
         $sorted_conversation_name = implode(',', $participantsUserArr);
 
         $checkConversations = Conversations::where('conversation_name', $sorted_conversation_name)->first();
 
         if ($checkConversations) {
             $getMessage = Messages::where('conversation_id', $checkConversations->conversation_id)->where('created_at', ">", $lastMessageTimestamp)->get();
 
             if ($getMessage) {
                 return response()->json(['data' => $getMessage]);
             } else {
                 return response()->json(['data' => 'Theres no record']);        
             }
         }      
    }
}