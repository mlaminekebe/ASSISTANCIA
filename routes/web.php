<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemandeController;
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
// Route::get('/form', function(){
//     return view('layouts.formulaire');
// })->middleware('auth');

Auth::routes();

Route::resource('/demande',DemandeController::class);

// Route::get('form',[DemandeController::class, 'index2'])->name('form');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get("/demande",function(){
//     return view('demande.list');
// });
Route::get('/form/{id}',[DemandeController::class, 'index2'])->name('name');

