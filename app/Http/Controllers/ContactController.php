<?php
// virtuelna putanja do samog kontrolera

namespace App\Http\Controllers;

// require_once "Illuminate\Http\request"

use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function getAllContacts()
    {
        $allContacts = ContactModel::all(); //SELECT * FROMcontacts

        return view('allContacts',compact('allContacts'));
    }

    public function sendContact()
    {
        die("TEST");
    }
}
