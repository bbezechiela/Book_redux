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
    
        if($getter) {
            return response()->json(['data' => $getter]);
        } else {
            return response()->json(['data' => 'No conversation']);
        }
    }

    // send message from conversation approach
    function sendMessageTwo(Request $request) {
        $current_username = $request->json('');
        $sender_id = $request->json('sender_id');
        $message_content = $request->json('message_content');
        $conversation_name = $request->json('conversation_name');
        $conversation_id = $request->json('conversation_id');

        // ig explode para mag bulag hira hin container it duwa na string
        $arr = explode(',', $conversation_name);
        $receiver_name = ($arr[0] === $current_username) ? strval($arr[1]) : strval($arr[0]);

        // pag kuha receiver id
        $receiverIdQuery = Users::where('username', $receiver_name)->get();

        if ($receiverIdQuery) {
            $receiver_id = $receiverIdQuery->first()->id;
            
            $messageInput = Messages::create([
                'sender_id' => $sender_id,
                'receiver_id' => $receiver_id,
                'message_content' => $message_content,
                'conversation_id' => $conversation_id
            ]);

            if ($messageInput) {
                return response()->json(['message' => 'Message sent successfuly']);
            } else {
                return response()->json(['message' => 'Message was not sent successfuly']);
            }

        } else {
            return response()->json(['message' => 'cant be found']);
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

    // search user function
    function searchUser(Request $request) {
        $username = $request->query('username');

        $getUsername = Users::where('username', "=", $username)->first();

        if ($getUsername) {
            return response()->json(['data' => $getUsername]);
        } else {
            return response()->json(['data' => 'Theres no record']);
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

    // delete conversation function
    function deleteConversation(Request $request) {
        $conversation_id = $request->query('conversation_id');
    
        $deleter = Conversations::find($conversation_id);

        if ($deleter) {
            $deleter->messages()->delete();

            $deleter->delete();

            return response()->json(['message' => 'deleted successfuly']);
        } else {
            return response()->json(['message' => 'cant find anything']);
        }
    }
}
