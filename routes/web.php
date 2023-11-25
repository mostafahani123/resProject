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

// dashboard
    Route::get('/dashboard', [DashboardController::class , "dashboard"]);
    Route::get('/billing', [DashboardController::class , "Dashhome"]);
    Route::get('/rtl', [DashboardController::class , "rtl"]);
    Route::get('/tables', [DashboardController::class , "tables"]);
    Route::get('/item', [DashboardController::class , "item"]);
    Route::get('/orders', [DashboardController::class , "orders"]);
    Route::get('/createItem', [CreateitemController::class , "create"]);
    Route::post('/createItem', [CreateitemController::class , "handle_create"]);
    Route::get('bookings', [BookingController::class, 'index']);
    Route::post('bookings/{booking}/confirm', [BookingController::class, 'confirm']);
   Route::post('bookings/{booking}/reject', [BookingController::class, 'reject']);
    Route::get('/delete/{id}', [DashboardController::class , "delete"]);
    Route::get('/deletee/{id}', [DashboardController::class , "deleteUser"]);
    Route::get('/edit/{id}', [CreateitemController::class , 'edit'] );
    Route::put('/edit/{id}', [CreateitemController::class , 'handle_edit']);
    Route::get('/editProfile/{id}', [DashboardController::class , 'editProfile'] );
    Route::put('/editProfile/{id}', [DashboardController::class , 'handle_editProfile']);
    
});





Route::get('/', [HomeController::class , "Home"]);
Route::get('/index', [HomeController::class , "index"]);
Route::get('/contact', [HomeController::class , "contact"]);
Route::get('/bookTable', [HomeController::class , "Book"]);
Route::get('/menu', [CreateitemController::class , "menu"]);
Route::get('/pages', [HomeController::class , "pages"]);
Route::get('/about', [HomeController::class , "about"]);
Route::get('/single-post', [HomeController::class , "singlepost"]);
Route::get('/sign-in', [SigninController::class , "signin"]);
Route::post('/sign-in', [SigninController::class , "handle_signin"]);
Route::get('/sign-up', [SignupController::class , "signup"]);
Route::get('/logout', [LogoutController::class , "logout"]);
Route::post('/sign-up', [SignupController::class , "handle_signup"]);
Route::get('/book', [ProfileController::class , "book"])->name('book');
Route::post('/book', [ProfileController::class , "createBook"])->name('book');
Route::get('/profile/{id}', [ProfileController::class , "profile"]);
