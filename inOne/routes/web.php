<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ExcellController;
use App\Models\Contact;

//HomePage formulario de login para ingresar en la aplicación
Route::get('/', function () {
    return view('auth.login');
});

//CRUD de usuarios
Route::resource('/users', UsersController::class);

//CRUD de contactos
Route::resource('/contacts', ContactsController::class);

//Ruta para descargar los contactos en formato xlsx
Route::get('/export/contacts', [App\Http\Controllers\ExcellController::class, 'ContactExport']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
