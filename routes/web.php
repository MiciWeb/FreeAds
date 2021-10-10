<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\AnnonceController;
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

Route::get('/index', [IndexController::class, 'showIndex']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/add', [AnnonceController::class, 'createAction'])->name('add');
Route::post('/add', [AnnonceController::class, 'storeAction'])->name("store");

Route::get('/list', [AnnonceController::class, 'listAction'])->name("list");

Route::post('/search', [AnnonceController::class, 'searchAction'])->name("search");

Route::get('/delete/{id}', [AnnonceController::class, 'deleteAction'])->name("delete");


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
