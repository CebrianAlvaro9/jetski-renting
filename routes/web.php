<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CancellationController;
use App\Http\Controllers\Admin\JetskiController;
use App\Http\Controllers\Admin\JetskiUserController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\JetskiUserController as ClientJetskiUserController;
use App\Http\Controllers\Client\UserController as ClientUserController;
use App\Http\Controllers\Frontend\Welcome;
use App\Http\Controllers\Frontend\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\Cancellation;
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

Route::resource('/welcome', WelcomeController::class);

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
   
    // Route::get('/pago/{price_id}', function (Request $request,$price_id) {
    //     return $request->user()->checkout($price_id);
    // })->name('pago');

    Route::get('/pago', function (Request $request) {
        $price_id = $request->query('price_id');
        return $request->user()->checkout($price_id);
    })->name('pago');


    // Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/home', [ClientJetskiUserController::class, 'pago'])->name('home');
    Route::get('/disponibilidad', [ClientJetskiUserController::class, 'index'])->name('disponibilidad');
    Route::post('/disponibilidad-moto', [ClientJetskiUserController::class, 'disponibilidad'])->name('disponibilidad-moto');
    Route::put('/seleccion-moto', [ClientJetskiUserController::class, 'seleccion'])->name('seleccion-moto');
    Route::put('cancel/{id}', [ClientJetskiUserController::class, 'cancellation'])->name('cancel');

    
});

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/jetskis', JetskiController::class);
    Route::resource('/jetskisUsers', JetskiUserController::class);
    Route::resource('/cancellations', CancellationController::class);
    Route::resource('/users', UserController::class);
    Route::post('/prueba', [UserController::class, 'prueba'])->name('prueba');
    Route::post('/cambio-fecha/{id}', [JetskiUserController::class, 'cambio'])->name('cambio-fecha');
    Route::get('/modificar/{id}', [JetskiUserController::class, 'modificar'])->name('modificar');

    Route::post('/disponibilidad-admin', [JetskiUserController::class, 'disponibilidad'])->name('disponibilidad-admin');
    // Route::resource('/menus', MenuController::class);
    // Route::resource('/tables', TableController::class);
    // Route::resource('/reservations', ReservationController::class);
});


Route::middleware(['auth', 'client'])->name('client.')->prefix('client')->group(function () {
    Route::get('/', [ClientController::class, 'index'])->name('index');
    Route::resource('/users', ClientUserController::class);
    Route::resource('/jetskisUsers', ClientJetskiUserController::class);
   

    // Route::resource('/menus', MenuController::class);
    // Route::resource('/tables', TableController::class);
    // Route::resource('/reservations', ReservationController::class);
});

require __DIR__.'/auth.php';
