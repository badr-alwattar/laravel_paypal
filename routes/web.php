<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\MailController;
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

Route::post('charge', [PaymentController::class, 'charge']);
Route::get('paymentsuccess', [PaymentController::class, 'payment_success']);
Route::get('paymenterror', [PaymentController::class, 'payment_error']);

Route::get('/send-email', [MailController::class, 'sendEmail']);