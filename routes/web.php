<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\TotalController;

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
    return view('welcome');
});

// Rutas de navegación básicas
Route::get('/tienda', [CompraController::class, 'index'])->middleware(['auth', 'verified'])->name('tienda');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/stock', [ProductoController::class, 'index'])->middleware(['auth', 'verified'])->name('stock');
Route::get('/proveedores', [ProveedorController::class, 'index'])->middleware(['auth', 'verified'])->name('proveedores');

//Rutas a Controladores
Route::post('/tienda', [CompraController::class, 'store'])->name('compra.store');
Route::delete('/tienda/{compra}', [CompraController::class, 'destroy'])->name('compra.delete');
route::delete('/tienda', [CompraController::class, 'cobrarDestroy'])->name('cobro.delete');
Route::post('/stock', [ProductoController::class, 'store'])->name('productos.store');
Route::post('/proveedores', [ProveedorController::class, 'store'])->name('proveedor.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
