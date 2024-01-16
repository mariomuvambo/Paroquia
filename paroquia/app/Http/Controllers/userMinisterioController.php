<?php

namespace App\Http\Controllers;

use App\Models\Ministerio;
use App\Models\UserMinisterio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

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
        return redirect("/Ministerios/user/show")->with('msg', 'Gravado com sucesso');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
         // Obtem todos os registros do usuario casdastrado no sistema
         $user = auth()->user();
         $Userministerio = $user->Userministerio;
         
         // Passando dados para view
         return view('/Ministerios/user/show', ['Userministerio' => $Userministerio]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registoSelect = Ministerio::pluck('nameMinister');

        $editar = UserMinisterio::findOrFail($id);
    
        return view('/Ministerios/user/edit', compact('editar','registoSelect')); 

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
        $validator = Validator::make($request ->all(),[
            'selecioneMinisterio'=>'required',
            'nome'=>'required',
            'apelido'=>'required',
            'contacto'=>'required',
        ]); 

        if ($validator->fails()){
            return redirect()->back();
        }


        $update = UserMinisterio::where('id', $id)->update($request->except('_token', '_method'));

        if ($update) {
            return redirect('/Ministerios/user/show')->with('msg','Editado com sucesso');
        }
        return redirect()->back()->with('msg','erro');
        
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
