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

Route::get('/', function () {
    return view('login');
});

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('/ceksaldo', 'App\Http\Controllers\HomeController@saldoshow')->name('ceksaldo');
//Route::get('/profile', 'ProfileController@show')->name('profile');














// Route::get('/', function () {
//     return view('welcome');
// });

// Route::group(['middleware' => 'guest'], function () {
//     Route::get('/login', 'App\Http\Controllers\LoginController@showLoginForm')->name('login');
//     Route::post('/login', 'App\Http\Controllers\LoginController@login');
    
//     Route::get('/home', function () {
//     return view('home');
//     });
//     Route::get('/saldo', function () {
//     return view('saldo');
//     });
// });
// // Route::get('/login', function () {
// //     return view('login');
// // });


