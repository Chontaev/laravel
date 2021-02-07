<?php

namespace App\Http\Controllers;

use App\Models\catalogs;
use App\Models\gallery;
use App\Models\treners;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function getTreners()
    {
        $this->middleware('auth');
        return view("main", ['data'=>treners::all(),'cat'=>catalogs::all()]);
    }

    public function get(){
        return view("gallery", ['data'=>gallery::all()]);
    }
    public function details($id){
        return view("details", ['data'=>treners::find($id)]);
    }
    public function details1($id){
        return view("details1", ['data'=>catalogs::find($id)]);
    }
}
