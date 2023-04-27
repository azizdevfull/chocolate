<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ChocolateController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\AboutController;
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
Route::get('/main', function () {
    return view('layout.main');
});

Route::get('/', function () {
    return view('layout.index');
});

Route::get('/index', function () {
    return view('layout.index');
});

// Route::get('/about', function () {
//     return view('layout.about');
// });
Route::get('/contact', function () {
    return view('layout.contact');
});
// Route::get('/chocolate', function () {
//     return view('layout.chocolate');
// });
// Route::get('/testimonial', function () {
//     return view('layout.testimonial');
// });
Route::get('/about', [AboutController::class, "about"]);
Route::get('/chocolate', [ChocolateController::class, "chocolate"]);

Route::get('/testimonial', [TestimonialController::class, "testimonial"]);

