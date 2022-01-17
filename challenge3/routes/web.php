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
    return view('welcome');

});


Route::prefix('/content')->group(function () {

    Route::get('/new', function(){ return view('content.form'); } )->name('content.create');

    Route::get('/', [ContentController::class, 'index'])->name('content.all');

    Route::get('/{id}', [ContentController::class, 'show'])->name('content.show');

    Route::post('/', [ContentController::class, 'store'])->name('content.post');

});

Route::prefix('/contact')->group(function () {

    Route::get('/new', function(){ return view('contact.form'); } )->name('contact.create');

    Route::get('/', [ContactController::class, 'index'])->name('contact.all');

    Route::get('/{id}', [ContactController::class, 'show'])->name('contact.show');

    Route::post('/', [ContactController::class, 'store'])->name('contact.post');

});



