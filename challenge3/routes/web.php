<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ContactController;


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
    return view('content.form');

});


Route::get('/content', [ContentController::class, 'index'])->name('content.all');

Route::get('/content/{id}', [ContentController::class, 'show'])->name('content.show');

Route::post('/content', [ContentController::class, 'store'])->name('content.post');
