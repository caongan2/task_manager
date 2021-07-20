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
    return view('modules.customer.index');
})->name('cancel');

Route::prefix('customer')->group(function () {

    Route::get('index', function () {
        return view('modules.customer.index');
    });

    Route::get('create', function () {
        return view('modules.customer.add');
    })->name('create');

    Route::post('store', function () {

    });

    Route::delete('');
});
