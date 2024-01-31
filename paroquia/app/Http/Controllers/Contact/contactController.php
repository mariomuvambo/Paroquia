<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use App\Models\contacto;
use Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/Contact/send-email');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request ->all(),[
            'name'=>'required',
            'surname'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'message'=>'required',
        ]); 
       

        contacto::create([
            'name' =>$request->input('name'),
            'surname'=>$request->input('surname'),
            'phone'=>$request->input('phone'),
            'email'=>$request->input('email'),
            'message'=>$request->input('message'),
        ]);
           // Obtenha o usuário logado
           $user = auth()->user();

           // Obtenha o endereço de e-mail do usuário logado
           $userEmail = $user->email;
   
           // Endereço de e-mail para onde você quer enviar
           $to = 'mariomuvambo1@gmail.com';

        //    Mail::to([$userEmail, $to])->
           // Envie o e-mail
           Mail::to([$to])->send(new ContactFormMail(
            $request->input('name'),
            $request->input('surname'),
            $request->input('phone'),
            $request->input('email'),
            $request->input('message')

           ));
        
          return redirect("/Contact/send-email")->with('msg', 'Gravado com sucesso e email enviado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
