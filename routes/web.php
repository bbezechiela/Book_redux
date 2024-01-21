<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookClubController;
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

Route::get('/role', [UserController::class, 'role']);

Route::get('/signup', [UserController::class, 'signup']);

Route::get('/sellersignup', [SellerController::class, 'sellerSignup']);

Route::post('/interest', [UserController::class, 'surveyInterest']);

Route::get('/sidebar', [UserController::class, 'sidebar']);

Route::get('/following', [UserController::class, 'following']);

Route::get('/followers', [UserController::class, 'followers']);

Route::get('/explore', [UserController::class, 'explore'])->name('explore');

Route::get('/notification', [UserController::class, 'notification']);

Route::get('/read', [UserController::class, 'readNotification']);

Route::get('/unread', [UserController::class, 'unreadNotification']);

Route::get('/messages', [UserController::class, 'message']);

Route::get('/adminmessages', [UserController::class, 'adminMessage']);

Route::get('/adminnotification', [UserController::class, 'adminNotification']);

// Route::get('/search', [UserController::class, 'searchResult']);

Route::get('/product/{id}/{user_id}', [UserController::class, 'singleProduct']);

Route::get('/listingdetails/{id}', [AdminController::class, 'productDetailsPreview']);

Route::get('/cart', [UserController::class, 'cart']);

Route::get('/bookclub', [UserController::class, 'bookClub']);

Route::get('/sellingclub', [UserController::class, 'bookSellingClub']);

Route::get('/exchangeclub', [UserController::class, 'bookExchangeClub']);

Route::get('/rentingclub', [UserController::class, 'bookRentingClub']);

Route::get('/eventssellingclub', [UserController::class, 'eventsSelling']);
 
Route::get('/memberssellingclub', [UserController::class, 'membersSelling']);

Route::get('/eventsexchangeclub', [UserController::class, 'eventsExchange']);

Route::get('/membersexchangeclub', [UserController::class, 'membersExchange']);

Route::get('/eventsrentingclub', [UserController::class, 'eventsRenting']);

Route::get('/membersrentingclub', [UserController::class, 'membersRenting']);

Route::get('/checkout', [UserController::class, 'checkout']);

Route::get('/deliveryAddress', [UserController::class, 'deliveryAddress']);

Route::get('/wishlist', [UserController::class, 'wishlist']);

Route::get('/mylist', [ListingController::class, 'myList'])->name('mylist');

Route::get('/categories', [UserController::class, 'categories']);

Route::get('/mylikes', [UserController::class, 'myLikes']);

Route::get('/myprofile', [UserController::class, 'myProfile']);

Route::post('/myprofileupdate', [UserController::class, 'myProfileUpdate']);

Route::post('/profileupdate', [SellerController::class, 'profileUpdate']);

Route::get('/mypurchase', [UserController::class, 'myPurchase']);

Route::get('/toreceive', [UserController::class, 'toReceive']);

Route::get('/delivered-mypurchase', [UserController::class, 'deliveredMyPurchase']);

Route::get('/dropped-mypurchase', [UserController::class, 'droppedMyPurchase']);

Route::get('/refund-mypurchase', [UserController::class, 'refundMyPurchase']);

Route::get('/addresses', [UserController::class, 'address']);

Route::get('/changepassword', [UserController::class, 'changePassword']);

Route::get('/reviewsandratings', [UserController::class, 'userReviewsAndRatings']);

Route::get('/usermyreviews', [UserController::class, 'myReviews']);

Route::get('/userlistings/{id}', [UserController::class, 'userProfilePreview']);

Route::get('/userreviews/{id}', [UserController::class, 'previewReviews']);

Route::get('/userwishlist', [UserController::class, 'previewWishlist']);

Route::post('/register', [UserController::class, 'store']);

Route::post('/mylist/salepost', [ListingController::class, 'saleList']);

Route::post('/mylist/exchangepost', [ListingController::class, 'exchangeList']);

Route::post('/listing/rentpost', [ListingController::class, 'rentList']);

Route::get('/mylist/sale', [ListingController::class, 'sale']);

Route::get('/mylist/exchange', [ListingController::class, 'exchange']);

// Route::get('/mylist/rent', [ListingController::class, 'rent']);

Route::post('/listing/sale', [ListingController::class, 'sellerSale']);

