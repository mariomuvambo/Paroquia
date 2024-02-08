<?php

namespace App\Http\Controllers\Inbox;

use App\Http\Controllers\Controller;
use App\Models\notifyAvisos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;


class notifyAvisosController extends Controller
{
    private notifyAvisos $notifyAvisos;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mail = notifyAvisos::all();

        return view("/Inbox.read", compact('mail'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/Inbox.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'Address' => 'required',
            'participants' => 'required',
            'warningTime' => 'required',
            'description' => 'required',
            'DateExecution' => 'required|date',
            'DateNotice' => 'required|date',
        ]);


        $dateExecution = $request->input('DateExecution');
        $dateNotice = $request->input('DateNotice');

        if ($dateNotice >= $dateExecution) {
            return redirect('/Inbox/read')->with('msg','A data de aviso deve ser inferior ou igual à data de execução');
        }



        notifyAvisos::create([
            'title' =>$request->input('title'),
            'Address'=>$request->input('Address'),
            'participants'=>$request->input('participants'),
            'warningTime'=>$request->input('warningTime'),
            'description'=>$request->input('description'),
            'DateExecution'=>$request->input('DateExecution'),
            'DateNotice'=>$request->input('DateNotice'),
        ]);

        return redirect('/Inbox/create')->with('msg', 'Gravado com sucesso');

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
