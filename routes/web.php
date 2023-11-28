<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DetailsprofileController;
use App\Http\Controllers\CreateitemController;
use App\Http\Controllers\BookingController;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['isAdmin'])->group(function(){



//  show users 
    Route::get('/tables', [DashboardController::class , "tables"]);
    // end show users
    // show all actions users orders items Admin User 
    Route::get('/Home', [DashboardController::class , "chart"]);
    // end  show all actions users orders items Admin User
    // show item 
    Route::get('/item', [DashboardController::class , "item"]);
    // end show item
    // show order
    Route::get('/orders', [DashboardController::class , "orders"]);
// end show order
    // create item -> menu
    Route::get('/createItem', [CreateitemController::class , "create"]);
    Route::post('/createItem', [CreateitemController::class , "handle_create"]);
    // end create item -> menu
    // contact 
    Route::get('/massage', [CreateitemController::class , "massage"]);
    Route::post('/massage', [CreateitemController::class , "handle_massage"]);
    Route::get('/massagedash', [CreateitemController::class , "showmassagedash"]);
    // end contact
    Route::get('bookings', [BookingController::class, 'index']);
    Route::post('bookings/{booking}/confirm', [BookingController::class, 'confirm']);
   Route::post('bookings/{booking}/reject', [BookingController::class, 'reject']);

//    delete && edit item  &&  user
    Route::get('/delete/{id}', [DashboardController::class , "delete"]);
    Route::get('/deletee/{id}', [DashboardController::class , "deleteUser"]);
    Route::get('/edit/{id}', [CreateitemController::class , 'edit'] );
    Route::put('/edit/{id}', [CreateitemController::class , 'handle_edit']);
// end    delete && edit item  &&  user
    
});





Route::get('/', [HomeController::class , "Home"]);
Route::get('/index', [HomeController::class , "index"]);
Route::get('/contact', [HomeController::class , "contact"]);
Route::get('/bookTable', [HomeController::class , "Book"]);
Route::get('/menu', [CreateitemController::class , "menu"]);
Route::get('/pages', [HomeController::class , "pages"]);
Route::get('/about', [HomeController::class , "about"]);
// login
Route::get('/sign-in', [SigninController::class , "signin"]);
Route::post('/sign-in', [SigninController::class , "handle_signin"]);
// end login
// register
Route::get('/sign-up', [SignupController::class , "signup"]);
Route::post('/sign-up', [SignupController::class , "handle_signup"]);
// end register
// logout
Route::get('/logout', [LogoutController::class , "logout"]);
// end logout
// book
Route::get('/book', [ProfileController::class , "book"])->name('book');
Route::post('/book', [ProfileController::class , "createBook"])->name('book');
// end book
// profile && request
Route::get('/profile/{id}', [ProfileController::class , "profile"]);
Route::get('/request/{id}', [DashboardController::class , 'request'] );
Route::put('/request/{id}', [DashboardController::class , 'handle_request']);
// edit profile code statment
Route::get('/editProfile/{id}', [DashboardController::class , 'editProfile'] );
// end edit profile
Route::put('/editProfile/{id}', [DashboardController::class , 'handle_editProfile']);
// end profile && request