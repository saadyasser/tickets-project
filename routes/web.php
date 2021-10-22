<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\UsersController;
use App\Models\Customer;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/time', function () {
    return Carbon::now();
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('tickets', TicketsController::class);

Route::put('/users/status/{id}', [UsersController::class, 'changeStatus'])->name('users.status');

Route::get('/home', [HomeController::class, 'index']);

Route::get('get-num', function () {
    $ticket = Cookie::get('ticket-customer');
    return unserialize($ticket)->id;
});

require __DIR__ . '/auth.php';