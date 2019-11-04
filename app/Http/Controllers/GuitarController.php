<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GuitarModel;

class GuitarController extends Controller
{
    public function getGuitarAku(){
        $guitars = GuitarModel::where('tipas', 1)->get();
        return view('guitar')->with('guitars',$guitars)->with('type', "Akustines");
    }

    public function getGuitarEle(){
        $guitars = GuitarModel::where('tipas', 2)->get();
        return view('guitar')->with('guitars',$guitars)->with('type', "Elektrines");
    }

    public function getGuitarBos(){
        $guitars = GuitarModel::where('tipas', 3)->get();
        return view('guitar')->with('guitars',$guitars)->with('type', "Bosines");
    }
}
