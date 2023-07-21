<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RecensioneController;
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

// home
Route::get('/', [PublicController::class, 'home'])->name('home');

// mail
Route::get('/contatti', [PublicController::class, 'contatti'])->name('contatti');
Route::post('/send', [PublicController::class, 'send'])->name('send');

// CRUD recensioni
Route::get('/recensioni', [RecensioneController::class, 'recensioni'])->name('recensioni');
Route::post('/storeRec', [RecensioneController::class, 'storeREC'])->name('storeREC');


// rotte per il CRUD degli articoli
Route::get('/index', [ArticleController::class, 'index'])->name('index');
Route::get('/create', [ArticleController::class, 'create'])->name('create')->middleware(['auth', 'checkuser']);
Route::post('/store', [ArticleController::class, 'store'])->name('store');
Route::get('/show/{article}', [ArticleController::class, 'show'])->name('show');
Route::get('/edit/{article}', [ArticleController::class, 'edit'])->name('edit')->middleware(['auth', 'checkuser']);
Route::put('/update/{article}', [ArticleController::class, 'update'])->name('update')->middleware(['auth', 'checkuser']);
Route::delete('/delete/{article}', [ArticleController::class, 'destroy'])->name('delete')->middleware(['auth', 'checkuser']);
