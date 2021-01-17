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

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\AdoptionListController;
Route::get('/Adoption', [AdoptionListController::class,'index']);

Route::post('/addReqs', [AdoptionListController::class,'storeAdoptionreq'])->name('addReqs');
Route::post('/confirmReq', [AdoptionListController::class,'confirmReq'])->name('confirmReq');
Route::post('/store', [AdoptionListController::class,'storePet'])->name('store');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/status', [AdoptionListController::class,'checkStatus']);
Auth::routes();


/*admin panel route*/
Route::get('/storePet', [AdoptionListController::class,'storeForm'])->name('storePet');
Route::get('/petList', [AdoptionListController::class,'list']);
Route::get('/delete/{petID}', [AdoptionListController::class,'delete']);