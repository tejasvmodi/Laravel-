<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userinformations;

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

Route::get('/',[userinformations ::class,'index'])->name('user.index');
Route::get('/create',[userinformations ::class,'create'])->name('user.create');
Route::post('/create/store',[userinformations ::class,'store'])->name('user.store');
Route::get('/edit/{id}',[userinformations ::class,'edit'])->name('user.edit');
Route::post('/update/{id}',[userinformations ::class,'update'])->name('user.update');
Route::get('/delete/{id}',[userinformations ::class,'destroy'])->name('user.destroy');