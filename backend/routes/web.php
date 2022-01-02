<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
//トップページ(companies)
Route::group(['middleware' => ['guest']],function() {

Route::GET('/login','App\Http\Controllers\LoginController@login')
->name('login');
Route::POST('/login','App\Http\Controllers\LoginController@login_submit')
->name('login_submit');

Route::GET('/register','App\Http\Controllers\RegisterController@register')
->name('register');
Route::POST('/register','App\Http\Controllers\RegisterController@register_submit')
->name('register_submit');

Route::GET('/added','App\Http\Controllers\RegisterController@register_added')
->name('register_added');

});

Route::group(['middleware' => ['auth']],function() {

Route::GET('/Logout', 'App\Http\Controllers\LoginController@logout')
->name('logout');

Route::resource('User', 'App\Http\Controllers\UserController');

Route::resource('companies', 'App\Http\Controllers\CompanyContoller');

Route::resource('Employees', 'App\Http\Controllers\EmployeeController');

});
