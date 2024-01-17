<?php

namespace App\Http\Controllers\Ministerio;

use App\Http\Controllers\Controller;
use App\Models\Ministerio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class adminMinisterioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lista_ministerio = Ministerio::all();
     
        return view('/Ministerios.listaMinisterio', compact('lista_ministerio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/Ministerios.addMinisterio');
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
            'nameMinister' => 'required',
            'finalidade'=>'required',
            'tarefa_resp_minister'=>'required',
            'tarefa_resp_adjunt'=>'required',
            'tarefa_sector_geral'=>'required',
            'sectores_minister'=>'required',
        ]);  

       
        if ($validator->fails()){
            return redirect()->back();
        }

       Ministerio::create([
            'nameMinister' =>$request->input('nameMinister'),
            'finalidade'=>$request->input('finalidade'),
            'tarefa_resp_minister'=>$request->input('tarefa_resp_minister'),
            'tarefa_resp_adjunt'=>$request->input('tarefa_resp_adjunt'),
            'tarefa_sector_geral'=>$request->input('tarefa_sector_geral'),
            'sectores_minister'=>$request->input('sectores_minister'),
        ]);

        return redirect("/Ministerios/listaMinisterio")->with('msg', 'Gravado com sucesso');

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
        $detalhes = Ministerio::all();

        return view ('/Ministerios/showMinisterios', compact('detalhes'));
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
        $editar = Ministerio::findOrFail($id);
        return view('/Ministerios/editarMinisterios', compact('editar')); 
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
            'nameMinister' => 'required',
            'finalidade'=>'required',
            'tarefa_resp_minister'=>'required',
            'tarefa_resp_adjunt'=>'required',
            'tarefa_sector_geral'=>'required',
            'sectores_minister'=>'required',
        ]); 

    
        $update = Ministerio::where('id', $id)->update($request->except('_token', '_method'));

        if ($update) {
            return redirect('/Ministerios/listaMinisterio')->with('msg', 'Editado com sucesso');
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
        Ministerio::findorFail($id)->delete();
        return redirect('/Ministerios/listaMinisterio')->with('msg','Apagado com sucesso');
    }
}
