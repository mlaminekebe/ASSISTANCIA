<?php
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\AdimController;
use App\Http\Controllers\AssistanciaController;
use App\Models\Demande;
use App\Models\User;
use Spatie\LaravelIgnition\Solutions\SolutionProviders\ViewNotFoundSolutionProvider;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('/demande',DemandeController::class);
// Route::resource('/admin',AdimController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');;
Route::get('/form',[DemandeController::class, 'index2'])->name('form')->middleware('auth');
Route::middleware('isAdmin')->group(function () {
    Route::get('/listAdmin',[DemandeController::class, 'index'])->name('listAdmin');
    Route::get('/consulter/{id}', [AdimController::class, 'show1']);
    Route::get('/voir/{id}', [AdimController::class, 'voir']);
    Route::get('/show', [AdimController::class, 'show']);
    Route::get('/rejeter/{id}',[AdimController::class, 'rejeter']);
    Route::post('/sendMailRefus/{id}',[AdimController::class, 'sendMailRefus']);
    Route::get('/valider/{id}', [AdimController::class,'valider']);
});

Route::middleware('isAssistancia')->group(function () {
    Route::get('index', [AssistanciaController::class,'nombre'])->middleware('auth');
    Route::get('/users', [AssistanciaController::class,'allUsers']);
    // Route::get('information/{id}',[AssistanciaController::class, 'infoUser']);
    Route::get('/faireAdmis/{id}',[AssistanciaController::class, 'faireAdmis']);
});

Route::get('template', function () {
    return view('auth.template');
});
