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
use App\Http\Controllers\FrontendAboutController;
use App\Http\Controllers\FrontendAmenitiesController;
use App\Http\Controllers\FrontendBookingController;
use App\Http\Controllers\FrontendContactController;
use App\Http\Controllers\FrontendHomeController;
use App\Http\Controllers\FrontendLoginController;
use App\Http\Controllers\FrontendRoomController;
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
    Route::get('/dashboard', [FrontendHomeController::class, 'index'])->name('dashboard');
});


// Frontend STATTS //
##########################################################################################





// Frontend ENDS //
####################################################################################




// ADMIN SITE STATTS //
##########################################################################################

// Admin Dashboard



// ADMIN SITE ENDS //
####################################################################################