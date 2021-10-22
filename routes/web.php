<?php
use App\Mail\ReserveForm;
use App\Mail\SubscribeMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\RubenController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MenuListController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RubenReviewController;
use App\Http\Controllers\DownloadFileController;

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
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/rooms', function () {
    return view('rooms');
});
Route::get('/facilities', function () {
    return view('facilities');
});
Route::get('/ruben', [RubenController::class, 'viewRuben']);


Route::get('/reservation', [ReservationController::class, 'create']);
Route::post('/reserving', [ReservationController::class, 'sendEmail'])->name('send.email');


Route::get('/menus', [MenuListController::class, 'index']);
Route::resource('/menus', MenuListController::class);
Route::get('/create', [MenuListController::class, 'create']);
Route::post('/create', [MenuListController::class, 'store'])->name('products.store');


Route::post('/subscribe', [FooterController::class, 'create']);
Route::post('/subscribe', [FooterController::class, 'store_send'])->name('send.subs');

Route::get('/file-download', [DownloadFileController::class, 'index'])->name('file.download.index');
Route::get('/rub-review', [RubenReviewController::class, 'index']);

// Route::get('/subscribing', function () {
//     Mail::to('gamingsteezy0@gmail.com')->send(new SubscribeMail());
// });

// Route::get('/res', function () {
//     return new ReserveForm();
// });
// Route::get('/res', function () {
//     return view('email-template');
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
