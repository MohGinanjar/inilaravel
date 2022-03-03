<?php

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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/add', [App\Http\Controllers\HomeController::class, 'add'])->name('add');
Route::post('/adddata', [App\Http\Controllers\HomeController::class, 'adddata'])->name('adddata');
Route::get('/home/editdata/{id}', [App\Http\Controllers\HomeController::class, 'editdata'])->name('editdata');
Route::post('/home/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');
Route::get('/home/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete');
Route::get('/viewdata', [App\Http\Controllers\HomeController::class, 'viewdata'])->name('viewdata');
Route::get('/error', [App\Http\Controllers\HomeController::class, 'error'])->name('error');
Route::get('/listapi', [App\Http\Controllers\HomeController::class, 'listapi'])->name('listapi');
