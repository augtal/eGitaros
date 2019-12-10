<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrdersModel;
use App\OrdersItemsModel;
use App\GuitarModel;
use App\TypeModel;
use App\StorageLeftoverModel;
use App\ColorModel;
use App\ContactModel;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function getAllOrders(Request $request){
        $orders = OrdersModel::paginate(10);
        return view('orders')->with('orders', $orders);
    }

    public function getOrder(Request $request,$id){
        $orders = OrdersModel::where('uzsakymas.uzsakymo_ID', $id)
                    ->leftjoin('uzsakymo_prekes', 'uzsakymas.uzsakymo_ID', '=', 'uzsakymo_prekes.uzsakymo_ID')
                    ->leftjoin('produktas', 'uzsakymo_prekes.preke','=','produktas.produkto_ID')
        ->get();

        $uzsakymas = array();

        foreach($orders as $order){
            $tipas = TypeModel::where('tipo_ID', $order->tipas)->first();
            $padalinys = ContactModel::where('padalinio_ID', $order->padalinys)->first();

            $uzsakymas[] = ['prekesPav' => $order->pavadinimas,
                            'prekesID' => $order->preke,
                            'kaina' => $order->kaina,
                            'kiekis' => $order->kiekis,
                            'tipas' => $tipas->pavadinimas,
                            'tipasNum' => $order->tipas,
                            'padalinys' => $padalinys->pavadinimas];
        }

        return view('orderInfo')->with('orderItems', $uzsakymas);
    }

}
