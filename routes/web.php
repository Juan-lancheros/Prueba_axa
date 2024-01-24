<?php

use App\Http\Controllers\UsuarioController;
use App\Models\Usuario;
use Illuminate\Support\Facades\Route;

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

Route::resource('usuarios', 'App\Http\controllers\UsuarioController');
//Route::Get('usuarios','App\Http\controllers\UsuarioController/show1');
Route::get('/usuarios/{id}/show1',[UsuarioController::class, 'show1'])->name('usuarios.show1');