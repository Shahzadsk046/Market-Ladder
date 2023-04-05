<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PerformanceController;
use App\Http\Controllers\FounderController;
use App\Http\Controllers\CurrentStockTradesController;
use App\Http\Controllers\CurrentETFTradesController;
use App\Http\Controllers\LadderPostController;
use App\Http\Controllers\TakingTradesController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\DisclaimersController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CompoundController;
use App\Http\Controllers\WhatAreETFsController;
use App\Http\Controllers\SwingTradingETFController;
use App\Http\Controllers\JoinNowController;
use App\Http\Controllers\MonthlyMembershipController;
use App\Http\Controllers\AnnualMembershipController;
use App\Http\Controllers\TrialMembershipController;

// Admin Controllers
use App\Http\Controllers\AdminController;

// Admin Blocks Controller
use App\Http\Controllers\AdminBlocksController;
use App\Http\Controllers\NewAreaBlocksController;

// Admin Files Controller
use App\Http\Controllers\AdminFilesController;

// Admin Pages Controller
use App\Http\Controllers\AdminPagesController;
// use App\Http\Controllers\DefaultPageTypeController;
use App\Http\Controllers\InternalPageTypeController;
use App\Http\Controllers\StaticPageTypeController;

// Admin Navigations Controller
use App\Http\Controllers\AdminNavigationsController;
// use App\Http\Controllers\EditNavigationsController;

// Admin Users Controller
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\NewUserController;

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

// Route::view('/swing-trading/compounding-magic','compounding-magic')->name('compounding-magic');
// Route::view('/swing-trading/swing-trading-with-stocks','swing-trading-with-stocks')->name('swing-trading-with-stocks');
// Route::view('/swing-trading/swing-trading-with-etf','swing-trading-with-etf')->name('swing-trading-with-etf');
// Route::view('/about/about','about')->name('about');
// Route::view('/about/performance','performance')->name('performance');
// Route::view('/about/about-founder','about-founder')->name('about-founder');
// Route::view('/fyi/faq','faq')->name('faq');
// Route::view('/fyi/terms','terms')->name('terms');
// Route::view('/fyi/privacy-policy','privacy-policy')->name('privacy-policy');
// Route::view('/fyi/contact','contact')->name('contact');
// Route::view('/fyi/disclaimers','disclaimers')->name('disclaimers');
// Route::view('/member/post','post')->name('post');
// Route::view('/member/taking-trades','taking-trades')->name('taking-trades');
// Route::view('/member/current-stock','current-stock')->name('current-stock');
// Route::view('/member/current-etf','current-etf')->name('current-etf');
Route::view('/login','auth/login')->name('login');
// Route::view('/join-now','join-now')->name('join-now');
Route::view('/profile','profile')->name('profile');
Auth::routes();


// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/house', [HouseController::class, 'index'])->name('house');
Route::get('/about/about', [AboutController::class, 'index'])->name('about');
Route::get('/about/performance', [PerformanceController::class, 'index'])->name('performance');
Route::get('/about/about-founder', [FounderController::class, 'index'])->name('about-founder');
Route::get('/swing-trading/compounding-magic', [CompoundController::class, 'index'])->name('compounding-magic');
Route::get('/swing-trading-etf', [SwingTradingETFController::class, 'index'])->name('swing-trading-with-etf');
Route::get('/what-are-etfs', [WhatAreETFsController::class, 'index'])->name('what-are-etf');
Route::get('/fyi/faq', [FAQController::class, 'index'])->name('faq');
Route::get('/fyi/contact', [ContactUsController::class, 'index'])->name('contact');
Route::get('/fyi/disclaimers', [DisclaimersController::class, 'index'])->name('disclaimers');
Route::get('/fyi/terms', [TermsController::class, 'index'])->name('terms');
Route::get('/fyi/privacy-policy', [PrivacyController::class, 'index'])->name('privacy-policy');
Route::get('/member/current-stock', [CurrentStockTradesController::class, 'index'])->name('current-stock');
Route::get('/member/current-etf', [CurrentETFTradesController::class, 'index'])->name('current-etf');
Route::get('/member/post', [LadderPostController::class, 'index'])->name('post');
Route::get('/member/taking-trades', [TakingTradesController::class, 'index'])->name('taking-trades');
Route::get('/join-now', [JoinNowController::class, 'index'])->name('join-now');
Route::get('/monthly-signup', [MonthlyMembershipController::class, 'index'])->name('monthly-signup');
Route::get('/annual-signup', [AnnualMembershipController::class, 'index'])->name('annual-signup');
Route::get('/trial-signup', [TrialMembershipController::class, 'index'])->name('trial-signup');

// ADMIN ROUTES
Route::get('/', [AdminController::class, 'index'])->name('admin');

// Blocks Routes
Route::get('/blocks', [AdminBlocksController::class, 'index'])->name('blocks');
Route::get('/blocks/edit/{id}', [AdminBlocksController::class, 'edit'])->name('edit-blocks');
Route::put('/blocks/update_block', [AdminBlocksController::class, 'update'])->name('update-block');
Route::get('/blocks/view/{slug}', [AdminBlocksController::class, 'show'])->name('view-blocks');
Route::post('/blocks/save_block', [AdminBlocksController::class, 'create'])->name('save-block');
Route::get('/blocks/new-area', [NewAreaBlocksController::class, 'index'])->name('new-area');
Route::post('/blocks/delete_block', [AdminBlocksController::class, 'destroy'])->name('delete-block');

// Files Routes
Route::get('/files', [AdminFilesController::class, 'index'])->name('files');

// Pages Routes
Route::get('/pages', [AdminPagesController::class, 'index'])->name('pages');
Route::post('/pages/save_default', [AdminPagesController::class, 'createDefault'])->name('save_default_page');
Route::get('/pages/default_page', [AdminPagesController::class, 'defaultIndex'])->name('default_page');
Route::get('/pages/edit_default_page', [AdminPagesController::class, 'defaultEdit'])->name('edit_default_page');
Route::post('/pages/save_internal', [AdminPagesController::class, 'createInternal'])->name('save_internal_page');
Route::get('/pages/internal_page', [AdminPagesController::class, 'internalIndex'])->name('internal_page');
Route::get('/pages/edit_internal_page', [AdminPagesController::class, 'internalEdit'])->name('edit_internal_page');
Route::post('/pages/save_static', [AdminPagesController::class, 'createStatic'])->name('save_static_page');
Route::get('/pages/static_page', [AdminPagesController::class, 'staticIndex'])->name('static_page');
Route::get('/pages/edit_static_page', [AdminPagesController::class, 'staticEdit'])->name('edit_static_page');

// Navigations Routes
Route::get('/navigations', [AdminNavigationsController::class, 'index'])->name('navigations');
// Route::resource('navigations', AdminNavigationsController::class);
Route::get('/navigations/edit/{id}', [AdminNavigationsController::class, 'edit'])->name('edit-navigations');

// Users Routes
Route::get('/users', [AdminUsersController::class, 'index'])->name('users');
Route::get('/users/new_user', [NewUserController::class, 'index'])->name('new_user');

