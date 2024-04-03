<?php

namespace App\Http\Controllers;

use App\Models\aniversariantes;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    private User $user; 

    public function __construct(User $user){
        $this->user = $user;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $users = $this->user->all();
   
        return view("/User/show", compact("users"));
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
    public function edit(User $user)
    {
        return view("/User/edit", compact("user"));

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
        $update = $this->user->where('id', $id)->update($request->except('_token', '_method', 'role'));


        if ($update) {
            return redirect('/User/show')->with('msg','Editado com sucesoo');
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
        
        $this ->user->where('id', $id)->delete();
        return redirect('/User/show')->with('msg','Apagado com sucesso');
    }

    public function showStatistics()
    {
        $totalUsers = User::count();
        $totalBirthdays = aniversariantes::count();
        
        return view('statistics', compact('totalUsers', 'totalBirthdays'));
    }
}
