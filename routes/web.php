<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[mycontroller::class,'index']);

 Route::get('insert',function(){
    return view('insert');
 });

Route::post('add',[mycontroller::class,'store'])->name('add');
Route::get('/detail/{id}',[mycontroller::class,'detail']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/adminprofile', [App\Http\Controllers\HomeController::class, 'adminprofile'])->name('admin.profile')->middleware('is_admin');
Route::post('/adminsavechanges', [App\Http\Controllers\HomeController::class, 'profiledata'])->name('admin.save')->middleware('is_admin');




Route::get('/dashboard',
 function(){
   return view ('dashboard.index');})->name('dashbaord');