// Route::post('/listing/rent', [ListingController::class, 'sellerRent']);

Route::post('/listing/updateSale/{id}', [ListingController::class, 'sellerUpdateSale']);

Route::get('/listing/delete/{id}', [ListingController::class, 'destroySeller']);

Route::get('/orders', [UserController::class, 'orders']);

Route::get('/delivered', [UserController::class, 'delivered']);

Route::get('/dropped', [UserController::class, 'dropped']);

Route::get('/refund', [UserController::class, 'refund']);

Route::get('/sellerorders', [SellerController::class, 'sellerOrders']);

Route::get('/sellerdelivered', [SellerController::class, 'sellerDelivered']);

Route::get('/sellerdropped', [UserController::class, 'sellerDropped']);

Route::get('/sellerrefund', [UserController::class, 'sellerRefund']);

Route::get('/trackrental', [SellerController::class, 'rentalTracking']);

Route::get('/reviews', [SellerController::class, 'reviewsRating']);

Route::get('/sellermyreviews', [SellerController::class, 'myReviews']);

Route::post('/mylist/updateSale/{id}', [ListingController::class, 'saleUpdate']);

Route::post('/mylist/updateExchange/{id}', [ListingController::class, 'exchangeUpdate']);

Route::post('/listing/updateRent/{id}', [ListingController::class, 'rentUpdate']);

Route::get('/mylist/delete/{id}', [ListingController::class, 'destroy']);

Route::post('/updatepassword', [UserController::class, 'updateUserPassword']);

Route::post('/storeaddress/{add}', [UserController::class, 'storeAddress']);

Route::post('/updateaddress/{id}/{add}', [UserController::class, 'updateAddress']);

Route::get('/destroyaddress/{id}/{del}', [UserController::class, 'destroyAddress']);

Route::post('/trackrentalpost', [SellerController::class, 'trackRentalInput']);

// Admin
Route::get('/dashboard', [AdminController::class, 'dashboard']);

Route::get('/manageresources', [AdminController::class, 'manageResources']);

Route::get('/managerefund', [AdminController::class, 'manageRefund']);

Route::get('/managereviews', [AdminController::class, 'manageReviews']);

Route::get('/manageuseraccounts', [AdminController::class, 'manageUserAccounts']);

Route::get('/managerentingclub', [AdminController::class, 'manageRentingClub']);

Route::get('/managesellingclub', [AdminController::class, 'manageSellingClub']);

Route::get('/manageexchangeclub', [AdminController::class, 'manageExchangeClub']);

Route::get('/manageuserlisting', [AdminController::class, 'manageUserListing']);

Route::get('/reportedlisting', [AdminController::class, 'reportedListing']);

Route::get('/reportedpost', [AdminController::class, 'reportedPost']);

Route::get('/reportedexchangepost', [AdminController::class, 'reportedExchangePost']);

Route::get('/reportedrentpost', [AdminController::class, 'reportedRentPost']);

Route::get('/reporteduser', [AdminController::class, 'reportedUser']);

Route::get('/adminprofile', [AdminController::class, 'adminProfile']);

Route::post('/updateprofile', [AdminController::class, 'updateProfile']);

Route::get('/newUserToday', [AdminController::class, 'getNewUsersToday']);

Route::get('/newUserThisMonth', [AdminController::class, 'getNewUsersThisMonth']);

Route::get('/newUserThisYear', [AdminController::class, 'getNewUsersThisYear']);

Route::get('/newListingToday', [AdminController::class, 'getNewListingToday']);

Route::get('/newListingThisMonth', [AdminController::class, 'getNewListingThisMonth']);

Route::get('/newListingThisYear', [AdminController::class, 'getNewListingThisYear']);

Route::get('/deleteuserlisting/{id}', [AdminController::class, 'deleteUserListing']);

Route::get('/deleteaccount/{id}', [AdminController::class, 'deleteAccount']);



Route::get('/survey', [UserController::class, 'survey']);

Route::get('/feedback', [UserController::class, 'systemFeedback']);

// Route::get('/userdashboard', [UserController::class, 'userDashboard'])->name('userdashboard');

Route::get('/searchitem/{item}', [UserController::class, 'search']);

Route::get('/addtocart/{id}', [ListingController::class, 'addToCart']);

