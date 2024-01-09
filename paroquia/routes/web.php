<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\Aniversariante\aniversarianteController;
use App\Http\Controllers\ministerioController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

// ROUTA PARA USUARIOS
    Route::get('/User/show', [userController::class, 'index'])->name('User.show'); 
    Route::get('/User/{user}/edit', [userController::class, 'edit'])->name('users.edit');
    Route::put('/User/{user}/update', [userController::class, 'update'])->name('users.update');
    Route::delete('/User/{user}', [userController::class, 'destroy'])->name('users.destroy');

//ROUTAS PARA ADMINISTRADOR
    Route::get('/Admin/aniversariante_all', [adminController::class,'index'])->name('Admin.index');
    Route::get('/Admin/{aniversariante}/edit', [adminController::class, 'edit'])->name('Admin.edit');
    Route::put('/Admin/{aniversariante}/update', [adminController::class, 'update'])->name('Admin.update');
    Route::delete('/Admin/{aniversariante}', [adminController::class, 'destroy'])->name('Admin.destroy');
    
// ROUTA PARA ANIVERSARIANTES
    // Route::get('/Aniversariantes/create',[aniversarianteController::class,'create'])->name('aniversariantes.create');
    // Route::post('/Aniversariantes',[aniversarianteController::class,'store'])->name('aniversariantes.store');
    // Route::get('/Aniversariantes/show', [aniversarianteController::class, 'show']);
    // Route::delete('/Aniversariantes/{id}', [aniversarianteController::class, 'destroy']);
    // Route::get('/Aniversariantes/edit/{id}', [aniversarianteController::class, 'edit']);
    // Route::put('/Aniversariantes/update/{id}', [aniversarianteController::class, 'update'])->name('aniversariante.update');
 /* USANDO RESOURCE PARA CRUD COMPLETO */
    Route::resource('Aniversariantes', aniversarianteController::class);

// ROUTA PARA MINISTÉRIOS

Route::get('/Ministerios/create', [ministerioController::class,'create'])->name('ministerio.create');
});



