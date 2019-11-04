<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactModel;

class ContactsController extends Controller
{
    public function contact(){
        $contacts = ContactModel::all();
        return view('contacts')->with('contacts',$contacts);
    }

    /*public function contact(){
        return ContactModel::all();
    }*/
}
