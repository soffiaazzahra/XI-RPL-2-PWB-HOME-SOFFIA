<?php

use App\Http\Controllers\SppController;
use Illuminate\Support\Facades\Route;

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

Route::get('/template2', function () {
    return view('template2.master');
});

Route::get('/try', function () {
    return view('try');
});


Route::controller(SppController::class)->group(function () {
    Route::get('/spp', 'index')->name('spp.index');
    Route::get('/spp/create', 'create')->name('spp.create');
    Route::post('/spp', 'store')->name('spp.store');
    Route::get('/spp/{spp}/edit', 'edit')->name('spp.edit');
    Route::get('/spp/{spp}', 'show')->name('spp.show');
    Route::put('/spp/{spp}', 'update')->name('spp.update');
    Route::delete('/spp/{spp}', 'destroy')->name('spp.destroy');
});