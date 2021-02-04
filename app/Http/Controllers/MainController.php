<?php

namespace App\Http\Controllers;

use App\Models\catalogs;
use App\Models\treners;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function getTreners()
    {
        $this->middleware('auth');
        return view("main", ['data'=>treners::all(),'cat'=>catalogs::all()]);
    }
}
