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
Route::resource('Login', 'App\Http\Controllers\LoginController');
Route::resource('Logout', 'App\Http\Controllers\LogoutController');

Route::resource('Register', 'App\Http\Controllers\RegisterController');

Route::resource('companies', 'App\Http\Controllers\CompanyContoller');

Route::GET('companies/{company}','App\Http\Controllers\CompanyContoller@edit')
->name('companies.edit');

Route::resource('Employees', 'App\Http\Controllers\EmployeeController');
