<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function myList()
    {
        if (session()->has('user')) {
            $data = Books::all();
            return view('users.myList', ['books' => $data, 'status' => 'All']);
            // return redirect('mylist/sale');
        } else {
            return view('landing_page')->with('message', 'You have to login first');
        }
    }

    public function sale()
    {
        if (session()->has('user')) {
            $data = Books::where('status', 'Sale')->get();

            return view('users.myList', ['books' => $data, 'status' => 'Sale']);
        } else {
            return view('landing_page')->with('message', 'You have to login first');
        }
    }

    public function exchange()
    {
        if (session()->has('user')) {
            $data = Books::where('status', 'Exchange')->get();

            return view('users.myList', ['books' => $data, 'status' => 'Exchange']);
        } else {
            return view('landing_page')->with('message', 'You have to login first');
        }
    }

    public function rent()
    {
        if (session()->has('user')) {
            $data = Books::where('status', 'Rent')->get();

            return view('users.myList', ['books' => $data, 'status' => 'Rent']);
        } else {
            return view('landing_page')->with('message', 'You have to login first');
        }
    }

    public function saleList(Request $request)
    {
        $validated = $request->validate([
            'post_user' => ['required', 'min:4'],
            'book_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'title' => ['required', 'min:4'],
            'author' => ['required', 'min:4'],
            'edition' => ['required', 'min:4'],
            'genre' => ['required', 'min:2'],
            'condition' => 'required',
            'description' => ['required', 'min:4'],
            'language' => 'required',
            'weight' => 'required',
            'width' => 'required',
            'height' => 'required',
            'length' => 'required',
            'courier' => 'required',
            'price' => 'required'
        ]);

        $fileNameWithExt = $request->file('book_photo')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('book_photo')->getClientOriginalExtension();
        $fileNameToStore = $fileName . '_' . time() . $extension;
        $request->file('book_photo')->move(public_path('images/books'), $fileNameToStore);
        $validated['book_photo'] = $fileNameToStore;

        // dd($validated);
        $salePost = Books::create([
            'post_user' => $validated['post_user'],
            'status' => 'Sale',
            'book_photo' => $validated['book_photo'],
            'title' => $validated['title'],
            'author' => $validated['author'],
            'edition' => $validated['edition'],
            'genre' => $validated['genre'],
            'condition' => $validated['condition'],
            'description' => $validated['description'],
            'language' => $validated['language'],
            'price' => $validated['price'],
            'weight' => $validated['weight'],
            'width' => $validated['width'],
            'height' => $validated['height'],
            'length' => $validated['length'],
            'courier' => $validated['courier']
        ]);

        if ($salePost) {
            return redirect()->route('mylist');
        } else {
            return "error bitch";
        }
    }

    public function exchangeList(Request $request)
    {
        $validated = $request->validate([
            'post_user' => ['required', 'min:4'],
            'book_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'title' => ['required', 'min:4'],
            'author' => ['required', 'min:4'],
            'edition' => ['required', 'min:4'],
            'genre' => ['required', 'min:2'],
            'condition' => ['required', 'min:4'],
            'description' => ['required', 'min:4'],
            'language' => 'required',
            'weight' => 'required',
            'width' => 'required',
            'height' => 'required',
            'length' => 'required',
            'courier' => 'required',
            'exchange_preferences' => ['required', 'min:4']
        ]);

        $fileNameWithExt = $request->file('book_photo')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('book_photo')->getClientOriginalExtension();
        $fileNameToStore = $fileName . '_' . time() . $extension;
        $request->file('book_photo')->move(public_path('images/books'), $fileNameToStore);
        $validated['book_photo'] = $fileNameToStore;

        // dd($validated);
        $exchangePost = Books::create([
            'post_user' => $validated['post_user'],
            'status' => 'Exchange',
            'book_photo' => $validated['book_photo'],
            'title' => $validated['title'],
            'author' => $validated['author'],
            'edition' => $validated['edition'],
            'genre' => $validated['genre'],
            'condition' => $validated['condition'],
            'description' => $validated['description'],
            'language' => $validated['language'],
            'exchange_preferences' => $validated['exchange_preferences'],
            'weight' => $validated['weight'],
            'width' => $validated['width'],
            'height' => $validated['height'],
            'length' => $validated['length'],
            'courier' => $validated['courier']
        ]);

        if ($exchangePost) {
            return redirect()->route('mylist');
        } else {
            return "error bitch";
        }
    }

    public function rentList(Request $request)
    {
        $validated = $request->validate([
            'post_user' => ['required', 'min:4'],
            'book_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'title' => ['required', 'min:4'],
            'author' => ['required', 'min:4'],
            'edition' => ['required', 'min:4'],
            'genre' => ['required', 'min:2'],
            'condition' => ['required', 'min:4'],
            'description' => ['required', 'min:4'],
            'language' => 'required',
            'weight' => 'required',
            'width' => 'required',
            'height' => 'required',
            'length' => 'required',
            'courier' => 'required',
            'price' => 'required',
            'rental_duration' => 'required',
            'rental_terms_and_condition' => 'required',
            'security_deposit' => 'required'
        ]);

        $fileNameWithExt = $request->file('book_photo')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('book_photo')->getClientOriginalExtension();
        $fileNameToStore = $fileName . '_' . time() . $extension;
        $request->file('book_photo')->move(public_path('images/books'), $fileNameToStore);
        $validated['book_photo'] = $fileNameToStore;

        // dd($validated);
        $rentPost = Books::create([
            'post_user' => $validated['post_user'],
            'status' => 'Rent',
            'book_photo' => $validated['book_photo'],
            'title' => $validated['title'],
            'author' => $validated['author'],
            'edition' => $validated['edition'],
            'genre' => $validated['genre'],
            'condition' => $validated['condition'],
            'description' => $validated['description'],
            'language' => $validated['language'],
            'rental_duration' => $validated['rental_duration'],
            'rental_terms_and_condition' => $validated['rental_terms_and_condition'],
            'security_deposit' => $validated['security_deposit'],
            'price' => $validated['price'],
            'weight' => $validated['weight'],
            'width' => $validated['width'],
            'height' => $validated['height'],
            'length' => $validated['length'],
            'courier' => $validated['courier']
        ]);

        if ($rentPost) {
            return redirect()->route('mylist');
        } else {
            return "error bitch";
        }
    }

    public function saleUpdate(Request $request, $id)
    {
        if ($request->hasFile('book_photo')) {
            $validated = $request->validate([
                'post_user' => ['required', 'min:4'],
                'book_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
                'title' => ['required', 'min:4'],
                'author' => ['required', 'min:4'],
                'edition' => ['required', 'min:4'],
                'genre' => ['required', 'min:2'],
                'condition' => 'required',
                'description' => ['required', 'min:4'],
                'language' => 'required',
                'weight' => 'required',
                'width' => 'required',
                'height' => 'required',
                'length' => 'required',
                'courier' => 'required',
                'price' => 'required'
            ]);

            $fileNameWithExt = $request->file('book_photo')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('book_photo')->getClientOriginalExtension();
            $fileNameToStore = $fileName . '_' . time() . $extension;
            $request->file('book_photo')->move(public_path('images/books'), $fileNameToStore);
            $validated['book_photo'] = $fileNameToStore;

            $post = Books::find($id);
            $post->update([
                'post_user' => $validated['post_user'],
                'status' => 'Sale',
                'book_photo' => $validated['book_photo'],
                'title' => $validated['title'],
                'author' => $validated['author'],
                'edition' => $validated['edition'],
                'genre' => $validated['genre'],
                'condition' => $validated['condition'],
                'description' => $validated['description'],
                'language' => $validated['language'],
                'price' => $validated['price'],
                'weight' => $validated['weight'],
                'width' => $validated['width'],
                'height' => $validated['height'],
                'length' => $validated['length'],
                'courier' => $validated['courier']
            ]);
            
            if ($post) {
                return redirect()->route('mylist');
            } else {
                return "error bitch";
            }            
        } else {
            $validated = $request->validate([
                'post_user' => ['required', 'min:4'],
                'title' => ['required', 'min:4'],
                'author' => ['required', 'min:4'],
                'edition' => ['required', 'min:4'],
                'genre' => ['required', 'min:2'],
                'condition' => 'required',
                'description' => ['required', 'min:4'],
                'language' => 'required',
                'weight' => 'required',
                'width' => 'required',
                'height' => 'required',
                'length' => 'required',
                'courier' => 'required',
                'price' => 'required'
            ]);

            $post = Books::find($id);
            $post->update([
                'post_user' => $validated['post_user'],
                'status' => 'Sale',                
                'title' => $validated['title'],
                'author' => $validated['author'],
                'edition' => $validated['edition'],
                'genre' => $validated['genre'],
                'condition' => $validated['condition'],
                'description' => $validated['description'],
                'language' => $validated['language'],
                'price' => $validated['price'],
                'weight' => $validated['weight'],
                'width' => $validated['width'],
                'height' => $validated['height'],
                'length' => $validated['length'],
                'courier' => $validated['courier']
            ]);

            if ($post) {
                return redirect()->route('mylist');
            } else {
                return "error bitch";
            }
        }
    }

    public function exchangeUpdate(Request $request, $id) {
        if ($request->hasFile('book_photo')) {
            $validated = $request->validate([
                'post_user' => ['required', 'min:4'],
                'book_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
                'title' => ['required', 'min:4'],
                'author' => ['required', 'min:4'],
                'edition' => ['required', 'min:4'],
                'genre' => ['required', 'min:2'],
                'condition' => ['required', 'min:4'],
                'description' => ['required', 'min:4'],
                'language' => 'required',
                'weight' => 'required',
                'width' => 'required',
                'height' => 'required',
                'length' => 'required',
                'courier' => 'required',
                'exchange_preferences' => ['required', 'min:4']
            ]);

            $fileNameWithExt = $request->file('book_photo')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('book_photo')->getClientOriginalExtension();
            $fileNameToStore = $fileName . '_' . time() . $extension;
            $request->file('book_photo')->move(public_path('images/books'), $fileNameToStore);
            $validated['book_photo'] = $fileNameToStore;

            $post = Books::find($id);
            $post->update([
                'post_user' => $validated['post_user'],
                'status' => 'Sale',
                'book_photo' => $validated['book_photo'],
                'title' => $validated['title'],
                'author' => $validated['author'],
                'edition' => $validated['edition'],
                'genre' => $validated['genre'],
                'condition' => $validated['condition'],
                'description' => $validated['description'],
                'language' => $validated['language'],
                'price' => $validated['price'],
                'weight' => $validated['weight'],
                'width' => $validated['width'],
                'height' => $validated['height'],
                'length' => $validated['length'],
                'courier' => $validated['courier']
            ]);

            if ($post) {
                return redirect()->route('mylist');
            } else {
                return "error bitch";
            }
            
        } else {
            $validated = $request->validate([
                'post_user' => ['required', 'min:4'],
                // 'book_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
                'title' => ['required', 'min:4'],
                'author' => ['required', 'min:4'],
                'edition' => ['required', 'min:4'],
                'genre' => ['required', 'min:2'],
                'condition' => ['required', 'min:4'],
                'description' => ['required', 'min:4'],
                'language' => 'required',
                'weight' => 'required',
                'width' => 'required',
                'height' => 'required',
                'length' => 'required',
                'courier' => 'required',
                'exchange_preferences' => ['required', 'min:4']
            ]);

            $post = Books::find($id);
            $post->update([
                'post_user' => $validated['post_user'],
                'status' => 'Sale',
                'book_photo' => $validated['book_photo'],
                'title' => $validated['title'],
                'author' => $validated['author'],
                'edition' => $validated['edition'],
                'genre' => $validated['genre'],
                'condition' => $validated['condition'],
                'description' => $validated['description'],
                'language' => $validated['language'],
                'price' => $validated['price'],
                'weight' => $validated['weight'],
                'width' => $validated['width'],
                'height' => $validated['height'],
                'length' => $validated['length'],
                'courier' => $validated['courier']
            ]);

            if ($post) {
                return redirect()->route('mylist');
            } else {
                return "error bitch";
            }
        }
        
    }
}
