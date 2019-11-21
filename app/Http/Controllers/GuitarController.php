<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GuitarModel;
use App\TypeModel;
use App\StorageLeftoverModel;
use App\Cart;
use Session;

class GuitarController extends Controller
{
    public function getAllGuitars(Request $request, $num){
        $guitars = GuitarModel::where('tipas', $num)->paginate(6);
        $tipas = TypeModel::where('tipo_ID', $num)->first()->pavadinimas;
        $tipas = substr($tipas, 0, -1);
        return view('guitars')->with('guitars', $guitars)->with('tipas', $tipas);
    }

    public function getGuitar(Request $request, $num, $name){
        $guitar = GuitarModel::where('pavadinimas', $name)->first();
        $tipas = TypeModel::where('tipo_ID', $num)->first()->pavadinimas;
        $likutis = StorageLeftoverModel::where('produktas', $guitar->produkto_ID)->sum('likutis');
        return view('guitarInfo')->with('guitar', $guitar)->with('tipas', $tipas)->with('likutis', $likutis);
    }

    /*public function addToCart(Request $request, $id)
    {
        $gitara = GuitarModel::find($id);

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($gitara, $gitara->produkto_ID, $gitara->kaina);

        $request->session()->put('cart', $cart);
        dd($request->session()->get('cart'));
        return redirect()->back();
    }*/

    public function addToCart(Request $request, $id)
    {
        $guitar = GuitarModel::find($id);

        if(!$guitar) {
            abort(404);
        }

        $cart = session()->get('cart');

        if(!$cart) {
            $cart = [
                    $id => [
                        "pav" => $guitar->pavadinimas,
                        "qty" => 1,
                        "kaina" => $guitar->kaina,
                        "img" => $guitar->pavadinimas
                    ]
                    //"totalQty" => 1
            ];
            session()->put('cart', $cart);
            return redirect()->back();
        }


        if(isset($cart[$id])) {
            $cart[$id]['qty']++;
            //$cart['totalQty']++;
            session()->put('cart', $cart);
            return redirect()->back();
        }


        //$cart['totalQty']++;
        $cart[$id] = [
            "pav" => $guitar->pavadinimas,
            "qty" => 1,
            "kaina" => $guitar->kaina,
            "img" => $guitar->pavadinimas
        ];

        session()->put('cart', $cart);
        return redirect()->back();
    }

    public function removeFromCart(Request $request,$id)
    {
        if($id == 0){
            $request->session()->flush();
        }
        else
        {
            $cart = session()->get('cart');
            if(isset($cart[$id])) {
                $cart[$id]['qty']--;
                if($cart[$id]['qty'] <= 0){
                    unset($cart[$request->id]);
                }
                session()->put('cart', $cart);
            }
        }
        return redirect()->back();
    }
}
