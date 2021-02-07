<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

//Site for clients

Route::get('/', [App\Http\Controllers\MainController::class, 'getTreners'])->name('main');

Route::get('/gallery', 'App\Http\Controllers\MainController@get')->name('gallery');

Route::get('/details/{id}', 'App\Http\Controllers\MainController@details')->name('details');

Route::get('/details1/{id}', 'App\Http\Controllers\MainController@details1')->name('details1');

Auth::routes(['register' => false]);

//AdminPanel

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

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
    '/gallery-table', 'App\Http\Controllers\GalleryController@showAll'
    )->name('galleryShowAll');

Route::get(
    '/createGallery','App\Http\Controllers\GalleryController@createGallery'
    )->name('createGallery');

Route::post(
    '/create-gallery','App\Http\Controllers\GalleryController@post'
    )->name('createGallerySubmit');

Route::get(
    '/gallery/{id}/delete',
    'App\Http\Controllers\GalleryController@deleteGallery'
    )->name("deleteGallery");


//Категория секций
Route::get(
    '/createCatalog','App\Http\Controllers\CatalogController@createCatalog'
    )->name('createCatalog');

Route::get(
    '/catalogs','App\Http\Controllers\CatalogController@showAll'
)->name('showAllCatalogs');

Route::get(
    '/catalogs/{id}',
    'App\Http\Controllers\CatalogController@showOne'
    )->name("catalogShowOne");

Route::post(
    '/createGallerySubmit','App\Http\Controllers\CatalogController@createCatalogSubmit'
    )->name('createCatalogSubmit');

  
Route::post(
    '/catalogs/{id}/update',
    'App\Http\Controllers\CatalogController@updateCatalogSubmit'
    )->name("updateCatalogSubmit");

Route::get(
    '/catalogs/{id}/update',
    'App\Http\Controllers\CatalogController@updateCatalog'
    )->name("updateCatalog");
 
Route::get(
    '/catalogs/{id}/delete',
    'App\Http\Controllers\CatalogController@deleteCatalog'
    )->name("deleteCatalog");