<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
Route::get('testimonials', [HomeController::class, 'testimonials'])->name('testimonials');