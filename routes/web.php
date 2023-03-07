<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
Route::get('/product-cat', 'HomeController@create')->name('product_category');



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'HomeController@redirect')->name('redirect');

Route::middleware(['auth'])->prefix('admin')->group(function (){

    // ADMIN ROUTE STARTS HERE

Route::get('/admin-dashboard', 'AdminDashboardController@admin')->name('admin');
// ADMIN ROUTE ENDS HERE
});

Route::middleware(['auth' ])->prefix('user')->group(function () {
    Route::get('/', 'DashboardController@index')->name('user.dashboard');
});
