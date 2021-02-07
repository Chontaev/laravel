<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalleryRequest;
use Illuminate\Http\Request;
use App\Models\gallery;
use Carbon\Carbon;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function post(GalleryRequest $req){
        $this->middleware('auth');
        $imgs = $req->img;
        foreach($imgs as $img){
            $img_new_name = time() . $img->getClientOriginalName();
            $img ->move('img',$img_new_name);
            $post =new gallery();
            $post->img = 'img/' . $img_new_name;
            $post->save();
        }
        return redirect("/gallery-table")->with('Картинка успешно добавлена');
    }

    public function showAll(){
        $this->middleware('auth');
        $imgs = gallery::all();
        return view("gallery/showAll")->with('imgs',$imgs);
    }

    public function createGallery(){
        $this->middleware('auth');
        return view("gallery/create");
    }

    public function deleteGallery($id){
        $this->middleware('auth');
        $img = gallery::find($id)->delete();
        return redirect()->route('galleryShowAll')->with('success', 'Фотография была удалена');
    }
}
