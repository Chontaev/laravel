<?php

namespace App\Http\Controllers;

use App\Http\Requests\CatalogRequest;
use App\Models\catalogs;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function createCatalogSubmit(CatalogRequest  $req){

        $catalogs = new catalogs();
        $catalogs->title = $req->input('title');
        
        $img = $req->img;
        $img_new_name = time() . $img->getClientOriginalName();
        $img ->move('img',$img_new_name);
        $catalogs->img = 'img/' . $img_new_name;

        $catalogs->price = $req->input('price');
        $catalogs->time = $req->input('time');
        $catalogs->discript = $req->input('discript');

        $catalogs->save();

        return redirect()->route('showAllCatalogs')->with('success', 'Запись секция был создана');
    }
    public function showAll(){
        $this->middleware('auth');
        return view("catalogs/showAll", ['data'=>catalogs::all()]);
    }

    public function showOne($id){
        $this->middleware('auth');
        return view("catalogs/showOne", ['data'=>catalogs::find($id)]);
    }
    public function createCatalog(){
        $this->middleware('auth');
        return view('catalogs/create');
    }
    public function updateCatalog($id){
        $this->middleware('auth');
        $cat = new catalogs();
        return view("catalogs/update", ['data'=>$cat->find($id)]);
    }

    public function updateCatalogSubmit($id,CatalogRequest  $req) {
        $this->middleware('auth');

        $catalogs = catalogs::find($id);

        $catalogs->title = $req->input('title');
        $img = $req->img;
        $img_new_name = time() . $img->getClientOriginalName();
        $img ->move('img',$img_new_name);
        $catalogs->img = 'img/' . $img_new_name;
        
        $catalogs->price = $req->input('price');
        $catalogs->time = $req->input('time');
        $catalogs->discript = $req->input('discript');

        $catalogs->save();

        return redirect()->route('catalogShowOne', $id)->with('success', 'Запись секция была обнавлена');
    }

    public function deleteCatalog($id){
        $this->middleware('auth');
        $trener = catalogs::find($id)->delete();
        return redirect()->route('showAllCatalogs')->with('success', 'Запись секция была удалена');
    }
}
