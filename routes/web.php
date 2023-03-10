<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'HomeController@redirect')->name('redirect');

Route::middleware(['auth'])->prefix('admin')->group(function (){

Route::get('/admin_dashboard', 'AdminDashboardController@admin')->name('admin');

Route::get('/all_users','UsersController@allUsers')->name('all.users');
Route::get('/delete_users/{id}', 'UsersController@deleteUsers')->name('delete.users');

Route::get('/product-cat', 'HomeController@create')->name('product_category');

});

Route::middleware(['auth' ])->prefix('user')->group(function () {
    Route::get('/', 'DashboardController@index')->name('user.dashboard');
});
