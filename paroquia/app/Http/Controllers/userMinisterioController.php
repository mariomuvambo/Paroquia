<?php

namespace App\Http\Controllers;

use App\Models\Ministerio;
use App\Models\UserMinisterio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class userMinisterioController extends Controller
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
        // Retonar apenas dados do nameMinister
        $registoSelect = Ministerio::all();
        return view('/Ministerios.RegistarUser', compact('registoSelect'));
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
        $user = Auth::user();
        $validator = Validator::make($request ->all(),[
            'selecioneMinisterio'=>'required',
            'nome'=>'required',
            'apelido'=>'required',
            'contacto'=>'required',
        ]); 
        if ($validator->fails()){
            return redirect()->back();
        }

       UserMinisterio::create([
            'selecioneMinisterio' =>$request->input('selecioneMinisterio'),
            'nome'=>$request->input('nome'),
            'apelido'=>$request->input('apelido'),
            'contacto'=>$request->input('contacto'),
            'user_id' => $user->id

        ]);
        return redirect("/Ministerios/RegistarUser")->with('msg', 'Gravado com sucesso');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //

        
        // Passando dados para view
        return view('/Ministerios/user/show');
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
