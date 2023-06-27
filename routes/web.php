<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;



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
    return redirect(route('dashboard'));
});

Auth::routes();

//Route::resource('register', RegisterController::class);
//Route::resource('login', LoginController::class);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Route::get('/index', [HomeController::class, 'index'])->name('index');
//Route::get('/orders', [OrderController::class, 'index'])->name('orders');

Route::resource('order', OrderController::class); /*customerUpdate*/
Route::get('order/invoice/{id}', [OrderController::class, 'invoiceShow'])->name('invoiceShow');
Route::post('order/confirm/{id}', [OrderController::class, 'confirmCustomer'])->name('confirmCustomer');
Route::post('order/reject/{id}', [OrderController::class, 'rejectCustomer'])->name('rejectCustomer');


Route::resource('customer', CustomerController::class);
