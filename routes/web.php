<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\JetskiController;
use App\Http\Controllers\Admin\JetskiUserController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\UserController as ClientUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

/*PAGOS*/





Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/billing-portal', function (Request $request) {
        return $request->user()->redirectToBillingPortal();
    });
    Route::get('/pago3', function (Request $request) {
        return $request->user()
            ->newSubscription('default', 'price_monthly')
            ->checkout();
    });
     
    Route::get('/pago2', function (Request $request) {
    return $request->user()->checkoutCharge(1200, 'T-Shirt', 5);
    });
    Route::get('/pago', function (Request $request) {
        return $request->user()->checkout(config('stripe.price_id'));
    });
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/jetskis', JetskiController::class);
    Route::resource('/jetskisUsers', JetskiUserController::class);
    Route::resource('/users', UserController::class);
    // Route::resource('/menus', MenuController::class);
    // Route::resource('/tables', TableController::class);
    // Route::resource('/reservations', ReservationController::class);
});


Route::middleware(['auth', 'client'])->name('client.')->prefix('client')->group(function () {
    Route::get('/', [ClientController::class, 'index'])->name('index');
    Route::resource('/users', ClientUserController::class);
    // Route::resource('/menus', MenuController::class);
    // Route::resource('/tables', TableController::class);
    // Route::resource('/reservations', ReservationController::class);
});

require __DIR__.'/auth.php';
