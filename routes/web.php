<?php

use App\Http\Controllers\admin\AdminContoller;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\AppointmentController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\DetailController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\PriceController;
use App\Http\Controllers\frontend\SearchController;
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Controllers\frontend\TeamController;
use App\Http\Controllers\frontend\TestimonialController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// Frontend STATTS //
##########################################################################################


// Home Route
Route::get('/frontendpage', [ HomeController::class, 'index'])->name('frontend.index');

// About Route
Route::get('/frontendpage', [ AboutController::class, 'about'])->name('frontend.about');

// Contact Route
Route::get('/frontendpage', [ ContactController::class, 'contact'])->name('frontend.contact');

// Appointment Route
Route::get('/frontendpage', [ AppointmentController::class, 'appointment'])->name('frontend.appointment');

// Blog Route
Route::get('/frontendpage', [ BlogController::class, 'blog'])->name('frontend.blog');

// Detail Route
Route::get('/frontendpage', [ DetailController::class, 'detail'])->name('frontend.detail');

// Price Route
Route::get('/frontendpage', [ PriceController::class, 'price'])->name('frontend.price');

// Search Route
Route::get('/frontendpage', [ SearchController::class, 'search'])->name('frontend.search');

// Service Route
Route::get('/frontendpage', [ ServiceController::class, 'service'])->name('frontend.service');

// Team Route
Route::get('/frontendpage', [ TeamController::class, 'team'])->name('frontend.team');

// Testimonial Route
Route::get('/frontendpage', [ TestimonialController::class, 'testimonial'])->name('frontend.testimonial');







// Frontend ENDS //
####################################################################################




// ADMIN SITE STATTS //
##########################################################################################


Route::get('/adminpage', [AdminContoller::class, 'index']);


// ADMIN SITE ENDS //
####################################################################################