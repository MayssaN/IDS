<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController;

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
    return view('accueil');
});


Route::get('/contact', [ContactController::class, 'contact'] )->name('form.submit') ; 
Route::post('/contact/save', [ContactController::class, 'save'] ) ; 


//les services 
Route::get('/services', [ServicesController::class, 'ViewServices'] ) ; 
Route::get('/services2', [ServicesController::class, 'ViewServices2'] ) ; 
Route::get('/test', [ServicesController::class, 'test'] ) ; 
Route::get('/s1', [ServicesController::class, 's1'] ) ; 
Route::get('/s2', [ServicesController::class, 's2'] ) ; 
Route::get('/s3', [ServicesController::class, 's3'] ) ; 
Route::get('/s4', [ServicesController::class, 's4'] ) ; 
Route::get('/s6', [ServicesController::class, 's6'] ) ; 
Route::get('/s7', [ServicesController::class, 's7'] ) ; 
Route::get('/s8', [ServicesController::class, 's8'] ) ; 

//societe


Route::get('/societe', [ServicesController::class, 'ViewSociete'] ) ; 
