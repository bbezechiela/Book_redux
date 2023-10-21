<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Common routes naming

index - Show all data or students
show - Show a single data or student
create - Show a form to add a new user
store - Store a data
edit - Show form to a data
update - update a data
destroy - delete a data
*/

Route::get('/', [UserController::class, 'welcome']);

Route::get('/login', [UserController::class, 'login']);

Route::post('/loginprocess', [UserController::class, 'login_process']);

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/signup', [UserController::class, 'signup']);

Route::get('/sidebar', [UserController::class, 'sidebar']);

Route::get('/home', [UserController::class, 'home'])->name('home');

Route::get('/notification', [UserController::class, 'notification']);

Route::get('/read', [UserController::class, 'readNotification']);

Route::get('/unread', [UserController::class, 'unreadNotification']);

Route::get('/messages', [UserController::class, 'message']);

Route::get('/product', [UserController::class, 'singleProduct']);

Route::get('/cart', [UserController::class, 'cart']);

Route::get('/checkout', [UserController::class, 'checkout']);

Route::get('/deliveryAddress', [UserController::class, 'deliveryAddress']);

Route::get('/wishlist', [UserController::class, 'wishlist']);

Route::get('/mylist', [ListingController::class, 'myList'])->name('mylist');

Route::get('/categories', [UserController::class, 'categories']);

Route::get('/mylikes', [UserController::class, 'myLikes']);

Route::get('/myprofile', [UserController::class, 'myProfile']);

Route::get('/mypurchase', [UserController::class, 'myPurchase']);

Route::get('/toreceive', [UserController::class, 'toReceive']);

Route::get('/delivered-mypurchase', [UserController::class, 'deliveredMyPurchase']);

Route::get('/dropped-mypurchase', [UserController::class, 'droppedMyPurchase']);

Route::get('/refund-mypurchase', [UserController::class, 'refundMyPurchase']);

Route::get('/addresses', [UserController::class, 'address']);

Route::get('/changepassword', [UserController::class, 'changePassword']);

Route::get('/reviewsandratings', [UserController::class, 'userReviewsAndRatings']);

Route::post('/register', [UserController::class, 'store']);

Route::post('/mylist/salepost', [ListingController::class, 'saleList']);

Route::post('/mylist/exchangepost', [ListingController::class, 'exchangeList']);

Route::post('/mylist/rentpost', [ListingController::class, 'rentList']);

Route::get('/mylist/sale', [ListingController::class, 'sale']);

Route::get('/mylist/exchange', [ListingController::class, 'exchange']);

Route::get('/mylist/rent', [ListingController::class, 'rent']);

Route::get('/orders', [UserController::class, 'orders']);

Route::get('/delivered', [UserController::class, 'delivered']);

Route::get('/dropped', [UserController::class, 'dropped']);

Route::get('/refund', [UserController::class, 'refund']);

Route::post('/mylist/updateSale/{id}', [ListingController::class, 'saleUpdate']);

Route::post('/mylist/updateExchange/{id}', [ListingController::class, 'exchangeUpdate']);

Route::post('/mylist/rentExchange/{id}', [ListingController::class, 'rentUpdate']);

Route::get('/mylist/delete/{id}', [ListingController::class, 'destroy']);
