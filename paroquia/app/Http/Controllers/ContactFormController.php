<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Validator;
use View;

class ContactFormController extends Controller
{

    public function create(){
        return view('/Contact.send-email');
    }
   
  
        public function sendEmail(Request $request)
        {
            // Lógica de validação do formulário aqui
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'surname' => 'required',
                'cell' => 'required|numeric',
                'message' => 'required',
            ]);

            
        
            if ($validator->fails()) {
                return redirect('Erro');
            }
        
            // Obtendo o e-mail do usuário logado
            $userEmail = auth()->user()->email;
        
            // Envio do email para o e-mail do usuário
            Mail::to($userEmail)->send(new ContactFormMail($request->all()));
        
            // Redirecionamento ou resposta após o envio do email
            return redirect("/Contact/send-email")->with('msg', 'Email enviado com sucesso');
        }
    
    
    
}
