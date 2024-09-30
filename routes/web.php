<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [BookController::class, 'index'])->name('books.index');
Route::get('/{id}/show', action: [BookController::class, 'show'])->name('books.show');