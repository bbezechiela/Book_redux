<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Cart;
use App\Models\Users;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function myList()
    {
        if (session()->has('uid')) {
            $data = Books::where('user_id', session('id'))->with('item')->orderBy('created_at', 'desc')->get();
            return view('users.myList', ['books' => $data, 'status' => 'All']);
        } else {
            return view('landing_page')->with('message', 'You have to login first');
        }
    }

    public function sale()
    {
        if (session()->has('uid')) {
            $data = Books::where([
                'user_id' => session('id'),
                'status' => 'Sale'
            ])->orderBy('created_at', 'desc')->get();

            return view('users.myList', ['books' => $data, 'status' => 'Sale']);
        } else {
            return view('landing_page')->with('message', 'You have to login first');
        }
    }

    public function exchange()
    {
        if (session()->has('uid')) {
            $data = Books::where([
                'user_id' => session('id'),
                'status' => 'Exchange'
            ])->orderBy('created_at', 'desc')->get();

            return view('users.myList', ['books' => $data, 'status' => 'Exchange']);
        } else {
            return view('landing_page')->with('message', 'You have to login first');
        }
    }

    public function rent()
    {
        if (session()->has('uid')) {
            $data = Books::where([
                'user_id' => session('id'),
                'status' => 'Rent'
            ])->orderBy('created_at', 'desc')->get();

            return view('users.myList', ['books' => $data, 'status' => 'Rent']);
        } else {
            return view('landing_page')->with('message', 'You have to login first');
        }
    }

    public function saleList(Request $request)
    {
        // dd($request->all());
        $fileNameWithExt = $request->file('pdf_file')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('pdf_file')->getClientOriginalExtension();
        $fileNameToStore = $fileName . '_' . time() . $extension;
        $request->file('pdf_file')->move(public_path('files/books'), $fileNameToStore);

        $coverWithExt = $request->file('front_cover')->getClientOriginalName();
        $coverName = pathinfo($coverWithExt, PATHINFO_FILENAME);
        $coverExtension = $request->file('front_cover')->getClientOriginalExtension();
        $coverNameToStore = $coverName . '_' . time() . $coverExtension;
        $request->file('front_cover')->move(public_path('images/book_cover'), $coverNameToStore);


        $id = $request->input('user_id');
        $genre = $request->input('genre');
        $isbn = $request->input('isbn');
        $edition = $request->input('edition');
        $title = $request->input('title');
        $author = $request->input('author');
        $description = $request->input('description');
        $interior = $request->input('interior_photo');


        try {
            $post = Books::create([
                'user_id' => $id,
                'status' => 'Online Reading',
                'genre' => $genre,
                'isbn' => $isbn,
                'edition' => $edition,
                'title' => $title,
                'author' => $author,
                'description' => $description,
                'book_filename' => $fileNameToStore,
                'back_cover' => $coverNameToStore,
                'interior_photo' => $interior
            ]);

            if ($post) {
                return redirect('mylist');
            }
        } catch (\Throwable $th) {
            throw $th;
        }



        // $fileNameWithExt = $request->file('book_photo')->getClientOriginalName();
        // $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        // $extension = $request->file('book_photo')->getClientOriginalExtension();
        // $fileNameToStore = $fileName . '_' . time() . $extension;
        // $request->file('book_photo')->move(public_path('images/books'), $fileNameToStore);
        // $validated['book_photo'] = $fileNameToStore;


        // $coverName = pathinfo($coverWithExt, PATHINFO_FILENAME);
        // $coverExtension = $request->file('back_cover')->getClientOriginalExtension();
        // $coverNameToStore = $coverName . '_' . time() . $coverExtension;
        // $request->file('back_cover')->move(public_path('images/book_cover'), $coverNameToStore);
        // $validated['back_cover'] = $coverNameToStore;

        // $interiorWithExt = $request->file('interior_photo')->getClientOriginalName();
        // $interiorName = pathinfo($interiorWithExt, PATHINFO_FILENAME);
        // $interiorExtension = $request->file('interior_photo')->getClientOriginalExtension();
        // $interiorNameToStore = $interiorName . '_' . time() . $interiorExtension;
        // $request->file('interior_photo')->move(public_path('images/interior_photo'), $interiorNameToStore);
        // $validated['interior_photo'] = $interiorNameToStore;

        // // dd($validated);
        // $salePost = Books::create([
        //     'user_id' => $validated['user_id'],
        //     'status' => 'Sale',
        //     'unit' => 'Available',
        //     'book_photo' => $validated['book_photo'],
        //     'back_cover' => $validated["back_cover"],
        //     'interior_photo' => $validated["interior_photo"],
        //     'title' => $validated['title'],
        //     'author' => $validated['author'],
        //     'edition' => $validated['edition'],
        //     'genre' => $validated['genre'],
        //     'stock' => $validated["stock"],
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
        //     return redirect()->route('mylist')->with('createMessage', 'Listing created successfully! Your information has been recorded and is now live for viewing.');
        // } else {
        //     return redirect()->route('mylist')->with('createMessage', 'Error: Cannot list item');
        // }
    }

    public function exchangeList(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required',
            'book_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'back_cover' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'interior_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'title' => ['required', 'min:4'],
            'author' => ['required', 'min:4'],
            'edition' => ['required', 'min:4'],
            'genre' => ['required', 'min:2'],
            'stock' => 'required',
            'condition' => ['required', 'min:2'],
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

        $coverWithExt = $request->file('back_cover')->getClientOriginalName();
        $coverName = pathinfo($coverWithExt, PATHINFO_FILENAME);
        $coverExtension = $request->file('back_cover')->getClientOriginalExtension();
        $coverNameToStore = $coverName . '_' . time() . $coverExtension;
        $request->file('back_cover')->move(public_path('images/book_cover'), $coverNameToStore);
        $validated['back_cover'] = $coverNameToStore;

        $interiorWithExt = $request->file('interior_photo')->getClientOriginalName();
        $interiorName = pathinfo($interiorWithExt, PATHINFO_FILENAME);
        $interiorExtension = $request->file('interior_photo')->getClientOriginalExtension();
        $interiorNameToStore = $interiorName . '_' . time() . $interiorExtension;
        $request->file('interior_photo')->move(public_path('images/interior_photo'), $interiorNameToStore);
        $validated['interior_photo'] = $interiorNameToStore;

        // dd($validated);
        $exchangePost = Books::create([
            'user_id' => $validated['user_id'],
            'status' => 'Exchange',
            'unit' => 'Available',
            'book_photo' => $validated['book_photo'],
            'back_cover' => $validated["back_cover"],
            'interior_photo' => $validated["interior_photo"],
            'title' => $validated['title'],
            'author' => $validated['author'],
            'edition' => $validated['edition'],
            'genre' => $validated['genre'],
            'stock' => $validated["stock"],
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
            return redirect()->route('mylist')->with('createMessage', 'Listing created successfully! Your information has been recorded and is now live for viewing.');
        } else {
            return redirect()->route('mylist')->with('createMessage', 'Error: Cannot list item');
        }
    }

    public function rentList(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required',
            'book_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'back_cover' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'interior_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'title' => ['required', 'min:4'],
            'author' => ['required', 'min:4'],
            'edition' => ['required', 'min:4'],
            'genre' => ['required', 'min:2'],
            'condition' => 'required',
            'stock' => 'required',
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

        $coverWithExt = $request->file('back_cover')->getClientOriginalName();
        $coverName = pathinfo($coverWithExt, PATHINFO_FILENAME);
        $coverExtension = $request->file('back_cover')->getClientOriginalExtension();
        $coverNameToStore = $coverName . '_' . time() . $coverExtension;
        $request->file('back_cover')->move(public_path('images/book_cover'), $coverNameToStore);
        $validated['back_cover'] = $coverNameToStore;

        $interiorWithExt = $request->file('interior_photo')->getClientOriginalName();
        $interiorName = pathinfo($interiorWithExt, PATHINFO_FILENAME);
        $interiorExtension = $request->file('interior_photo')->getClientOriginalExtension();
        $interiorNameToStore = $interiorName . '_' . time() . $interiorExtension;
        $request->file('interior_photo')->move(public_path('images/interior_photo'), $interiorNameToStore);
        $validated['interior_photo'] = $interiorNameToStore;

        // dd($validated);
        $rentPost = Books::create([
            'user_id' => $validated['user_id'],
            'status' => 'Rent',
            'unit' => 'Available',
            'book_photo' => $validated['book_photo'],
            'back_cover' => $validated["back_cover"],
            'interior_photo' => $validated["interior_photo"],
            'title' => $validated['title'],
            'author' => $validated['author'],
            'edition' => $validated['edition'],
            'genre' => $validated['genre'],
            'stock' => $validated["stock"],
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
            return redirect('/listings')->with('createMessage', 'Listing created successfully! Your information has been recorded and is now live for viewing.');
        } else {
            return redirect('/listings')->with('createMessage', 'Error: Cannot list item');
        }
    }

    public function saleUpdate(Request $request, $id)
    {
        if ($request->hasFile('book_photo')) {
            $validated = $request->validate([
                // 'id' => 'required',
                'user_id' => 'required',
                'book_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
                'back_cover' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
                'interior_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
                'title' => ['required', 'min:4'],
                'author' => ['required', 'min:4'],
                'edition' => ['required', 'min:4'],
                'genre' => ['required', 'min:2'],
                'stock' => 'required',
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

            $coverWithExt = $request->file('back_cover')->getClientOriginalName();
            $coverName = pathinfo($coverWithExt, PATHINFO_FILENAME);
            $coverExtension = $request->file('back_cover')->getClientOriginalExtension();
            $coverNameToStore = $coverName . '_' . time() . $coverExtension;
            $request->file('back_cover')->move(public_path('images/book_cover'), $coverNameToStore);
            $validated['back_cover'] = $coverNameToStore;

            $interiorWithExt = $request->file('interior_photo')->getClientOriginalName();
            $interiorName = pathinfo($interiorWithExt, PATHINFO_FILENAME);
            $interiorExtension = $request->file('interior_photo')->getClientOriginalExtension();
            $interiorNameToStore = $interiorName . '_' . time() . $interiorExtension;
            $request->file('interior_photo')->move(public_path('images/interior_photo'), $interiorNameToStore);
            $validated['interior_photo'] = $interiorNameToStore;

            $post = Books::find($id);
            $post->update([
                // 'id' => $validated['id'],
                'user_id' => $validated['user_id'],
                'status' => 'Sale',
                'book_photo' => $validated['book_photo'],
                'back_cover' => $validated["back_cover"],
                'interior_photo' => $validated["interior_photo"],
                'title' => $validated['title'],
                'author' => $validated['author'],
                'edition' => $validated['edition'],
                'genre' => $validated['genre'],
                'stock' => $validated["stock"],
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
                return redirect()->route('mylist')->with('updateMessage', 'Update Confirmed: Your listing has been successfully updated.');
            } else {
                return redirect()->route('mylist')->with('updateMessage', 'Error: Cannot update item');
            }
        } else {
            $validated = $request->validate([
                // 'id' => 'required',
                'user_id' => 'required',
                'title' => ['required', 'min:4'],
                'author' => ['required', 'min:4'],
                'edition' => ['required', 'min:4'],
                'genre' => ['required', 'min:2'],
                'stock' => 'required',
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
                // 'id' => $validated['id'],
                'user_id' => $validated['user_id'],
                'status' => 'Sale',
                'title' => $validated['title'],
                'author' => $validated['author'],
                'edition' => $validated['edition'],
                'genre' => $validated['genre'],
                'stock' => $validated["stock"],
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
                return redirect()->route('mylist')->with('updateMessage', 'Update Confirmed: Your listing has been successfully updated.');
            } else {
                return redirect()->route('mylist')->with('updateMessage', 'Error: Cannot update item');
            }
        }
    }

    public function exchangeUpdate(Request $request, $id)
    {
        if ($request->hasFile('book_photo')) {
            $validated = $request->validate([
                // 'id' => 'required',
                'user_id' => 'required',
                'book_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
                'title' => ['required', 'min:4'],
                'author' => ['required', 'min:4'],
                'edition' => ['required', 'min:4'],
                'genre' => ['required', 'min:2'],
                'stock' => 'required',
                'condition' => ['required', 'min:2'],
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
                // 'id' => $validated['id'],
                'user_id' => $validated['user_id'],
                'status' => 'Exchange',
                'book_photo' => $validated['book_photo'],
                'title' => $validated['title'],
                'author' => $validated['author'],
                'edition' => $validated['edition'],
                'genre' => $validated['genre'],
                'stock' => $validated["stock"],
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

            if ($post) {
                return redirect()->route('mylist')->with('updateMessage', 'Update Confirmed: Your listing has been successfully updated.');
            } else {
                return redirect()->route('mylist')->with('updateMessage', 'Error: Cannot update item');
            }
        } else {
            $validated = $request->validate([
                // 'id' => 'required',
                'user_id' => 'required',
                // 'book_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
                'title' => ['required', 'min:4'],
                'author' => ['required', 'min:4'],
                'edition' => ['required', 'min:4'],
                'genre' => ['required', 'min:2'],
                'stock' => 'required',
                'condition' => ['required', 'min:2'],
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
                // 'id' => $validated['id'],
                'user_id' => $validated['user_id'],
                'status' => 'Exchange',
                // 'book_photo' => $validated['book_photo'],
                'title' => $validated['title'],
                'author' => $validated['author'],
                'edition' => $validated['edition'],
                'genre' => $validated['genre'],
                'stock' => $validated["stock"],
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

            if ($post) {
                return redirect()->route('mylist')->with('updateMessage', 'Update Confirmed: Your listing has been successfully updated.');
            } else {
                return redirect()->route('mylist')->with('updateMessage', 'Error: Cannot update item');
            }
        }
    }

    public function rentUpdate(Request $request, $id)
    {
        if ($request->hasFile('book_photo')) {
            $validated = $request->validate([
                'user_id' => 'required',
                'book_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
                'title' => ['required', 'min:4'],
                'author' => ['required', 'min:4'],
                'edition' => ['required', 'min:4'],
                'genre' => ['required', 'min:2'],
                'stock' => 'required',
                'condition' => ['required', 'min:2'],
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

            $post = Books::find($id);
            $post->update([
                'user_id' => $validated['user_id'],
                'status' => 'Rent',
                'book_photo' => $validated['book_photo'],
                'title' => $validated['title'],
                'author' => $validated['author'],
                'edition' => $validated['edition'],
                'genre' => $validated['genre'],
                'stock' => $validated["stock"],
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

            if ($post) {
                return redirect('/listings')->with('updateMessage', 'Update Confirmed: Your listing has been successfully updated.');
            } else {
                return redirect('/listings')->with('updateMessage', 'Error: Cannot update item');
            }
        } else {
            $validated = $request->validate([
                'user_id' => 'required',
                // 'book_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
                'title' => ['required', 'min:4'],
                'author' => ['required', 'min:4'],
                'edition' => ['required', 'min:4'],
                'genre' => ['required', 'min:2'],
                'stock' => 'required',
                'condition' => ['required', 'min:2'],
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

            $post = Books::find($id);
            $post->update([
                'user_id' => $validated['user_id'],
                'status' => 'Rent',
                // 'book_photo' => $validated['book_photo'],
                'title' => $validated['title'],
                'author' => $validated['author'],
                'edition' => $validated['edition'],
                'genre' => $validated['genre'],
                'stock' => $validated["stock"],
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

            if ($post) {
                return redirect('/listings')->with('updateMessage', 'Update Confirmed: Your listing has been successfully updated.');
            } else {
                return redirect('/listings')->with('updateMessage', 'Error: Cannot update item');
            }
        }
    }

    public function destroy($id)
    {
        $post = Books::find($id);
        // $cart = Cart::where('product_id', $id)->delete();
        $post->delete();

        if ($post) {
            return redirect()->route('mylist')->with('deleteMessage', 'Listing deleted successfully. Your request has been processed, and the specified listing has been removed.');
        } else {
            return redirect()->route('mylist')->with('deleteMessage', 'Cannot delete listing');
        }
    }

    public function addToCart($id)
    {

        $book = Books::find($id);
        $book->update([
            'unit' => 'Added to Cart'
        ]);

        $cart = Cart::create([
            'user_id' => session('id'),
            'product_id' => $id,
            'status' => 'Pending'
        ]);

        if ($cart) {
            return redirect('/explore')->with('message', 'Item added to cart');
        }
    }

    public function destroyCart($id)
    {
        $item = Cart::find($id);
        $book = Books::find($item->product_id);

        $item->delete();
        $book->update([
            'unit' => 'Available'
        ]);

        if ($item) {
            return redirect('/cart')->with('message', 'Item successfully removed from your cart.');
        } else {
            return 'error bitch';
        }
    }





    // Book Seller
    public function listings()
    {
        $data = Books::where('user_id', session('id'))->with('item')->orderBy('created_at', 'desc')->get();
        return view('bookseller.listings', ['books' => $data, 'status' => 'All']);
    }

    public function destroySeller($id)
    {
        $post = Books::find($id);
        $cart = Cart::where('product_id', $id)->delete();
        $post->delete();

        if ($post) {
            return redirect('/listings')->with('deleteMessage', 'Listing deleted successfully. Your request has been processed, and the specified listing has been removed.');
        } else {
            return redirect('/listings')->with('deleteMessage', 'Cannot delete listing');
        }
    }

    public function sellerSale(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required',
            'book_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'back_cover' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'interior_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'title' => ['required', 'min:4'],
            'author' => ['required', 'min:4'],
            'edition' => ['required', 'min:4'],
            'genre' => ['required', 'min:2'],
            'stock' => 'required',
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

        $coverWithExt = $request->file('back_cover')->getClientOriginalName();
        $coverName = pathinfo($coverWithExt, PATHINFO_FILENAME);
        $coverExtension = $request->file('back_cover')->getClientOriginalExtension();
        $coverNameToStore = $coverName . '_' . time() . $coverExtension;
        $request->file('back_cover')->move(public_path('images/book_cover'), $coverNameToStore);
        $validated['back_cover'] = $coverNameToStore;

        $interiorWithExt = $request->file('interior_photo')->getClientOriginalName();
        $interiorName = pathinfo($interiorWithExt, PATHINFO_FILENAME);
        $interiorExtension = $request->file('interior_photo')->getClientOriginalExtension();
        $interiorNameToStore = $interiorName . '_' . time() . $interiorExtension;
        $request->file('interior_photo')->move(public_path('images/interior_photo'), $interiorNameToStore);
        $validated['interior_photo'] = $interiorNameToStore;

        // dd($validated);
        $salePost = Books::create([
            'user_id' => $validated['user_id'],
            'status' => 'Sale',
            'unit' => 'Available',
            'book_photo' => $validated['book_photo'],
            'back_cover' => $validated["back_cover"],
            'interior_photo' => $validated["interior_photo"],
            'title' => $validated['title'],
            'author' => $validated['author'],
            'edition' => $validated['edition'],
            'genre' => $validated['genre'],
            'stock' => $validated["stock"],
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
            return redirect('/listings')->with('createMessage', 'Listing created successfully! Your information has been recorded and is now live for viewing.');
        } else {
            return redirect('/listings')->with('createMessage', 'Error: Cannot list item');
        }
    }

    // public function sellerRent() {

    // }

    public function sellerUpdateSale(Request $request, $id)
    {
        if ($request->hasFile('book_photo')) {
            $validated = $request->validate([
                // 'id' => 'required',
                'user_id' => 'required',
                'book_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
                'back_cover' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
                'interior_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
                'title' => ['required', 'min:4'],
                'author' => ['required', 'min:4'],
                'edition' => ['required', 'min:4'],
                'genre' => ['required', 'min:2'],
                'stock' => 'required',
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

            $coverWithExt = $request->file('back_cover')->getClientOriginalName();
            $coverName = pathinfo($coverWithExt, PATHINFO_FILENAME);
            $coverExtension = $request->file('back_cover')->getClientOriginalExtension();
            $coverNameToStore = $coverName . '_' . time() . $coverExtension;
            $request->file('back_cover')->move(public_path('images/book_cover'), $coverNameToStore);
            $validated['back_cover'] = $coverNameToStore;

            $interiorWithExt = $request->file('interior_photo')->getClientOriginalName();
            $interiorName = pathinfo($interiorWithExt, PATHINFO_FILENAME);
            $interiorExtension = $request->file('interior_photo')->getClientOriginalExtension();
            $interiorNameToStore = $interiorName . '_' . time() . $interiorExtension;
            $request->file('interior_photo')->move(public_path('images/interior_photo'), $interiorNameToStore);
            $validated['interior_photo'] = $interiorNameToStore;

            $post = Books::find($id);
            $post->update([
                // 'id' => $validated['id'],
                'user_id' => $validated['user_id'],
                'status' => 'Sale',
                'book_photo' => $validated['book_photo'],
                'back_cover' => $validated["back_cover"],
                'interior_photo' => $validated["interior_photo"],
                'title' => $validated['title'],
                'author' => $validated['author'],
                'edition' => $validated['edition'],
                'genre' => $validated['genre'],
                'stock' => $validated["stock"],
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
                return redirect('/listings')->with(['updateMessage' => 'Update Confirmed: Your listing has been successfully updated.']);
            } else {
                return redirect('/listings')->with(['updateMessage' => 'Error: Cannot update item']);
            }
        } else {
            $validated = $request->validate([
                // 'id' => 'required',
                'user_id' => 'required',
                'title' => ['required', 'min:4'],
                'author' => ['required', 'min:4'],
                'edition' => ['required', 'min:4'],
                'genre' => ['required', 'min:2'],
                'stock' => 'required',
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
                // 'id' => $validated['id'],
                'user_id' => $validated['user_id'],
                'status' => 'Sale',
                'title' => $validated['title'],
                'author' => $validated['author'],
                'edition' => $validated['edition'],
                'genre' => $validated['genre'],
                'stock' => $validated["stock"],
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

            // dd($post);

            if ($post) {
                return redirect('/listings')->with(['updateMessage' => 'Update Confirmed: Your listing has been successfully updated.']);
            } else {
                return redirect('/listings')->with(['updateMessage' => 'Error: Cannot update item']);
            }
        }
    }




    // API's

    public function getBookID($id)
    {
        $book = Books::find($id);
        return $book;
    }
}
