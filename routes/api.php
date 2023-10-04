<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\HttpApi\LoginController;
use App\HttpApi\RegisterController;
use App\Http\Api\LogoutController;
use App\Http\HomeController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 Route::namespace('api')->group(function () {
    Route::post('/register', 'RegisterController')->name('register');
    Route::post('/login', 'LoginController')->name('login');
    Route::post('/logout', 'LogoutController')->name('logout');
});