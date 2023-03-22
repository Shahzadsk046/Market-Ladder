<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

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

Route::view('/swing-trading/compounding-magic','compounding-magic')->name('compounding-magic');
Route::view('/swing-trading/swing-trading-with-stocks','swing-trading-with-stocks')->name('swing-trading-with-stocks');
Route::view('/swing-trading/swing-trading-with-etf','swing-trading-with-etf')->name('swing-trading-with-etf');
Route::view('/about/about','about')->name('about');
Route::view('/about/performance','performance')->name('performance');
Route::view('/about/about-founder','about-founder')->name('about-founder');
Route::view('/fyi/faq','faq')->name('faq');
Route::view('/fyi/terms','terms')->name('terms');
Route::view('/fyi/privacy-policy','privacy-policy')->name('privacy-policy');
Route::view('/fyi/contact','contact')->name('contact');
Route::view('/fyi/disclaimers','disclaimers')->name('disclaimers');
Route::view('/member/post','post')->name('post');
Route::view('/member/taking-trades','taking-trades')->name('taking-trades');
Route::view('/member/current-stock','current-stock')->name('current-stock');
Route::view('/member/current-etf','current-etf')->name('current-etf');
Route::view('/login','auth/login')->name('login');
Route::view('/register','auth/register')->name('register');
Route::view('/join-now','join-now')->name('join-now');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about/about', [AboutController::class, 'index'])->name('about');
