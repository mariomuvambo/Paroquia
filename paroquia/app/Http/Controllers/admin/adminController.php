<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Aniversariante\aniversarianteController;
use App\Http\Controllers\Controller;
use App\Models\aniversariantes;
use App\Models\Ministerio;
use App\Models\UserMinisterio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class adminController extends Controller
{
    private aniversariantes $aniversariante;

    public function __construct(){
        $this->aniversariante = new aniversariantes();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        
        $lista = $this->aniversariante->all();
        return view("/Admin/aniversariante_all", compact("lista"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $ministerios = UserMinisterio::all();
        return view ('Ministerios.listaRegistados',compact('ministerios'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(aniversariantes $aniversariante)
    {
        //

        return view("/Admin/edit",['aniversariante' =>$aniversariante]);
       
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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'surname' => 'required',
            'gender' => 'required',
            'date_birth' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $niver = Aniversariantes::find($id);
    
        if (!$niver) {
            return redirect()->back()->with('msg', 'Registro não encontrado');
        }
    
        $niver->name = $request->input('name');
        $niver->surname = $request->input('surname');
        $niver->gender = $request->input('gender');
        $niver->date_birth = $request->input('date_birth');
    
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . '_' . time()) . "." . $extension;
            $requestImage->move(public_path('img/foto_aniversario'), $imageName);
            $niver->image = $imageName;
        }
    
        if ($niver->save()) {
            return redirect('/Admin/aniversariante_all')->with('msg', 'Atualizado com sucesso');
        } else {
            return redirect()->back()->with('msg', 'Erro ao atualizar');
        }
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
        // var_dump('delete');
        $this->aniversariante->where('id', $id)->delete();
        return redirect('/Admin/aniversariante_all')->with('msg','Apagado com sucesso');
    }
}
