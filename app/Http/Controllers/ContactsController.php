<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactModel;

class ContactsController extends Controller
{
    public function contact(){
        $contacts = ContactModel::paginate(2);
        return view('contacts')->with('contacts',$contacts);
    }
}
