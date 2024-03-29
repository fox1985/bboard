<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\BbsController;
use  App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [BbsController::class, 'index'])->name('index');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//форма для добавления контента
Route::get('/home/add', [HomeController::class, 'showAddBbForm'])->name('bb.add');

Route::post('/home', [HomeController::class, 'storeBb'])->name('bb.store');

//форма редактировать
Route::get('/home/{bb}/edit/', [HomeController::class, 'showEditBbForm'])->name('bb.edit');

//обновить форму
Route::patch('/home/{bb}', [HomeController::class, 'updateBb'])->name('bb.update');

//удалеть контаент
Route::get('/home/{bb}/delete', [HomeController::class, 'showDeleteBbForm'])->name('bb.delete');

//
Route::delete('/home/{bb}', [HomeController::class, 'destroyBb'])->name('bb.destroy');

Route::get('/{bb}', [BbsController::class, 'detail'])->name('detail');
