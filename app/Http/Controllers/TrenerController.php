<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TrenerRequest;
use App\Models\treners;

class TrenerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showAll(){
        $this->middleware('auth');
        return view("trener/showAll", ['data'=>treners::all()]);
    }

    public function showOne($id){
        $this->middleware('auth');
        return view("trener/showOne", ['data'=>treners::find($id)]);
    }

    public function createTrener(){
        $this->middleware('auth');
        return view('trener/createTrener');
    }

    public function createTrenerSubmit(TrenerRequest  $req) {
        $this->middleware('auth');
        $trener = new treners();

        $trener->name = $req->input('name');

        $img = $req->img;
        $img_new_name = time() . $img->getClientOriginalName();
        $img ->move('img',$img_new_name);
        $trener->img = 'img/' . $img_new_name;

        $trener->kindofsport = $req->input('kindofsport');
        $trener->rank = $req->input('rank');
        $trener->contacts = $req->input('contacts');

        $trener->save();

        return redirect()->route('treners')->with('success', 'Запись тренер была создана');
    }

    public function updateTrener($id){
        $this->middleware('auth');
        $trener = new treners();
        return view("trener/updateTrener", ['data'=>$trener->find($id)]);
    }

    public function updateTrenerSubmit($id,TrenerRequest  $req) {

        $trener = treners::find($id);

        $trener->name = $req->input('name');

        $img = $req->img;
        $img_new_name = time() . $img->getClientOriginalName();
        $img ->move('img',$img_new_name);
        $trener->img = 'img/' . $img_new_name;
        
        $trener->kindofsport = $req->input('kindofsport');
        $trener->rank = $req->input('rank');
        $trener->contacts = $req->input('contacts');

        $trener->save();

        return redirect()->route('trenersShowOne', $id)->with('success', 'Запись тренер была обнавлена');
    }

    public function deleteTrener($id){
        $this->middleware('auth');
        $trener = treners::find($id)->delete();
        return redirect()->route('treners')->with('success', 'Запись тренер была удалена');
    }
}
 