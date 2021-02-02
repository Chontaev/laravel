<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

//Site for clients

Route::get('/', function () { return view('main'); });

Route::get('/gallery', function () { return view('gallery'); });

Route::get('/services', function () { return view('services'); });

Auth::routes(['register' => false]);

//AdminPanel

Route::get('/admin', [App\Http\Controllers\CheckController::class, 'index'])->name('admin');

Route::get('/catalogs', function () { return view('admin/catalogs'); })->middleware('auth')->name('showCatalogs');



//Таблица Тренер

Route::get(
    '/treners',
    'App\Http\Controllers\TrenerController@showAll'
    )->name("treners");

Route::get(
    '/treners/{id}',
    'App\Http\Controllers\TrenerController@showOne'
    )->name("trenersShowOne");

Route::get(
    '/createTrener',
    'App\Http\Controllers\TrenerController@createTrener'
    )->name("createTrener");

Route::post(
    '/createTrenerSubmit',
    'App\Http\Controllers\TrenerController@createTrenerSubmit'
    )->name("createTrenerSubmit");
    
Route::post(
    '/treners/{id}/update',
    'App\Http\Controllers\TrenerController@updateTrenerSubmit'
    )->name("updateTrenerSubmit");

Route::get(
    '/treners/{id}/update',
    'App\Http\Controllers\TrenerController@updateTrener'
    )->name("updateTrener");

    
Route::get(
    '/treners/{id}/delete',
    'App\Http\Controllers\TrenerController@deleteTrener'
    )->name("deleteTrener");

//Таблица Галлерея

Route::get(
    '/gallery-table', function () { return view('admin/gallery-table');})->middleware('auth')->name('showGalleryTable');


Route::post('/create-gallery','App\Http\Controllers\GalleryController@createGallery')->name('createGallery');

Route::post('/create-catalog','App\Http\Controllers\CatalogController@createCatalog')->name('createCatalog');



