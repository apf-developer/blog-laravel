<?php

use App\Http\Controllers\AutenticaSesionController;
use App\Http\Controllers\Auth\RegistroUsuarioController;
use App\Http\Controllers\PostController;
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



// proyecto1.test/ => welcome
// proyecto1.test/contacto => contact
// proyecto1.test/blog => blog
// proyecto1.test/about => about

Route::view('/', 'welcome')->name('inicio');

Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
Route::get('/blog/crear', [PostController::class, 'create'])->name('posts.create');
Route::post('/blog', [PostController::class, 'store'])->name('posts.store');
Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::patch('/blog/{post}/update', [PostController::class, 'update'])->name('posts.update');
Route::delete('/blog/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::view('/about', 'about')->name('about');
Route::view('/contacto', 'contact')->name('contacto');

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AutenticaSesionController::class, 'store']);
Route::post('/logout', [AutenticaSesionController::class, 'destroy'])->name('logout');

Route::view('/registrarme', 'auth.registrarme')->name('registrarme');
Route::post('/registrarme', [RegistroUsuarioController::class, 'store'])->name('registrarme');
