<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Books;
use App\Models\Cart;
use App\Models\Order_Items;
use App\Models\Orders;
use App\Models\Reviews;
use App\Models\User;
use App\Models\Users;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Metadata\Uses;

use function Laravel\Prompts\alert;

// use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function sidebar()
    {
        return view('components.sidebar');
    }

    public function following()
    {
        return view('users.following');
    }

    public function followers()
    {
        return view('users.followers');
    }

    public function welcome()
    {
        return view('landing_page');
    }

    public function role()
    {
        return view('role');
    }

    public function login(Request $request)
    {
        if ($request->session()->has('user')) {
            return redirect('/explore');
        } else {
            return view('users.login');
        }
    }

    public function signup(Request $request)
    {
        if ($request->session()->has('user')) {
            return redirect('/explore');
        } else {
            return view('users.signup');
        }
    }

    public function sellerMessage()
    {
        return view('bookseller.sellerMessage');
    }

    public function sellerNotification()
    {
        return view('bookseller.sellerNotification');
    }

    public function feedback()
    {
        return view('bookseller.feedback');
    }

    public function listings()
    {
        return view('bookseller.listings');
    }

    public function profile()
    {
        return view('bookseller.profile');
    }

    public function explore()
    {
        if (session()->has('user')) {

            // $users = Users::where();
            $user = Users::find(session('id'));
            $post = Books::with('user.addressUser', 'cart')->get();            
            return view('users.explore', ['post' => $post, 'user' => $user]);
            // return view('users.homepage')->with('post', $post);
            // return view('users.homepage', compact('post'));
        } else {
            return view('landing_page')->with('message', 'You have to login first');
        }
    }

    public function singleProduct($id, $user_id)
    {
        if (session()->has('user')) {
            $book = Books::find($id);
            $user = Users::with('addressUser')->find($user_id);
            return view('users.singleProduct', ['book_id' => $book, 'user_id' => $user]);
        } else {
            return view('landing_page')->with('message', 'You have to login first');
        }
    }

    public function productDetailsPreview()
    {
        return view('admin.productDetailsPreview');
    }

    public function cart()
    {
        // $user = Cart::where('user_id', session('id'))->with('productRelation.user')->get(); // also works        
        // $item = Books::where(['user_id' => session('id'), 'unit' => "Added to Cart"])->with('user')->get();
        $user = Users::with('cart.productRelation.user')->find(session('id'));
        // $cartItems = $user->cart->with('productRelation')->get();
        // dd($user);
        return view('users.cart', ['items' => $user]);
    }

    public function bookClub()
    {
        return view('users.bookClub');
    }

    public function bookSellingClub()
    {
        return view('users.bookSellingClub');
    }

    public function bookExchangeClub()
    {
        return view('users.bookExchangeClub');
    }

    public function bookRentingClub()
    {
        return view('users.bookRentingClub');
    }

    public function eventsSelling()
    {
        return view('users.eventsSelling');
    }

    public function membersSelling()
    {
        return view('users.membersSelling');
    }

    public function eventsExchange()
    {
        return view('users.eventsExchange');
    }

    public function membersExchange()
    {
        return view('users.membersExchange');
    }

    public function eventsRenting()
    {
        return view('users.eventsRenting');
    }

    public function membersRenting()
    {
        return view('users.membersRenting');
    }

    public function checkout(Request $request)
    {
        if ($request->session()->has('user')) {
            $order = $request->input('items');
            $qty = $request->input('qty');
            $checkout = Cart::whereIn('id', $order)->with('productRelation.user.addressUser')->get();            
            $address = Users::with('addressUser')->find(session('id'));

            // foreach ($checkout as $index => $item) {
            //     echo $item->productRelation->title . ' ' . $qty[$index];
            // }
            
            return view('users.checkout', ['items' => $checkout, 'user' => $address, 'qty' => $qty]);
        } else {
            return view('landing_page')->with('message', 'You have to login first');
        }
    }

    public function deliveryAddress(Request $request)
    {
        if ($request->session()->has('user')) {
            $address = Address::where('user_id', session('id'))->get();
            // $address = Address::findOrFail(session('id'));
            // return view('users.address', ['address' => $address]);
            return view('users.deliveryAddress', ['address' => $address]);
        } else {
            return view('landing_page')->with('message', 'You have to login first');
        }
        // return view('users.deliveryAddress');
    }

    public function wishlist()
    {
        if (session()->has('user')) {
            return view('users.wishlist');
        } else {
            return view('landing_page')->with('message', 'You have to login first');
        }
    }

    public function categories()
    {
        if (session()->has('user')) {
            $user = Users::find(session('id'));
            $post = Books::with('user.addressUser')->get();
            return view('users.categories', ['book' => $post, 'user' => $user]);

            // $book = Books::all();
            // return view('users.categories', ['book' => $book]);
        } else {
            return view('landing_page')->with('message', 'You have to login first');
        }
    }

    // public function myList()
    // {
    //     if (session()->has('user')) {
    //         return view('users.myList');
    //     } else {            
    //         return view('landing_page')->with('message', 'You have to login first');
    //     }
    // }

    public function myLikes()
    {
        return view('users.myLikes');
    }

    public function myProfile()
    {
        if (session()->has('user')) {
            $user = Users::find(session('id'));
            return view('users.myProfile', ['user' => $user]);
        } else {
            return view('landing_page')->with('message', 'You have to login first');
        }
    }

    public function myProfileUpdate(Request $request)
    {
        if (session()->has('user')) {
            if ($request->hasFile('profile_photo')) {
                $validated = $request->validate([
                    'first_name' => ['required', 'min:4'],
                    'last_name' => ['required', 'min:4'],
                    'email' => ['required', 'email'],
                    'phone_number' => ['required', 'max:12'],
                    // 'address' => ['required', 'min:4'],
                    'birthday' => 'required',
                    'gender' => 'required',
                    // 'age' => 'required',
                    'interest' => 'required',
                    // 'username' => 'required',
                    // 'password' => 'required',
                    'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240'
                ]);

                $validated["interest"] = implode(', ', $validated["interest"]);

                $fileNameWithExt = $request->file('profile_photo')->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('profile_photo')->getClientOriginalExtension();
                $fileNameToStore = $fileName . '_' . time() . $extension;
                $request->file('profile_photo')->move(public_path('images/profile_photos'), $fileNameToStore);
                $validated["profile_photo"] = $fileNameToStore;

                $user = Users::find(session('id'));
                $user->update($validated);

                if ($user) {
                    // return redirect('/myprofile');
                    return view('users.myProfile', ['user' => $user, 'message' => 'Update successful! Your profile has been successfully updated.']);
                } else {
                    return view('users.myProfile', ['user' => $user, 'message' => 'Error updating profile']);
                }
            } else {
                $validated = $request->validate([
                    'first_name' => ['required', 'min:4'],
                    'last_name' => ['required', 'min:4'],
                    'email' => ['required', 'email'],
                    'phone_number' => ['required', 'max:12'],
                    // 'address' => ['required', 'min:4'],
                    'birthday' => 'required',
                    'gender' => 'required',
                    // 'age' => 'required',
                    'interest' => 'required',
                    // 'username' => 'required',
                    // 'password' => 'required',
                    // 'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240'
                ]);
                $validated["interest"] = implode(', ', $validated["interest"]);

                $user = Users::find(session('id'));
                $user->update($validated);


                if ($user) {
                    // return redirect('/myprofile');
                    return view('users.myProfile', ['user' => $user, 'message' => 'Update successful! Your profile has been successfully updated.']);
                } else {
                    return view('users.myProfile', ['user' => $user, 'message' => 'Error updating profile']);
                }
            }
        } else {
            return view('landing_page')->with('message', 'You have to login first');
        }
    }

    public function myPurchase()
    {
        // $orders = Orders::where('order_status', 'pending')->with('items.book.user.addressUser')->get();

        // return view('courier.manageShipment', ['orders' => $orders]);
        $order = Users::with('orders.items.book.user')->find(session('id'));
        // dd($order);        
        return view('users.myPurchase', ['user' => $order]);
    }

    public function notification()
    {
        return view('users.notification');
    }

    public function readNotification()
    {
        return view('users.readNotification');
    }

    public function unreadNotification()
    {
        return view('users.unreadNotification');
    }

    public function message()
    {
        return view('users.message');
    }

    public function adminMessage()
    {
        return view('admin.adminMessage');
    }

    public function adminNotification()
    {
        return view('admin.adminNotification');
    }


    // public function searchResult()
    // {
    //     return view('users.searchResult');
    // }

    public function userProfilePreview()
    {
        return view('users.userProfilePreview');
    }

    public function previewReviews()
    {
        return view('users.previewReviews');
    }

    public function previewWishlist()
    {
        return view('users.previewWishlist');
    }

    public function toReceive()
    {
        $order = Users::with('orders.items.book.user')->find(session('id'));
        // dd($order);        
        return view('users.toReceive', ['user' => $order]);
        // return view('users.toReceive');
    }

    public function deliveredMyPurchase()
    {
        $order = Books::where(['unit' => 'Ordered'])->with('item.order.user', 'user', 'item.ratedItem')->get();
        // dd($order);
        return view('users.deliveredMyPurchase', ['orders' => $order]);
        // return view('users.deliveredMyPurchase');
    }

    public function droppedMyPurchase()
    {
        return view('users.droppedMyPurchase');
    }

    public function refundMyPurchase()
    {
        return view('users.refundMyPurchase');
    }

    public function address(Request $request)
    {
        if ($request->session()->has('user')) {
            $address = Address::where('user_id', session('id'))->get();
            // $address = Address::findOrFail(session('id'));
            return view('users.address', ['address' => $address]);
        } else {
            return view('landing_page')->with('message', 'You have to login first');
        }
        // return $address;
    }

    public function changePassword(Request $request)
    {
        if ($request->session()->has('user')) {
            $user = Users::find(session('id'));
            return view('users.changePassword', ['user' => $user]);
        } else {
            return view('users.signup');
        }
    }

    public function userReviewsAndRatings()
    {
        return view('users.userReviewsAndRatings');
    }

    public function orders()
    {
        // $orders = Orders::where(['user_id' => session('id'), 'order_status' => 'pending'])->with('items.book.user')->first();        
        // $order = Users::where('id', session('id'))->with('orders.items.book.user')->first();
        $order = Books::where(['user_id' => session('id'), 'unit' => 'Ordered'])->with('item.order.user')->get();
        // dd($order);
        return view('users.orders', ['orders' => $order]);
    }

    public function deleteOrder($id)
    {
        $item = Order_Items::with('book')->find($id);
        $book_update = $item->book->update(['unit' => 'Available']);
        $item->delete();

        if ($item) {
            return redirect('/mypurchase');
        } else {
            return response()->json(['message' => 'error bitch']);
        }
    }

    public function delivered()
    {
        $order = Books::where(['user_id' => session('id'), 'unit' => 'Ordered'])->with('item.order.user')->get();
        // dd($order);
        return view('users.delivered', ['orders' => $order]);
        // $order = Orders::where(['user_id' => session('id')])->with('items.book.user')->get();       
        // return view('users.delivered', ['order' => $order]);
    }

    public function dropped()
    {
        return view('users.dropped');
    }

    public function refund()
    {
        return view('users.refund');
    }

    public function sellerOrders()
    {
        return view('bookseller.sellerOrders');
    }

    public function sellerDelivered()
    {
        return view('bookseller.sellerDelivered');
    }

    public function sellerDropped()
    {
        return view('bookseller.sellerDropped');
    }

    public function sellerRefund()
    {
        return view('bookseller.sellerRefund');
    }

    public function rentalTracking()
    {
        return view('bookseller.rentalTracking');
    }

    public function reviewsRating()
    {
        return view('bookseller.reviewsRating');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required',
            'first_name' => ['required', 'min:4'],
            'last_name' => ['required', 'min:4'],
            'email' => ['required', 'email'],
            'phone_number' => ['required', 'max:12'],
            // 'address' => ['required', 'min:4'],
            'birthday' => 'required',
            'gender' => 'required',
            // 'age' => 'required',
            // 'interest' => 'required',
            'username' => 'required',
            'password' => 'required',
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240'
        ]);
        // dd($validated);

        $validated["password"] =  bcrypt($validated["password"]);
        // $validated["interest"] = implode(', ', $validated["interest"]);

        $fileNameWithExt = $request->file('profile_photo')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('profile_photo')->getClientOriginalExtension();
        $fileNameToStore = $fileName . '_' . time() . $extension;
        $request->file('profile_photo')->move(public_path('images/profile_photos'), $fileNameToStore);
        $validated["profile_photo"] = $fileNameToStore;

        $userExist = Users::where('username', $validated["username"])->first();

        if ($userExist) {
            return view('users.signup', ['message' => 'Username already exist']);
        } else {
            $user = Users::create($validated);

            if ($user) {
                $request->session()->put([
                    'id' => $user->id,
                    'type' => $user->type,
                    'first_name' => $user->first_name,
                    'last_name' => $user->last_name,
                    // 'address' => $validated["address"],
                    'user' => $validated["username"],
                    'profile_pic' => $validated["profile_photo"]
                ]);

                return redirect('/survey');
                // return redirect()->route('explore');
                // if ($request->session()->has('user')) {
                //     return redirect('/explore');
                // } else {
                //     return view('users.signup');
                // }
            } else {
                return view('users.signup')->with('message', "Cannot sign up");
            }
        }
    }

    public function surveyInterest(Request $request)
    {
        $validated = $request->validate(['interest' => 'required']);
        $validated["interest"] = implode(', ', $validated["interest"]);

        $user = Users::find(session('id'));
        $user->update($validated);
        if ($user) {
            return redirect('/explore');
        } else {
            return 'error bitch';
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return view('landing_page');
    }

    public function login_process(Request $request)
    {
        $login = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = Users::where('username', $login["username"])->first();

        if ($user && Hash::check($login["password"], $user["password"])) {
            if ($user->type == 'General User') {
                $request->session()->put([
                    'id' => $user["id"],
                    'first_name' => $user["first_name"],
                    'last_name' => $user["last_name"],
                    // 'address' => $user["address"],
                    'user' => $user["username"],
                    'profile_pic' => $user["profile_photo"]
                ]);
                return redirect()->route('explore');
            } else if ($user->type == 'Bookseller') {
                $request->session()->put([
                    'id' => $user->id,
                    'type' => $user->type,
                    'owner_name' => $user->owner_name,
                    'business_name' => $user->business_name,
                    'address' => $user->address,
                    'user' => $user->username,
                    'profile_pic' => $user->profile_photo
                ]);

                return redirect('/sellerboard');
            } else if ($user->type == 'Admin') {
                $request->session()->put([
                    'id' => $user->id,
                    'type' => $user->type,
                    'address' => $user->address,
                    'user' => $user->username,
                    'profile_pic' => $user->profile_photo
                ]);

                return redirect('/dashboard');
            }
        } else {
            return view('users.login')->with('message', 'Incorrect username or password');
        }
    }

    public function updateUserPassword(Request $request)
    {
        $validated = $request->validate([
            'password' => 'required',
            'new_password' => 'required',
        ]);
        $validated['new_password'] = bcrypt($validated['new_password']);

        $user = Users::find(session('id'));

        if ($user && Hash::check($validated["password"], $user->password)) {
            $user->update(['password' => $validated["new_password"]]);
            return view('users.changePassword', ['user' => $user, 'message' => 'Password successfully updated.']);
        } else {
            return view('users.changePassword', ['user' => $user, 'message' => 'Cannot update password']);
        }
    }

    public function storeAddress(Request $request, $add)
    {
        if ($request->has('default_address')) {
            $validated = $request->validate([
                'name' => 'required',
                'contact_number' => 'required',
                'region' => 'required',
                'city_municipality' => 'required',
                'brgy_village' => 'required',
                'postal_code' => 'required',
                'street_building_house' => 'required',
                'default_address' => 'accepted'
            ]);

            // dd($validated);            

            $post_address = Address::where('default_address', 'true')->first();

            if ($post_address && $add == 'delivery') {
                $post_address->update([
                    'default_address' => null
                ]);
                $new_add = Address::create([
                    'user_id' => session('id'),
                    'name' => $validated['name'],
                    'contact_number' => $validated['contact_number'],
                    'region' => $validated['region'],
                    'city_municipality' => $validated['city_municipality'],
                    'brgy_village' => $validated['brgy_village'],
                    'postal_code' => $validated['postal_code'],
                    'street_building_house' => $validated['street_building_house'],
                    'default_address' => $validated['default_address']
                ]);
                return redirect('/deliveryAddress')->with('message', 'Address added successfully');
            } elseif ($post_address && $add == 'notDelivery') {
                $post_address->update([
                    'default_address' => null
                ]);
                $new_add = Address::create([
                    'user_id' => session('id'),
                    'name' => $validated['name'],
                    'contact_number' => $validated['contact_number'],
                    'region' => $validated['region'],
                    'city_municipality' => $validated['city_municipality'],
                    'brgy_village' => $validated['brgy_village'],
                    'postal_code' => $validated['postal_code'],
                    'street_building_house' => $validated['street_building_house'],
                    'default_address' => $validated['default_address']
                ]);
                // $post_address->update($validated);
                return redirect('addresses')->with('message', 'Success! The address has been added to your account successfully.');
            } elseif ($add == 'delivery') {
                $new_add = Address::create([
                    'user_id' => session('id'),
                    'name' => $validated['name'],
                    'contact_number' => $validated['contact_number'],
                    'region' => $validated['region'],
                    'city_municipality' => $validated['city_municipality'],
                    'brgy_village' => $validated['brgy_village'],
                    'postal_code' => $validated['postal_code'],
                    'street_building_house' => $validated['street_building_house'],
                    'default_address' => $validated['default_address']
                ]);
                return redirect('/deliveryAddress')->with('message', 'Success! The address has been added to your account successfully.');
            } elseif ($add == 'notDelivery') {
                $new_add = Address::create([
                    'user_id' => session('id'),
                    'name' => $validated['name'],
                    'contact_number' => $validated['contact_number'],
                    'region' => $validated['region'],
                    'city_municipality' => $validated['city_municipality'],
                    'brgy_village' => $validated['brgy_village'],
                    'postal_code' => $validated['postal_code'],
                    'street_building_house' => $validated['street_building_house'],
                    'default_address' => $validated['default_address']
                ]);
                return redirect('addresses')->with('message', 'Success! The address has been added to your account successfully.');
            } else {
                return "error bitch";
            }
        } else {
            $validated = $request->validate([
                'name' => 'required',
                'contact_number' => 'required',
                'region' => 'required',
                'city_municipality' => 'required',
                'brgy_village' => 'required',
                'postal_code' => 'required',
                'street_building_house' => 'required'
            ]);

            // dd($validated);
            $post_address = Address::create([
                'user_id' => session('id'),
                'name' => $validated['name'],
                'contact_number' => $validated['contact_number'],
                'region' => $validated['region'],
                'city_municipality' => $validated['city_municipality'],
                'brgy_village' => $validated['brgy_village'],
                'postal_code' => $validated['postal_code'],
                'street_building_house' => $validated['street_building_house'],
                // 'default_address' => $validated['default_address']
            ]);

            if ($post_address && $add == 'delivery') {
                return redirect('/deliveryAddress')->with('message', 'Success! The address has been added to your account successfully.');
            } elseif ($post_address && $add == 'notDelivery') {
                return redirect('addresses')->with('message', 'Success! The address has been added to your account successfully.');
            } else {
                return "error bitch";
            }
        }
    }

    public function updateAddress(Request $request, $id, $add)
    {
        if ($request->has('default_address')) {
            $validated = $request->validate([
                'name' => 'required',
                'contact_number' => 'required',
                'region' => 'required',
                'city_municipality' => 'required',
                'brgy_village' => 'required',
                'postal_code' => 'required',
                'street_building_house' => 'required',
                'default_address' => 'accepted'
            ]);

            // dd($validated);
            // $address = Address::find($id);
            // $address->update($validated);
            // $address = Address::updateOrInsert(
            //     ['default_address' => 'true'],
            //     [
            //         'user_id' => session('id'),
            //         'name' => $validated['name'],
            //         'contact_number' => $validated['contact_number'],
            //         'region' => $validated['region'],
            //         'city_municipality' => $validated['city_municipality'],
            //         'brgy_village' => $validated['brgy_village'],
            //         'postal_code' => $validated['postal_code'],
            //         'street_building_house' => $validated['street_building_house']
            //         // 'default_address' => $validated['default_address']
            //     ]
            // );

            $address = Address::where(['user_id' => session('id'), 'default_address' => 'true'])->first();

            if ($address && $add == 'delivery') {
                $address->update(['default_address' => null]);
                $new_add = Address::find($id);
                $new_add->update($validated);

                return redirect('/deliveryAddress');
            } elseif ($address && $add == 'notDelivery') {
                $address->update(['default_address' => null]);
                $new_add = Address::find($id);
                $new_add->update($validated);

                return redirect('addresses')->with('message', 'Success! Your address has been updated successfully.');
            } elseif ($add == 'delivery') {
                $new_add = Address::find($id);
                $new_add->update($validated);
                return redirect('/deliveryAddress');
            } elseif ($add == 'notDelivery') {
                $new_add = Address::find($id);
                $new_add->update($validated);
                return redirect('addresses')->with('message', 'Success! Your address has been updated successfully.');
            } else {
                return "error bitch";
            }
        } else {
            $validated = $request->validate([
                'name' => 'required',
                'contact_number' => 'required',
                'region' => 'required',
                'city_municipality' => 'required',
                'brgy_village' => 'required',
                'postal_code' => 'required',
                'street_building_house' => 'required',
            ]);

            // dd($validated);
            $address = Address::find($id);
            $address->update([
                // 'user_id' => session('id'),
                'name' => $validated['name'],
                'contact_number' => $validated['contact_number'],
                'region' => $validated['region'],
                'city_municipality' => $validated['city_municipality'],
                'brgy_village' => $validated['brgy_village'],
                'postal_code' => $validated['postal_code'],
                'street_building_house' => $validated['street_building_house'],
                'default_address' => null
            ]);

            if ($address && $add == 'delivery') {
                return redirect('/deliveryAddress');
            } elseif ($address && $add == 'notDelivery') {
                return redirect('addresses')->with('message', 'Success! Your address has been updated successfully.');
            } else {
                return "error bitch";
            }
        }
    }

    public function destroyAddress($id, $del)
    {
        $address = Address::find($id);
        $address->delete();

        if ($address && $del == 'delivery') {
            return redirect('/deliveryAddress');
        } elseif ($address && $del == 'notDelivery') {
            return redirect('addresses')->with('message', 'Address deletion confirmed. Your address has been successfully removed from the system.');
        } else {
            return "error bitch";
        }
    }

    public function search($item)
    {
        // $search = Books::where('title', 'LIKE', '%' . $item . '%')->get();
        $search = Books::where(function ($query) use ($item) {
            $query->where('title', 'LIKE', '%' . $item . '%')
                ->orWhere('author', 'LIKE', '%' . $item . '%')
                ->orWhere('genre', 'LIKE', '%' . $item . '%');
        })->get();

        return view('users.search', ['items' => $search]);
    }

    public function placeOrder(Request $request)
    {
        // $address_id = $request->input('address_id');
        // $book_id = $request->input('book_id');
        // $option = $request->input('shipping_option');
        // $method = $request->input('payment_method');
        // $shipping = $request->input('shipping_total');
        // $price = $request->input('total_price');
        $data = $request->input('data');
        // dd($address_id);
        $request->session()->put('data', $data);
        return response()->json(['response' => $data]);

        // $order = Orders::create([
        //     'user_id' => session('id'),
        //     'address_id' => $address_id,
        //     'shipping_option' => $option,
        //     'payment_method' => $method,
        //     'order_status' => 'pending',
        //     // 'shipping_total' => $shipping,
        //     'total_payment' => $price
        // ]);

        // $cart = Cart::where('user_id', session('id'))->update(['status' => 'Ordered']);

        // foreach ($book_id as $id) {
        //     $orderItem = Order_Items::create([
        //         'order_id' => $order->id,
        //         'book_id' => $id
        //     ]); 

        //     $orderItem->book->update([
        //         'unit' => 'Ordered'
        //     ]);
        // }

        // if ($order) {
        //     return redirect('/explore');            
        // } else {
        //     return response()->json(['message' => 'error bitch']);
        // }
    }

    public function successOrder()
    {
        // dd(session('data'));
        $address_id = session('data')['address_id'];
        $book_id = session('data')['book_id'];
        $qty = session('data')['qty'];
        $order_num = session('data')['order_number'];
        $option = session('data')['shipping_option'];
        $method = session('data')['payment_method'];
        $price = session('data')['total_price'];

        $order = Orders::create([
            'user_id' => session('id'),
            'address_id' => $address_id,
            'order_number' => $order_num,
            'shipping_option' => $option,
            'payment_method' => $method,
            // 'order_status' => 'Pending',
            'total_payment' => $price
        ]);

        $cart = Cart::where('user_id', session('id'))->update(['status' => 'Ordered']);

        foreach ($book_id as $index => $id) {
            $orderItem = Order_Items::create([
                'order_id' => $order->id,
                'book_id' => $id,
                'qty' => $qty[$index],
                'order_status' => 'Pending'
            ]);
            $stock = $orderItem->book->stock - $qty[$index];
            $orderItem->book->update([
                'unit' => 'Ordered',
                'stock' => $stock
            ]);
        }

        if ($order) {
            session()->forget('data');
            return redirect('/explore');
        } else {
            return response()->json(['message' => 'error bitch']);
        }       
    }

    public function receivedOrder($id)
    {
        $order = Order_Items::find($id);
        $order->update(['order_status' => 'received']);

        if ($order) {
            return redirect('/toreceive');
        } else {
            return response()->json(['error' => 'error']);
        }
    }

    public function survey()
    {
        return view('users.survey');
    }


    public function systemFeedback()
    {
        return view('users.systemFeedback');
    }

    // public function userDashboard()
    // {
    //     return view('users.userDashboard');
    // }

    public function manageShipment()
    {
        // $orders = Orders::with('items.book.user.addressUser')->get();
        $orders = Order_Items::where('order_status', 'Pending')->with('book.user.addressUser', 'order.address')->get();

        return view('courier.manageShipment', ['orders' => $orders]);
    }

    public function manageReturn()
    {
        return view('courier.manageReturn');
    }

    public function courierProfile()
    {
        return view('courier.courierProfile');
    }

    public function courierMessage()
    {
        return view('courier.courierMessage');
    }

    public function courierNotification()
    {
        return view('courier.courierNotification');
    }

    public function complete()
    {
        return view('courier.complete');
    }

    public function booksRented()
    {
        return view('users.booksRented');
    }

    // API's
    public function checkUsername($user) {
        $checkuser = Users::where('username', $user)->first();
        
        if ($checkuser) {
            return response()->json(['message' => 'Username already exists. Please choose a different username.']);
        } else {
            return response()->json(['message' => 'not exist']);
        }
    }

    public function searchItem($item)
    {
        $search = Books::where(function ($query) use ($item) {
            $query->where('title', 'LIKE', '%' . $item . '%')
                ->orWhere('author', 'LIKE', '%' . $item . '%')
                ->orWhere('genre', 'LIKE', '%' . $item . '%');
        })->get();

        return $search;
    }

    public function getAddress($id)
    {
        $address = Address::find($id);

        return $address;
    }

    public function getShipment($id)
    {
        // $orders = Orders::where('order_status', 'pending')->with('items.book.user.addressUser')->get();
        $order = Orders::with('items.book.user.addressUser', 'address')->find($id);
        // $order = Order_Items::with('book.user.orders.address')->find($id);
        return $order;
    }

    public function getUser($id)
    {
        $user = Users::find($id);
        return $user;
    }

    public function acceptShipment(Request $request)
    {
        if ($request->hasFile('file')) {
            $item_id = $request->input('item_id');

            $fileNameWithExt = $request->file('file')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileNameToStore = $fileName . '_' . time() . $extension;
            $request->file('file')->move(public_path('images/bar_codes'), $fileNameToStore);
            $bar_code = $fileNameToStore;

            $order = Order_Items::with('order')->find($item_id);
            $order->update([
                'bar_code' => $bar_code,
            ]);
            $order->update([
                'order_status' => 'paid'
            ]);

            if ($order) {
                // return response()->json(['code' => $order]);
                return redirect('/shipment');
            }
        } else {
            return response()->json(['code' => 'no file']);
        }
    }

    public function getRating($id)
    {
        $rating = Reviews::with('item.book.user')->find($id);
        return $rating;
    }

    public function ratePost(Request $request)
    {
        $data = $request->all();

        $imageFields = ['first_img', 'second_img', 'third_img', 'fourth_img', 'fifth_img'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $fileNameWithExt = $request->file($field)->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension = $request->file($field)->getClientOriginalExtension();
                $fileNameToStore = $fileName . '_' . time() . '.' . $extension;

                $request->file($field)->move(public_path('images/rate_images'), $fileNameToStore);

                $data[$field] = $fileNameToStore;
            }
        }

        $rate = Reviews::create($data);

        if ($rate) {
            return response()->json(['response' => 'Review successfully created. Thank you for your feedback!']);
        } else {
            return response()->json(['response' => 'Submission unsuccessful. Please review and try again.']);
        }
    }

    public function updateRate(Request $request, $id)
    {
        $data = $request->all();

        $imageFields = ['first_img', 'second_img', 'third_img', 'fourth_img', 'fifth_img'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $fileNameWithExt = $request->file($field)->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension = $request->file($field)->getClientOriginalExtension();
                $fileNameToStore = $fileName . '_' . time() . '.' . $extension;

                $request->file($field)->move(public_path('images/rate_images'), $fileNameToStore);

                $data[$field] = $fileNameToStore;
            }
        }

        $update = Reviews::find($id);
        $update->update($data);
        if ($update) {
            return response()->json(['response' => 'Update confirmed: Your review has been successfully updated.']);
        } else {
            return response()->json(['response' => 'Update review unsuccessful.']);
        }
    }
}
