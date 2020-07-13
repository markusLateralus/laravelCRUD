<?php

namespace App\Http\Controllers;

use App\Mail\MessageRecibed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request){
    				//del formulario puedo sacar los datos que quiera
    				// return $request->get("email")
   $msg=$request->validate(
    	[
    		"name"=>"required",
    		"correo"=>"required",
    		"subject"=>"required",
    		"contenido"=>"required|min:3"
    	]
    );

    //enviar email
    // a quien se lo enviamos, 
    Mail::to("marcoslateralus@gmail.com")->queue(new MessageRecibed($msg));
    return back()->with("estado","mensaje recibido correctamente");
    }
}
