<?php

use App\Http\Controllers\IndonesiaController;
use App\Http\Controllers\WordController;
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

Route::get('word', function(){
    return view('word');
});

Route::post('word', [WordController::class, 'index'])->name('word.index');

Route::get('indonesia', function(){
    return view('formindonesia');
});


Route::get('selectProv', [IndonesiaController::class, 'provinsi'])->name('provinsi.index');
Route::get('selectRegenc/{id}', [IndonesiaController::class, 'regency']);
