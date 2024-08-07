<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\Aniversariante\aniversarianteController;
use App\Http\Controllers\Contact\contactController;
use App\Http\Controllers\Inbox\notifyAvisosController;
use App\Http\Controllers\Ministerio\adminMinisterioController;
use App\Http\Controllers\userController;
use App\Http\Controllers\userMinisterioController;
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
    Route::get('/Admin/show', [adminController::class, 'show'])->name('Admin.show');

    Route::get('/Admin/ministerios/print',[adminController::class, 'printMinisterios'])->name('adminministerios.print');





    
// ROUTA PARA ANIVERSARIANTES
    // Route::get('/Aniversariantes/create',[aniversarianteController::class,'create'])->name('aniversariantes.create');
    // Route::post('/Aniversariantes',[aniversarianteController::class,'store'])->name('aniversariantes.store');
    // Route::get('/Aniversariantes/show', [aniversarianteController::class, 'show']);
    // Route::delete('/Aniversariantes/{id}', [aniversarianteController::class, 'destroy']);
    Route::get('/Aniversariantes/edit/{id}', [aniversarianteController::class, 'edit']);
    Route::put('/Aniversariantes/update/{id}', [aniversarianteController::class, 'update'])->name('aniversariante.update');
 /* USANDO RESOURCE PARA CRUD COMPLETO */
    Route::resource('Aniversariantes', aniversarianteController::class);

// ROUTA PARA MINISTÉRIOS
    Route::get('/Ministerios/addMinisterios', [adminMinisterioController::class, 'create'])->name('adminministerios.create');
    Route::post('Ministerios/addMinisterio', [adminMinisterioController::class, 'store'])->name('adminministerios.store');
    Route::get('/Ministerios/listaMinisterio', [adminMinisterioController::class, 'index'])->name('adminministerios.index');
    Route::delete('/Ministerios/{id}', [adminMinisterioController::class, 'destroy'])->name('adminministerios.destroy');
    Route::get('/Ministerios/{id}/editarMinisterios', [adminMinisterioController::class, 'edit'])->name('adminministerios.edit');
    Route::put('/Ministerios/{id}/update', [adminMinisterioController::class, 'update'])->name('adminministerios.update');
    Route::get('/Ministerios/showMinisterios', [adminMinisterioController::class, 'show'])->name('adminministerios.show');

  


    /* User Ministerios */
      Route::get('Ministerios/RegistarUser', [userMinisterioController::class, 'create'])->name('ministerio.createUser');
      Route::post('Ministerios/RegistarUser', [userMinisterioController::class, 'store'])->name('ministerio.storeUser');
      Route::get('/Ministerios/user/show', [userMinisterioController::class, 'show'])->name('ministerio.show');
      Route::get('/Ministerios/user/{id}/edit', [userMinisterioController::class, 'edit'])->name('ministerio.edit');
      Route::put('/Ministerios/user/{id}/update', [userMinisterioController::class, 'update'])->name('ministerio.update');
 
    /* Conctat Us */
    Route::get('/Contact/send-email',[contactController::class, 'create'])->name('contact.create'); 
      /*MAIL*/
    Route::post('/Contact/send-email', [contactController::class, 'store'])->name('contact.sendEmail');

//   Inbox
        Route::get('/Inbox/read',[notifyAvisosController::class, 'index'])->name('inbox.read'); 
        Route::get('/Inbox/create',[notifyAvisosController::class, 'create'])->name('inbox.create'); 
        Route::post('/Inbox/create',[notifyAvisosController::class, 'store'])->name('inbox.store');
// MARCAR COMO LIDO
Route::get('/notifications/{id}/mark-as-read', [notifyAvisosController::class, 'markAsRead'])->name('notifications.markAsRead');
Route::get('/notifications/allRead', [notifyAvisosController::class, 'allRead'])->name('notifications.allRead');


// grafico 
Route::get('/statistics', [userController::class, 'showStatistics']);

    

        
});



 