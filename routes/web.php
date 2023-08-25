<?php

use App\Http\Controllers\AdministradorAuthController;
use App\Http\Controllers\Auth\loginSuperAdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\HistorialController;
use App\Http\Controllers\TotalController;
use App\Http\Controllers\SuperAdminController;


Route::get('/', function () {
    return view('welcome');
});

//SuperAdmin
Route::get('administrador', [AdministradorAuthController::class, 'index'])->middleware(['admin.access'])->name('administrador');
Route::patch('administrador/{user}', [AdministradorAuthController::class, 'update'])->middleware(['admin.access'])->name('update.user');
// Rutas de navegación básicas
Route::get('/tienda', [CompraController::class, 'index'])->middleware(['auth', 'verified'])->name('tienda');


Route::get('/dashboard', [HistorialController::class, 'index'])->middleware(['premium.user'])->name('dashboard');
Route::get('/stock', [ProductoController::class, 'index'])->middleware(['auth', 'verified'])->name('stock');
Route::get('/proveedores', [ProveedorController::class, 'index'])->middleware(['premium.user'])->name('proveedores');

//Rutas a Controladores
Route::post('/tienda', [CompraController::class, 'store'])->name('compra.store');
Route::post('/stock/{tipo}', [ProductoController::class, 'store'])->name('productos.store');
Route::post('/proveedores/{tipo}', [ProveedorController::class, 'store'])->middleware(['premium.user'])->name('proveedor.store');

Route::patch('/stock/{producto}', [ProductoController::class, 'update'])->name('producto.edit');

Route::delete('/tienda/{compra}', [CompraController::class, 'destroy'])->name('compra.delete');
route::delete('/tienda', [CompraController::class, 'cobrarDestroy'])->name('cobro.delete');
Route::delete('stock/{producto}', [ProductoController::class, 'destroy'])->name('producto.delete');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
