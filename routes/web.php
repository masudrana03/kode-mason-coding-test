<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopUpsController;
use App\Http\Controllers\TopTopupUsersController;

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

// Route::get('/home', function () {
//     return view('layouts.app');
// });
Route::get('/hello',[TopUpsController::class, 'index']);


Route::get('/top-top-up-user',[TopTopupUsersController::class, 'index'])->name('top.topUp');

// User routes Search
Route::get( '/user-search', [TopTopupUsersController::class, 'search'] )->name( 'user.search' );






Route::get('/home', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::get('/previous-day-top-10-top-topup-user',[TopTopupUsersController::class, 'yesterdayTopTopUpUsers'])->name('yesterdayTopTopUpUsers');