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

Route::get('accounting', [HomeController::class, 'accounting'])->name('accounting');
Route::get('itr-filing', [HomeController::class, 'itrFiling'])->name('itr-filing');
Route::get('tds-tcs-return', [HomeController::class, 'tdsTcsReturn'])->name('tds-tcs-return');
Route::get('iec-registration', [HomeController::class, 'iecRegistration'])->name('iec-registration');
Route::get('esic-registration', [HomeController::class, 'esicRegistration'])->name('esic-registration');
Route::get('epf-registration', [HomeController::class, 'epfRegistration'])->name('epf-registration');
Route::get('msme-registration', [HomeController::class, 'msmeRegistration'])->name('msme-registration');
Route::get('gst-registration', [HomeController::class, 'gstRegistration'])->name('gst-registration');
Route::get('payroll-management', [HomeController::class, 'payrollManagement'])->name('payroll-management');

Route::post('send-enquery', [HomeController::class, 'sendEnquery'])->name('send-enquery');