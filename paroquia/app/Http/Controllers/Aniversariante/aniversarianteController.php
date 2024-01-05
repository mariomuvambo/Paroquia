<?php

namespace App\Http\Controllers\Aniversariante;

use App\Http\Controllers\Controller;
use App\Models\aniverariantes;
use App\Models\aniversariantes;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class aniversarianteController extends Controller
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
        
        return view('/Aniversariantes/create');
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
 
        //Validar os dados necessários para o preenchimento na base de dados

        $validator = Validator::make($request ->all(),[
            'name' => 'required',
            'surname'=>'required',
            'gender'=>'required',
            'date_birth'=>'required',
        ]);


        if ($validator->fails()){
            return redirect(Response::HTTP_NO_CONTENT);
        }

        $niver = aniversariantes::create([
            'name' =>$request->input('name'),
            'surname'=>$request->input('surname'),
            'gender'=>$request->input('gender'),
            'date_birth'=>$request->input('date_birth'),
            'image'=>$request->input('image'),
            'user_id' => $user->id
        ]);

      
    
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtok('now') . "." . $extension);

            $requestImage->move(public_path('img/foto_aniversario'), $imageName);

            $niver->image = $imageName;
        }

        $user = auth()->user();
 
        $niver->save();

        return redirect('/Aniversariantes/show')->with('msg', 'Registado com sucesso');

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
        $aniversariantes = $user->aniversariantes;
        
        // Passando dados para view
        return view('/Aniversariantes/show', ['aniversariantes' => $aniversariantes]);


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
        $editar = aniversariantes::findOrFail($id);
        return view('Aniversariantes.edit', compact('editar')); 
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id)
    {
            $user = Auth::user();

            // Encontre o registro existente pelo ID
            $niver = aniversariantes::find($id);
        
            // Verifique se o registro pertence ao usuário autenticado
            if ($niver && $niver->user_id === $user->id) {
                //... lógica de validação dos dados e manipulação do formulário ...
        
                $validator = Validator::make($request->all(), [
                    'name' => 'required',
                    'surname' => 'required',
                    'gender' => 'required',
                    'date_birth' => 'required',
                ]);
        
                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                   
                }

                
                // Atualize os campos do registro com os novos valores
                $niver->name = $request->input('name');
                $niver->surname = $request->input('surname');
                $niver->gender = $request->input('gender');
                $niver->date_birth = $request->input('date_birth');
      
        
                if ($request->hasFile('image') && $request->file('image')->isValid()) {
                    // ... lógica para processamento e salvamento da imagem 
                    $requestImage = $request->image;
            
                    $extension = $requestImage->extension();
                
                    $imageName = md5($requestImage->getClientOriginalName() . strtok('now') . "." . $extension);
                
                    $requestImage->move(public_path('img/foto_aniversario'), $imageName);
                
                    // Atualizando o nome da imagem no array $data
                    $niver['image'] = $imageName;
                }
        
                $niver->save();
        
                return redirect('/Aniversariantes/show')->with('msg', 'Atualizado com sucesso');
            } else {
                // Se o registro não pertencer ao usuário autenticado, redirecione ou retorne um erro adequado
                return redirect('/Aniversariantes/show')->with('error', 'Você não tem permissão para editar este registro.');
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
        aniversariantes::findorFail($id)->delete();
        return redirect('/Aniversariantes/show')->with('msg','Aniversariante apagado com sucesso');
    }

   

}
