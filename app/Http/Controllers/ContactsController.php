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

class ContactsController extends Controller
{
    public function contact(){
        $contacts = ContactModel::paginate(3);
        return view('contacts')->with('contacts',$contacts);
    }

    public function create(){
        return view('forms.contactsCreate');
    }

    public function edit(Request $request, $id)
    {
        $contact = ContactModel::where('padalinio_ID', $id)->first();

        return view('forms.contactsEdit')->with('contact',$contact);
    }

    public function insert(Request $request)
    {
        $validator = Validator::make(
            [   'pavadinimas' =>$request->input('pavadinimas'),
                'adresas' =>$request->input('adresas'),
                'telefonas' =>$request->input('telefonas'),
                'epastas' => $request->input('epastas')
            ],
            [   'pavadinimas' => 'required|alpha_num',
                'adresas' => 'required|alpha_num',
                'telefonas' =>'required|alpha_num',
                'epastas' =>  'required'
            ]
        );

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator);
        }
        else
        {
            $contact = new ContactModel();

            $contact->pavadinimas = $request->input('pavadinimas');
            $contact->adresas = $request->input('adresas');
            $contact->telefonas = $request->input('telefonas');
            $contact->epastas = $request->input('epastas');

            $contact->save();
        }

        return redirect()->back()->with('success', 'Padalinys pridėta');
    }


    public function update(Request $request, $id){

        $validator = Validator::make(
            [   'pavadinimas' =>$request->input('pavadinimas'),
                'adresas' =>$request->input('adresas'),
                'telefonas' =>$request->input('telefonas'),
                'epastas' => $request->input('epastas')
            ],
            [   'pavadinimas' => 'required|alpha_num',
                'adresas' => 'required|alpha_num',
                'telefonas' =>'required|alpha_num',
                'epastas' =>  'required'
            ]
        );

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator);
        }
        else
        {
            $appendableData = $request->all();

            //pašaliname iš masyvo saugumui naudojamą _token kintamąjį
            unset($appendableData ['_token']);

            $news = ContactModel::where('padalinio_ID', $id)->update($appendableData);

        }

        return redirect('/contact')->with('success', 'Padalinys redaguotas');
    }

    public function delete($id)
    {
        ContactModel::where('padalinio_ID', $id)->delete();
        return redirect()->back()->with('success', 'Padalinys pasalintas');
    }
}
