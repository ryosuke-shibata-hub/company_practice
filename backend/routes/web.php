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
Route::GET('/login','App\Http\Controllers\LoginController@login')
->name('login');
Route::POST('/login','App\Http\Controllers\LoginController@login_submit')
->name('login_submit');

Route::GET('register','App\Http\Controllers\RegisterController@register')
->name('register');
Route::POST('/register','App\Http\Controllers\RegisterController@registerForm')
->name('register_submit');


Route::resource('Logout', 'App\Http\Controllers\LoginController');

Route::resource('companies', 'App\Http\Controllers\CompanyContoller');

Route::resource('Employees', 'App\Http\Controllers\EmployeeController');
