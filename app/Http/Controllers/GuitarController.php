<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GuitarModel;
use App\TypeModel;
use App\StorageLeftoverModel;
use App\ColorModel;
use App\ContactModel;
use App\OrdersModel;
use App\OrdersItemsModel;
use App\Cart;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class GuitarController extends Controller
{
    public function getAllGuitars(Request $request, $num){
        $guitars = GuitarModel::where('tipas', $num)->paginate(6);
        $tipas = TypeModel::where('tipo_ID', $num)->first()->pavadinimas;
        $tipas = substr($tipas, 0, -1);
        return view('guitars')->with('guitars', $guitars)->with('tipas', $tipas)->with('tipo_nr', $num);
    }

    public function getGuitar(Request $request, $num, $id){
        $guitar = GuitarModel::where('produkto_ID', $id)->first();
        $tipas = TypeModel::where('tipo_ID', $num)->first()->pavadinimas;
        $likutis = StorageLeftoverModel::where('produktas', $guitar->produkto_ID)->sum('likutis');
        return view('guitarInfo')->with('guitar', $guitar)->with('tipas', $tipas)->with('likutis', $likutis);
    }


    public function addToCart(Request $request, $id){
        $gitara = GuitarModel::find($id);

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($gitara, $gitara->produkto_ID);

        $request->session()->put('cart', $cart);
        //dd($request->session()->get('cart'));
        return redirect()->back();
    }

    public function removeFromCart(Request $request,$id){
        if($id == 0){
            $request->session()->flush();
        }
        else
        {
            $gitara = GuitarModel::find($id);
            $cart = session()->get('cart');
            $cart->remove($gitara, $gitara->produkto_ID);


            if($cart->totalQty == 0){
                $request->session()->flush();
            }
        }
        return redirect()->back();
    }

    public function cartView(){
        return view('cart');
    }

    public function cartConfirm(){
        $id = \rand(1000,10000);
        $contacts = ContactModel::all();

        return view('cartConfirm')->with('id', $id)->with('padaliniai', $contacts);
    }

    public function insertOrder(Request $request, $id){

        $validator = Validator::make(
            [   'padalinys' =>$request->input('padalinys')
            ],
            [   'padalinys' => 'required'
            ]
        );

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator);
        }
        else
        {
            $oldCart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($oldCart);

            $order = new OrdersModel();
            $order->uzsakymo_ID = $id;
            $order->kaina = $cart->totalPrice;
            $order->padalinys = $request->input('padalinys');

            $order->save();

            foreach($cart->items as $item){
            $orderItem = new OrdersItemsModel();

            $orderItem->uzsakymo_ID = $id;
            $orderItem->preke = $item['id'];
            $orderItem->kiekis = $item['qty'];
            $orderItem->kaina = $item['price'];

            $orderItem->save();
            }
            session()->flush();
        }

        return redirect('/guitar/1')->with('success', 'Uzsakymas pridėtas');
    }

    public function createGuitar(Request $request, $num){
        $spalvos = ColorModel::all();
        return view('forms.guitarCreate')->with('tipas', $num)->with('spalvos', $spalvos);
    }

    public function editGuitar(Request $request,$num, $id){
        $spalvos = ColorModel::all();
        $gitara = GuitarModel::where('produkto_ID', $id)->first();
        $gitaros_spalva = ColorModel::where('spalvos_ID', $gitara->spalva)->first();
        $pavadinimas = substr($gitara->pavadinimas, 2);

        return view('forms.guitarEdit')->with('gitara', $gitara)->with('tipas', $num)->with('pavad', $pavadinimas)
        ->with('spal', $gitaros_spalva)->with('spalvos', $spalvos);
    }

    public function insert(Request $request, $num){

        $validator = Validator::make(
            [   'pav' =>$request->input('pav'),
                'spalva' =>$request->input('spalva'),
                'kaina' =>$request->input('kaina'),
                'aprasas' => $request->input('aprasas')
            ],
            [   'pav' => 'required|alpha_num',
                'spalva' => 'required|alpha_num',
                'kaina' =>'required|regex:/^\d+(\.\d{1,2})?$/',
                'aprasas' =>  'required|min:3|max:150'
            ]
        );

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator);
        }
        else
        {
            $guitar = new GuitarModel();

            $guitar->pavadinimas = $request->input('tipas').$request->input('pav');
            $guitar->tipas = $num;
            $guitar->spalva = $request->input('spalva');
            $guitar->kaina = $request->input('kaina');
            $guitar->aprasas = $request->input('aprasas');

            $guitar->save();
        }

        return redirect()->back()->with('success', 'Gitara pridėta');
    }


    public function update(Request $request, $num ,$id){

        $validator = Validator::make(
            [   'pav' =>$request->input('pav'),
                'spalva' =>$request->input('spalva'),
                'kaina' =>$request->input('kaina'),
                'aprasas' => $request->input('aprasas')
            ],
            [   'pav' => 'required|alpha_num',
                'spalva' => 'required|alpha_num',
                'kaina' =>'required|regex:/^\d+(\.\d{1,2})?$/',
                'aprasas' =>  'required|min:3|max:150'
            ]
        );

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator);
        }
        else
        {
            $guitar = array(
                "pavadinimas"=>$request->input('tipas').$request->input('pav'),
                "tipas"=>$num,
                "spalva"=>$request->input('spalva'),
                "kaina"=>$request->input('kaina'),
                "aprasas"=>$request->input('aprasas')
            );
            $guitars = GuitarModel::where('produkto_ID','=',$id)->update($guitar);
        }

        return redirect('/guitar/'.$num.'/'.$id)->with('success', 'Gitara redaguota');
    }

    public function delete($num,$id){
        GuitarModel::where('produkto_ID','=',$id)->delete();
        return redirect('/guitar/'.$num)->with('success', 'Gitara pasalinta');
    }

}
