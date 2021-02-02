<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalleryRequest;
use Illuminate\Http\Request;
use App\Models\gallery;

class GalleryController extends Controller
{
    public function createGallery(GalleryRequest  $req){

        $gallery = new gallery();
        $gallery->img = $req->input('img');
        
        $gallery->save();

        return redirect()->route('showGalleryTable')->with('success', 'Запись картинка был создан');
    }
}
