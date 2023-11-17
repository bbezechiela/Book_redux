<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Books;
use App\Models\Cart;
use App\Models\Order_Items;
use App\Models\Orders;
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
            return redirect('/userdashboard');
        } else {
            return view('users.login');
        }
    }

    public function signup(Request $request)
    {
        if ($request->session()->has('user')) {
            return redirect('/userdashboard');
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
            $post = Books::all();
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
            $user = Users::find($user_id);
            return view('users.singleProduct', ['book_id' => $book, 'user_id' => $user]);
        } else {
            return view('landing_page')->with('message', 'You have to login first');
        }
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
            $checkout = Cart::whereIn('id', $order)->with('productRelation.user.addressUser')->get();

            $address = Users::with('addressUser')->find(session('id'));
            return view('users.checkout', ['items' => $checkout, 'user' => $address]);
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
            $book = Books::all();
            return view('users.categories', ['book' => $book]);
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
                    'address' => ['required', 'min:4'],
                    'birthday' => 'required',
                    'gender' => 'required',
                    'age' => 'required',
                    'interest' => 'required',
                    // 'username' => 'required',
                    // 'password' => 'required',
                    'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240'
                ]);

                $fileNameWithExt = $request->file('profile_photo')->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('profile_photo')->getClientOriginalExtension();
                $fileNameToStore = $fileName . '_' . time() . $extension;
                $request->file('profile_photo')->move(public_path('images/profile_photos'), $fileNameToStore);
                $validated["profile_photo"] = $fileNameToStore;

                $user = Users::find(session('id'));
                $user->update($validated);

                if ($user) {
                    return redirect('/myprofile');
                } else {
                    return 'error bitch';
                }
            } else {
                $validated = $request->validate([                    
                    'first_name' => ['required', 'min:4'],
                    'last_name' => ['required', 'min:4'],
                    'email' => ['required', 'email'],
                    'phone_number' => ['required', 'max:12'],
                    'address' => ['required', 'min:4'],
                    'birthday' => 'required',
                    'gender' => 'required',
                    'age' => 'required',
                    'interest' => 'required',
                    // 'username' => 'required',
                    // 'password' => 'required',
                    // 'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240'
                ]);

                $user = Users::find(session('id'));
                $user->update($validated);


                if ($user) {
                    return redirect('/myprofile');
                } else {
                    return 'error bitch';
                }
            }
        } else {
            return view('landing_page')->with('message', 'You have to login first');
        }
    }

    public function myPurchase()
    {
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
        $order = Books::where(['user_id' => session('id'), 'unit' => 'Ordered'])->with('item.order.user')->get();
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

    public function deleteOrder($id) {
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

    public function surveyInterest(Request $request) {
        $validated = $request->validate(['interest' => 'required']);
        $validated["interest"] = implode(', ', $validated["interest"]);

        $user = Users::find(session('id'));
        $user->update($validated);
        if ($user) {
            return redirect('/userdashboard');
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
                return redirect()->route('userdashboard');
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
            return view('users.changePassword', ['user' => $user]);
        } else {
            return "error bitch";
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
                return redirect('/deliveryAddress');
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
                return redirect('addresses');
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
                return redirect('/deliveryAddress');
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
                return redirect('addresses');
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
                return redirect('/deliveryAddress');
            } elseif ($post_address && $add == 'notDelivery') {
                return redirect('addresses');
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

            $address = Address::where('default_address', 'true')->first();

            if ($address && $add == 'delivery') {
                $address->update(['default_address' => null]);
                $new_add = Address::find($id);
                $new_add->update($validated);

                return redirect('/deliveryAddress');
            } elseif ($address && $add == 'notDelivery') {
                $address->update(['default_address' => null]);
                $new_add = Address::find($id);
                $new_add->update($validated);

                return redirect('addresses');
            } elseif ($add == 'delivery') {
                $new_add = Address::find($id);
                $new_add->update($validated);
                return redirect('/deliveryAddress');
            } elseif ($add == 'notDelivery') {
                $new_add = Address::find($id);
                $new_add->update($validated);
                return redirect('addresses');
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
                return redirect('addresses');
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
            return redirect('addresses');
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

    public function placeOrder(Request $request) {
        $address_id = $request->input('address_id');
        $book_id = $request->input('book_id');
        $option = $request->input('shipping_option');
        $method = $request->input('payment_method');
        // $shipping = $request->input('shipping_total');
        $price = $request->input('total_price');
        // $data = $request->input('data');
        // dd($address_id);
        // $request->session()->put('data', $data);
        // return response()->json(['response' => $address_id]);

        $order = Orders::create([
            'user_id' => session('id'),
            'address_id' => $address_id,
            'shipping_option' => $option,
            'payment_method' => $method,
            'order_status' => 'pending',
            // 'shipping_total' => $shipping,
            'total_payment' => $price
        ]);

        $cart = Cart::where('user_id', session('id'))->update(['status' => 'Ordered']);

        foreach ($book_id as $id) {
            $orderItem = Order_Items::create([
                'order_id' => $order->id,
                'book_id' => $id
            ]); 

            $orderItem->book->update([
                'unit' => 'Ordered'
            ]);
        }
                
        if ($order) {
            return redirect('/explore');            
        } else {
            return response()->json(['message' => 'error bitch']);
        }
    }

    public function successOrder($id) {
        $order = Orders::find($id);
        // dd($order);
        $order->update(['order_status' => 'paid']);

        if ($order) {
            return redirect('/mypurchase');
        } else {
            return response()->json(['error' => 'error']);
        }
        
    }

    public function receivedOrder($id) {
        $order = Orders::find($id);
        $order->update(['order_status' => 'received']);

        if ($order) {
            return redirect('/mypurchase');
        } else {
            return response()->json(['error' => 'error']);
        }        
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function manageResources()
    {
        return view('admin.manageResources');
    }

    public function manageRefund()
    {
        return view('admin.manageRefund');
    }

    public function manageReviews()
    {
        return view('admin.manageReviews');
    }

    public function manageUserAccounts()
    {
        return view('admin.manageUserAccounts');
    }

    public function manageRentingClub()
    {
        return view('admin.manageRentingClub');
    }

    public function manageSellingClub()
    {
        return view('admin.manageSellingClub');
    }

    public function manageExchangeClub()
    {
        return view('admin.manageExchangeClub');
    }

    public function manageUserListing()
    {
        return view('admin.manageUserListing');
    }

    public function reportedListing()
    {
        return view('admin.reportedListing');
    }

    public function reportedPost()
    {
        return view('admin.reportedPost');
    }

    public function reportedExchangePost()
    {
        return view('admin.reportedExchangePost');
    }

    public function reportedRentPost()
    {
        return view('admin.reportedRentPost');
    }

    public function reportedUser()
    {
        return view('admin.reportedUser');
    }

    public function reportedSeller()
    {
        return view('admin.reportedSeller');
    }

    public function adminProfile()
    {
        return view('admin.adminProfile');
    }

    public function manageSeller()
    {
        return view('admin.manageSeller');
    }

    public function survey()
    {
        return view('users.survey');
    }


    public function systemFeedback()
    {
        return view('users.systemFeedback');
    }

    public function userDashboard()
    {
        return view('users.userDashboard');
    }
    
    public function manageShipment()
    {
    return view('courier.manageShipment');
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

    public function booksRented()
    {
    return view('users.booksRented');
    }
    
    // API's
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
}


