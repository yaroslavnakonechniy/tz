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

Route::group(['namespace' => 'File'], function (){
    Route::get('/', 'IndexController')->name('file.index');
    Route::get('/file/create', 'CreateController')->name('file.create');
    Route::post('/file/store', 'StoreController')->name('file.store');
    Route::get('/file/{id}/show', 'ShowController')->name('file.show');
    Route::get('/file/{id}/download', 'DownloadController')->name('file.download');
    Route::get('/file/{id}/delete', 'DestroyController')->name('file.destroy');
    Route::get('/file/{id}/edit', 'EditController')->name('file.edit');
    Route::post('/file/{id}/update', 'UpdateController')->name('file.update');
});