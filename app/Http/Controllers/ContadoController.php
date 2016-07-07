<?php

namespace App\Http\Controllers;

use App\modelContado;
use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Cloud;
use Illuminate\Contracts\Mail\Mailer;

use App\Http\Requests;

class ContadoController extends Controller
{
    public function store(Request $request){
        $mens = $request->all();
        modelContado::create($mens);

        return view('enviado');
    }

    public function sendEmail(Request $request, Cloud $cloud, Mailer $mail){
        //$user = ContadoController::findOrFail($id);

        $mail->send('email.contato', $request->all(), function ($message){

            $message->to('alguem@gmail.com.br');
            $message->from('joao123@gmail.comm')->cc('paulo.mendes00@hotmail.com');
        });
        return view('enviado');
    }
}
