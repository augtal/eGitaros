<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GuitarModel;
use App\TypeModel;
use App\StorageLeftoverModel;

class GuitarController extends Controller
{
    public function getAllGuitars(Request $request, $num){
        $guitars = GuitarModel::where('tipas', $num)->paginate(6);
        $tipas = TypeModel::where('tipo_ID', $num)->first()->pavadinimas;
        $tipas = substr($tipas, 0, -1);
        return view('guitarsType')->with('guitars', $guitars)->with('tipas', $tipas);
    }

    public function getGuitar(Request $request, $num, $name){
        $guitar = GuitarModel::where('pavadinimas', $name)->first();
        $tipas = TypeModel::where('tipo_ID', $num)->first()->pavadinimas;
        $likutis = StorageLeftoverModel::where('produktas', $guitar->produkto_ID)->sum('likutis');
        return view('guitarInfo')->with('guitar', $guitar)->with('tipas', $tipas)->with('likutis', $likutis);
    }
}
