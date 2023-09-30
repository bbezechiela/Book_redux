<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function saleList(Request $request) {
        $validated = $request->validate([
            'post_user' => 'required',
            'status' => 'required',
            'book_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'title' => 'required',
            'author' => 'required',
            'edition' => 'required',
            'genre' => 'required',
            'condition' => 'required',
            'description' => 'required',
            'language' => 'required',
            'weight' => 'required',
            'width' => 'required',
            'height' => 'required',
            'length' => 'required',
            'courier' => 'required',
            'price' => 'required'
        ]);

        $validated['status'] = "Sale";

        $fileNameWithExt = $request->file('book_photo')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('book_photo')->getClientOriginalExtension();
        $fileNameToStore = $fileName . '_' . time() . $extension;
        $request->file('book_photo')->move(public_path('images/books'), $fileNameToStore);
        $validated['book_photo'] = $fileNameToStore;

        dd($validated);
        // $salePost = Books::create([
        //     'post_user' => $validated['post_user'],
        //     'status' => $validated['status'],
        //     'book_photo' => $validated['book_photo'],
        //     'title' => $validated['title'],
        //     'author' => $validated['author'],
        //     'edition' => $validated['edition'],
        //     'genre' => $validated['genre'],
        //     'condition' => $validated['condition'],
        //     'description' => $validated['description'],
        //     'language' => $validated['language'],
        //     'price' => $validated['price'],
        //     'weight' => $validated['weight'],
        //     'width' => $validated['width'],
        //     'height' => $validated['height'],
        //     'length' => $validated['length'],
        //     'courier' => $validated['courier']            
        // ]);

        // if ($salePost) {
        //     return view('users.myList');
        // } else {
        //     return "error bitch";
        // }
    }
}
