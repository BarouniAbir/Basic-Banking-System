<?php

use Illuminate\Support\Facades\Route;
use App\Models\Customers;

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

/*
    / == home
*/

Route::get('show/{id}', 'cutsController@show');
Route::resource('home', 'CustomersController');
Route::resource('customersTable', 'cutsController');

Route::post('/send', 'TransferMoneyController@handleTransfer') //camelCase
    ->name('money.sending');
