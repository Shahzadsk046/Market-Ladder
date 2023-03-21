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
//     return view('home');
// });

Route::view('/compounding-magic','compounding-magic')->name('compounding-magic');
Route::view('/swing-trading-with-stocks','swing-trading-with-stocks')->name('swing-trading-with-stocks');
Route::view('/swing-trading-with-etf','swing-trading-with-etf')->name('swing-trading-with-etf');
Route::view('/about','about')->name('about');
Route::view('/performance','performance')->name('performance');
Route::view('/about-founder','about-founder')->name('about-founder');
Route::view('/faq','faq')->name('faq');
Route::view('/terms','terms')->name('terms');
Route::view('/privacy-policy','privacy-policy')->name('privacy-policy');
Route::view('/contact','contact')->name('contact');
Route::view('/disclaimers','disclaimers')->name('disclaimers');
Route::view('/post','post')->name('post');
Route::view('/taking-trades','taking-trades')->name('taking-trades');
Route::view('/current-stock','current-stock')->name('current-stock');
Route::view('/current-etf','current-etf')->name('current-etf');
Route::view('/login','auth/login')->name('login');
Route::view('/register','auth/register')->name('register');
Route::view('/join-now','join-now')->name('join-now');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
