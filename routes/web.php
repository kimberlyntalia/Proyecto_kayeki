<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\PerfilController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ContactoController;
use App\Models\Contacto;

/*
|--------------------------------------------------------------------------
| RUTAS WEB
|--------------------------------------------------------------------------
*/

/* ---------- WEB PUBLICA ---------- */
Route::get('/', [WebController::class, 'index'])->name('web.index');
Route::get('/producto/{id}', [WebController::class, 'show'])->name('web.show');

Route::get('/acerca', function () {
    return view('web.pages.acerca');
})->name('acerca');

/* ---------- CONTACTANOS (PUBLICO) ---------- */
Route::get('/contactanos', function () {
    $contactos = Contacto::latest()->get();
    return view('web.pages.contactanos', compact('contactos'));
})->name('contactanos');

Route::post('/contacto', [ContactoController::class, 'guardar'])
    ->name('contacto.guardar');

/* ---------- CARRITO ---------- */
Route::get('/carrito', [CarritoController::class, 'mostrar'])->name('carrito.mostrar');
Route::post('/carrito/agregar', [CarritoController::class, 'agregar'])->name('carrito.agregar');
Route::get('/carrito/sumar', [CarritoController::class, 'sumar'])->name('carrito.sumar');
Route::get('/carrito/restar', [CarritoController::class, 'restar'])->name('carrito.restar');
Route::get('/carrito/eliminar/{id}', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');
Route::get('/carrito/vaciar', [CarritoController::class, 'vaciar'])->name('carrito.vaciar');

/* ---------- USUARIOS AUTENTICADOS ---------- */
Route::middleware(['auth'])->group(function () {

    /* USUARIOS */
    Route::resource('usuarios', UserController::class);

    // 🔴 ESTA ERA LA RUTA QUE FALTABA
    Route::patch(
        'usuarios/{usuario}/toggle',
        [UserController::class, 'toggleStatus']
    )->name('usuarios.toggle');

    /* ROLES Y PRODUCTOS */
    Route::resource('roles', RoleController::class);
    Route::resource('productos', ProductoController::class);

    /* PEDIDOS */
    Route::post('/pedido/realizar', [PedidoController::class, 'realizar'])
        ->name('pedido.realizar');
    Route::get('/perfil/pedidos', [PedidoController::class, 'index'])
        ->name('perfil.pedidos');
        

    /* DASHBOARD */
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    /* PERFIL */
    Route::get('/perfil', [PerfilController::class, 'edit'])->name('perfil.edit');
    Route::put('/perfil', [PerfilController::class, 'update'])->name('perfil.update');

    /* LOGOUT */
    Route::post('/logout', function () {
        auth()->logout();
        return redirect('/login');
    })->name('logout');
});

/* ---------- INVITADOS ---------- */
Route::middleware('guest')->group(function () {

    Route::get('/login', function () {
        return view('autenticacion.login');
    })->name('login');

    Route::post('/login', [AuthController::class, 'login'])->name('login.post');

    Route::get('/registro', [RegisterController::class, 'showRegistroForm'])->name('registro');
    Route::post('/registro', [RegisterController::class, 'registrar'])->name('registro.store');

    Route::get('/password/reset', [ResetPasswordController::class, 'showRequestForm'])
        ->name('password.request');
    Route::post('/password/email', [ResetPasswordController::class, 'sendResetLinkEmail'])
        ->name('password.send-link');
    Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])
        ->name('password.reset');
    Route::post('/password/reset', [ResetPasswordController::class, 'resetPassword'])
        ->name('password.update');
        
});

Route::delete('/contacto/{id}', [ContactoController::class, 'eliminar'])
    ->name('contacto.eliminar');

    Route::get('/perfil/pedidos', [PedidoController::class, 'index'])
    ->name('perfil.pedidos')
    ->middleware('auth');