Route::get('/deletecart/{id}', [ListingController::class, 'destroyCart']);

Route::post('/placeorder', [UserController::class, 'placeOrder']);

Route::get('/deleteorder/{id}', [UserController::class, 'deleteOrder']);

Route::get('/declineorder/{id}', [UserController::class, 'declineOrder']);

Route::get('/successpayment', [UserController::class, 'successOrder']);

Route::get('/orderreceived/{id}', [UserController::class, 'receivedOrder']);

// message routes
// message routes, api's, backticks approach
Route::post('/sendMessage', [MessageController::class, 'sendMessage']);

Route::post('/sendMessageTwo', [MessageController::class, 'sendMessageTwo']);

Route::get('/getMessage', [MessageController::class, 'getMessage']);

Route::get('/searchUser', [MessageController::class, 'searchUser']);

Route::post('/conversations', [MessageController::class, 'createConversation']);

Route::get('/getConversations', [MessageController::class, 'getConversations']);

Route::delete('/deleteConversationCtnBased', [MessageController::class, 'deleteConversationCtnBased']);

Route::delete('/deleteConversationSearchBased', [MessageController::class, 'deleteConversationSearchBased']);


// seller
Route::post('/updateCourier', [UserController::class, 'courierUpdate']);

Route::post('/registerseller', [SellerController::class, 'store']);

Route::get('/sellerboard', [SellerController::class, 'sellerDashboard']);

Route::get('/sellermessage', [UserController::class, 'sellerMessage']);

Route::get('/sellernotification', [UserController::class, 'sellerNotification']);

Route::get('/systemfeedback', [UserController::class, 'feedback']);

Route::get('/listings', [ListingController::class, 'listings']);

Route::get('/profile', [SellerController::class, 'profile']);

Route::get('/courierprofile', [UserController::class, 'courierProfile']);

Route::get('/couriermessage', [UserController::class, 'courierMessage']);

Route::get('/couriernotification', [UserController::class, 'courierNotification']);

Route::get('/manageseller', [AdminController::class, 'manageSeller']);

Route::get('/reportedseller', [UserController::class, 'reportedSeller']);

Route::get('/booksrented', [UserController::class, 'booksRented']);

Route::get('/return', [UserController::class, 'manageReturn']);

Route::get('/shipment', [UserController::class, 'manageShipment']);

Route::get('/fullnameGetter', [MessageController::class, 'fullnameGetter']);

// book club routes, api's
Route::post('/createEvent', [BookClubController::class, 'createEvent']);

Route::post('/joinRequest', [BookClubController::class, 'joinRequest']);

Route::get('/joinRequestGetter', [BookClubController::class, 'joinRequestGetter']);

Route::get('/getEvents', [BookClubController::class, 'getEvents']);

// getUser para ha events na section para ig display hinu nag post
Route::get('/getUser', [BookClubController::class, 'getUser']);

Route::post('/addMember', [BookClubController::class, 'addMember']);

// API's
Route::get('/checkusername/{user}', [UserController::class, 'checkUsername']);

Route::get('/search/{item}', [UserController::class, 'searchItem']);

Route::get('/getaddress/{id}', [UserController::class, 'getAddress']);

Route::get('/getshipment/{id}', [UserController::class, 'getShipment']);

Route::get('/getuser/{id}', [UserController::class, 'getUser']);

Route::get('/getrating/{id}', [UserController::class, 'getRating']);

Route::post('/acceptshipment', [UserController::class, 'acceptShipment']);

Route::get('/completedShipping', [UserController::class, 'complete']);

Route::post('/ratepost', [UserController::class, 'ratePost']);

Route::post('/updaterate/{id}', [UserController::class, 'updateRate']);

Route::post('/sellerconfirm', [UserController::class, 'confirmOrder']);

Route::post('/booksellerconfirm', [SellerController::class, 'confirmOrder']);

Route::get('/getorderdetails/{id}', [UserController::class, 'getOrderDetails']);

Route::get('/viewshipping/{id}', [UserController::class, 'viewShipping']);

Route::get('/rentaltrackfetch/{id}', [SellerController::class, 'rentalTrackFetch']);

Route::post('/sellerpostrate', [UserController::class, 'sellerPostRate']);

Route::post('/sellerupdaterate', [UserController::class, 'sellerUpdateRate']);