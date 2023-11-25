<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactanosMailable;

class ContactanosController extends Controller
{
    //

    public function index(){
        return view('contactanos');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|min:5|max:100',
            'email' => 'required|email',
            'message' => 'required|min:10'
        ]);

        Mail::to('chuildeveloper@gmail.com')->send(new ContactanosMailable($request->all()));

        // session()->flash('info', 'Aqui va el mensaje');
        return redirect()->route('contactanos')->with('msj', 'Mensaje enviado, nos pondremos en contacto contigo');
    }
}
