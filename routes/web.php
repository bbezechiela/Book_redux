<?php

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

Route::get('/signup', [UserController::class, 'signup']);

Route::get('/sidebar', [UserController::class, 'sidebar']);

Route::get('/home', [UserController::class, 'home'])->name('home');

Route::get('/wishlist', [UserController::class, 'wishlist']);

Route::get('/mylist', [UserController::class, 'myList']);

Route::post('/register', [UserController::class, 'store']);
