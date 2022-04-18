<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);

Route::get('/liste_prof_view',[AdminController::class,'liste_prof_view']);


Route::post('/deposit',[HomeController::class,'deposit']);

Route::get('/mescandidatures',[HomeController::class,'mescandidature']);

Route::get('/supprimer/{id}',[HomeController::class,'supprimer']);

Route::get('/modifier/{id}',[HomeController::class,'modifier']);

Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/canceled/{id}',[AdminController::class,'canceled']);

Route::get('/showprof',[AdminController::class,'showprof']);

Route::get('/deleteprof/{id}',[AdminController::class,'deleteprof']);


Route::get('/editprof/{id}',[HomeController::class,'editprof']);







Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
