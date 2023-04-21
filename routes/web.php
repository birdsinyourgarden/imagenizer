<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

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

Auth::routes();

Route::get('/', [ImageController::class, 'index'])->name('home');
Route::get('/home', [ImageController::class, 'index']);

Route::get('/create', [ImageController::class, 'create'])->name('createImage');
Route::post('/store', [ImageController::class, 'store'])->name('storeImage');

Route::delete('/delete/{id}', [ImageController::class, 'destroy'])->name('deleteImage');

Route::get('/edit/{id}', [ImageController::class, 'edit'])->name('editImage');
Route::patch('/image/{id}', [ImageController::class, 'update'])->name('updateImage');

Route::get('/show/{id}', [ImageController::class, 'show'])->name('showImage');