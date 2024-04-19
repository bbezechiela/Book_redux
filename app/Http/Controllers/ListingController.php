<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Cart;
use App\Models\Exchange_Requests;
use App\Models\Users;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class ListingController extends Controller
{
    public function myList()
    {
        if (session()->has('uid')) {
            $data = Books::where('user_id', session('id'))->with('request')->orderBy('created_at', 'desc')->get();
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
            ]);

            if ($post) {
                return redirect('mylist');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function digitalPost(Request $request)
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

        $user_id = $request->input('user_id');
        $genre = $request->input('genre');
        $isbn = $request->input('isbn');
        $edition = $request->input('edition');
        $title = $request->input('title');
        $author = $request->input('author');
        $description = $request->input('description');
        $exchange_pref = $request->input('exchange_preferences');

        try {

            $post = Books::create([
                'user_id' => $user_id,
                'status' => 'Digital Exchange',
                'genre' => $genre,
                'isbn' => $isbn,
                'edition' => $edition,
                'title' => $title,
                'author' => $author,
                'description' => $description,
                'exchange_preferences' => $exchange_pref,
                'book_filename' => $fileNameToStore,
                'back_cover' => $coverNameToStore,
            ]);

            if ($post) {
                return redirect('mylist');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function exchangeRequest(Request $request)
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

        $user_id = $request->input('user_id');
        $book_id = $request->input('book_id');
        $title = $request->input('title');
        $isbn = $request->input('isbn');
        $author = $request->input('author');
        $genre = $request->input('genre');
        $edition = $request->input('edition');
        $description = $request->input('description');

        $send = Exchange_Requests::create([
            'user_id' => $user_id,
            'target_book_id' => $book_id,
            'status' => 'Request',
            'book_filename' => $fileNameToStore,
            'back_cover' => $coverNameToStore,
            'isbn' => $isbn,
            'title' => $title,
            'author' => $author,
            'edition' => $edition,
            'genre' => $genre,
            'description' => $description
        ]);

        if ($send) {
            return redirect('/product/' . $book_id);
        }
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
        // dd($request->all());        
        $edit_genre = $request->input('edit-genre');
        $isbn = $request->input('isbn');
        $edition = $request->input('edition');
        $title = $request->input('title');
        $author = $request->input('author');
        $description = $request->input('description');

        if ($request->has('edit_pdf_file') || $request->has('edit_front_cover')) {

            if (!$request->has('edit_pdf_file')) {
                $coverWithExt = $request->file('edit_front_cover')->getClientOriginalName();
                $coverName = pathinfo($coverWithExt, PATHINFO_FILENAME);
                $coverExtension = $request->file('edit_front_cover')->getClientOriginalExtension();
                $coverNameToStore = $coverName . '_' . time() . $coverExtension;
                $request->file('edit_front_cover')->move(public_path('images/book_cover'), $coverNameToStore);

                $book = Books::find($id);

                $book->update([
                    'back_cover' => $coverNameToStore,
                    'genre' => $edit_genre,
                    'isbn' => $isbn,
                    'edition' => $edition,
                    'title' => $title,
                    'author' => $author,
                    'description' => $description
                ]);

                if ($book) {
                    return redirect('mylist');
                }

                echo 'no pdf file';
            } else if (!$request->has('edit_front_cover')) {
                $fileNameWithExt = $request->file('edit_pdf_file')->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('edit_pdf_file')->getClientOriginalExtension();
                $fileNameToStore = $fileName . '_' . time() . $extension;
                $request->file('edit_pdf_file')->move(public_path('files/books'), $fileNameToStore);

                $book = Books::find($id);

                $book->update([
                    'book_filename' => $fileNameToStore,
                    'genre' => $edit_genre,
                    'isbn' => $isbn,
                    'edition' => $edition,
                    'title' => $title,
                    'author' => $author,
                    'description' => $description
                ]);

                if ($book) {
                    return redirect('mylist');
                }

                echo 'no cover';
            } else {
                $fileNameWithExt = $request->file('edit_pdf_file')->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('edit_pdf_file')->getClientOriginalExtension();
                $fileNameToStore = $fileName . '_' . time() . $extension;
                $request->file('edit_pdf_file')->move(public_path('files/books'), $fileNameToStore);

                $coverWithExt = $request->file('edit_front_cover')->getClientOriginalName();
                $coverName = pathinfo($coverWithExt, PATHINFO_FILENAME);
                $coverExtension = $request->file('edit_front_cover')->getClientOriginalExtension();
                $coverNameToStore = $coverName . '_' . time() . $coverExtension;
                $request->file('edit_front_cover')->move(public_path('images/book_cover'), $coverNameToStore);

                $book = Books::find($id);

                $book->update([
                    'book_filename' => $fileNameToStore,
                    'back_cover' => $coverNameToStore,
                    'genre' => $edit_genre,
                    'isbn' => $isbn,
                    'edition' => $edition,
                    'title' => $title,
                    'author' => $author,
                    'description' => $description
                ]);

                if ($book) {
                    return redirect('mylist');
                }

                echo 'have both';
            }
        } else {
            $book = Books::find($id);

            $book->update([
                'genre' => $edit_genre,
                'isbn' => $isbn,
                'edition' => $edition,
                'title' => $title,
                'author' => $author,
                'description' => $description
            ]);

            if ($book) {
                return redirect('mylist');
            }
        }
    }

    public function digitalUpdate(Request $request, $id)
    {
        // dd($request->all());
        $genre = $request->input('genre');
        $isbn = $request->input('isbn');
        $edition = $request->input('edition');
        $title = $request->input('title');
        $author = $request->input('author');
        $exchange_pref = $request->input('exchange_preferences');
        $description = $request->input('description');

        if ($request->has('pdf_file') || $request->has('front_cover')) {
            if (!$request->has('pdf_file')) {
                $coverWithExt = $request->file('front_cover')->getClientOriginalName();
                $coverName = pathinfo($coverWithExt, PATHINFO_FILENAME);
                $coverExtension = $request->file('front_cover')->getClientOriginalExtension();
                $coverNameToStore = $coverName . '_' . time() . $coverExtension;
                $request->file('front_cover')->move(public_path('images/book_cover'), $coverNameToStore);

                $book = Books::find($id);

                $book->update([
                    'back_cover' => $coverNameToStore,
                    'genre' => $genre,
                    'isbn' => $isbn,
                    'edition' => $edition,
                    'title' => $title,
                    'author' => $author,
                    'exchange_preferences' => $exchange_pref,
                    'description' => $description
                ]);

                if ($book) {
                    return redirect('mylist');
                }
            } else if (!$request->has('front_cover')) {
                $fileNameWithExt = $request->file('pdf_file')->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('pdf_file')->getClientOriginalExtension();
                $fileNameToStore = $fileName . '_' . time() . $extension;
                $request->file('pdf_file')->move(public_path('files/books'), $fileNameToStore);

                $book = Books::find($id);

                $book->update([
                    'book_filename' => $fileNameToStore,
                    'genre' => $genre,
                    'isbn' => $isbn,
                    'edition' => $edition,
                    'title' => $title,
                    'author' => $author,
                    'exchange_preferences' => $exchange_pref,
                    'description' => $description
                ]);

                if ($book) {
                    return redirect('mylist');
                }
            } else {
                $coverWithExt = $request->file('front_cover')->getClientOriginalName();
                $coverName = pathinfo($coverWithExt, PATHINFO_FILENAME);
                $coverExtension = $request->file('front_cover')->getClientOriginalExtension();
                $coverNameToStore = $coverName . '_' . time() . $coverExtension;
                $request->file('front_cover')->move(public_path('images/book_cover'), $coverNameToStore);

                $fileNameWithExt = $request->file('pdf_file')->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('pdf_file')->getClientOriginalExtension();
                $fileNameToStore = $fileName . '_' . time() . $extension;
                $request->file('pdf_file')->move(public_path('files/books'), $fileNameToStore);

                $book = Books::find($id);

                $book->update([
                    'back_cover' => $coverNameToStore,
                    'book_filename' => $fileNameToStore,
                    'genre' => $genre,
                    'isbn' => $isbn,
                    'edition' => $edition,
                    'title' => $title,
                    'author' => $author,
                    'exchange_preferences' => $exchange_pref,
                    'description' => $description
                ]);

                if ($book) {
                    return redirect('mylist');
                }
            }
        } else {
            $book = Books::find($id);

            $book->update([
                'genre' => $genre,
                'isbn' => $isbn,
                'edition' => $edition,
                'title' => $title,
                'author' => $author,
                'exchange_preferences' => $exchange_pref,
                'description' => $description
            ]);

            if ($book) {
                return redirect('mylist');
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
        // $cart = Cart::where('product_id', $id)->delete();
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

    public function confirmExchangeRequest(Request $request)
    {
        $id = $request->input('req_id');
        $confirm = $request->input('confirm_col');

        $exchange = Exchange_Requests::find($id);
        $exchange->update([
            'status' => $confirm,
            'allow' => true
        ]);

        if ($exchange) {
            return redirect('/orders');
        }
    }

    public function viewRequest($id) {
        $req = Exchange_Requests::with('book')->find($id);

        return view('users.file', ['request' => $req]);
    }

    public function viewBook($id) {
        $book = Books::find($id);

        return view('users.file', ['request' => $book]);
    }



    // API's

    public function getBookID($id)
    {
        $book = Books::find($id);
        return $book;
    }

    public function getRequestUser($id) {
        $user = Users::find($id);
        return $user;
    }
}
