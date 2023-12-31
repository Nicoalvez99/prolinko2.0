<?php

use App\Http\Controllers\AdministradorAuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\HistorialController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContadorController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/plan', function () {
    return view('plan');
})->name('plan');
Route::get('contadores', function() {
    return view('contadores');
})->name('contadores');
//SuperAdmin
Route::get('administrador', [AdministradorAuthController::class, 'index'])->middleware(['admin.access'])->name('administrador');
Route::patch('administrador/{user}', [AdministradorAuthController::class, 'update'])->middleware(['admin.access'])->name('update.user');
Route::delete('administrador/{user}', [AdministradorAuthController::class, 'destroy'])->middleware(['admin.access'])->name('destroy.user');
// RUTAS DE NAVEGACION BÁSICAS

// Rutas para Contador
Route::get('/contador', [ContadorController::class, 'index'])->middleware('contador.user')->name('contador');
Route::get('clientes', [ContadorController::class, 'clientes'])->middleware('contador.user')->name('clientes');
Route::get('clientes/{cliente}', [ContadorController::class, 'obtenerCliente'])->middleware('contador.user')->name('cliente');
//Rutas para Tienda
Route::get('/tienda', [CompraController::class, 'index'])
    ->middleware(['auth', 'verified', 'tienda.user'])
    ->name('tienda');

Route::get('/notification', [NotificationController::class, 'getNotification']);
Route::get('/dashboard', [HistorialController::class, 'index'])->middleware(['premium.user', 'tienda.user'])->name('dashboard');
Route::get('/stock', [ProductoController::class, 'index'])->middleware(['auth', 'verified', 'tienda.user'])->name('stock');
Route::get('/proveedores', [ProveedorController::class, 'index'])->middleware(['premium.user', 'tienda.user'])->name('proveedores');

//Rutas a Controladores
Route::post('/tienda', [ContadorController::class, 'create'])->name('notification.accept');
Route::post('/dashboard', [HistorialController::class, 'pdf'])->middleware(['premium.user'])->name('dashboard.pdf');
Route::post('/tienda/{tipo}', [CompraController::class, 'store'])->name('compra.store');
Route::post('/stock/{tipo}', [ProductoController::class, 'store'])->name('productos.store');
Route::post('/proveedores/{tipo}', [ProveedorController::class, 'store'])->middleware(['premium.user'])->name('proveedor.store');
Route::post('contador', [ContadorController::class, 'store'])->middleware('contador.user')->name('contador.store');
Route::patch('/stock/{producto}', [ProductoController::class, 'update'])->name('producto.edit');

//Route::delete('/tienda', [NotificationController::class, 'destroy'])->name('notification');
Route::delete('/dashboard', [HistorialController::class, 'destroy'])->name('historial.semana.delete');
Route::delete('/tienda/{compra}', [CompraController::class, 'destroy'])->name('compra.delete');
Route::delete('/tienda', [CompraController::class, 'cobrarDestroy'])->name('cobro.delete');
Route::delete('stock/{producto}', [ProductoController::class, 'destroy'])->name('producto.delete');

Route::middleware('auth')->group(function () {
    Route::get('/configuracion', [UserController::class, 'index'])->name('config.user');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('configuracion', [UserController::class, 'update'])->name('config.update');
    Route::patch('/profile', [UserController::class, 'update'])->name('profile.tipo');
    Route::patch('/profile/{tipo}', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
