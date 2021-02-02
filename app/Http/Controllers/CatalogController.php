<?php

namespace App\Http\Controllers;

use App\Http\Requests\CatalogRequest;
use App\Models\catalogs;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function createCatalog(CatalogRequest  $req){

        $catalogs = new catalogs();
        $catalogs->title = $req->input('title');
        $catalogs->img = $req->input('img');
        $catalogs->price = $req->input('price');
        $catalogs->time = $req->input('time');
        $catalogs->discript = $req->input('discript');

        $catalogs->save();

        return redirect()->route('showCatalogs')->with('success', 'Запись тренер был создан');
    }
}
