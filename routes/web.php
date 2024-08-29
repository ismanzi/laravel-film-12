<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\{
    FilmController,
    AuthController,
     
};

Route::get('/', [FilmController::class, 'movieHome'])->name ('home');
Route::get('/movies', [FilmController::class, 'movies'])->name('movies');
Route::get('/movies/{film}', [FilmController::class, 'show'])->name('movies.show');
Route::get('/movies/genre/{genre}', [FilmController::class, 'moviesByGenre'])->name('genre');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logut'])->name('logout');
Route::controller(RegisterController::class)->group(function () {
Route::get('/register', 'create')->name('register.create');
Route::post('/register', 'store')->name('register.store');
});