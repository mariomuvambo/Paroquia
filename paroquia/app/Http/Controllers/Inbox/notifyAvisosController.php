<?php

namespace App\Http\Controllers\Inbox;

use App\Http\Controllers\Controller;
use App\Models\avisos;
use App\Notifications\UserAvisosNotify;
use App\Models\User;
use App\Notifications\UserReadNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;


class notifyAvisosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $notifications = $user->notifications;
    
        return view('Inbox.read', compact('notifications'));
    }
    
    public function markAsRead( $id)
    {
        if($id){
            auth()->user()->notifications->where('id', $id)->markAsRead();
        }
        return back();
    }

    public function allRead(){
        auth()->user()->unreadNotifications->markAsRead();
        return back();
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
             'address' => 'required',
             'participants' => 'required',
             'warningTime' => 'required',
             'description' => 'required',
             'date_execution' => 'required|date',
             'date_notice' => 'required|date',
         ]);
     
         if ($validator->fails()) {
             return redirect()->back()->withErrors($validator)->withInput(); // Return validation errors and keep form data
         }
     
         $dateExecution = $request->input('date_execution');
         $dateNotice = $request->input('date_notice');
     
         if ($dateNotice >= $dateExecution) {
             return back()->with('msg', 'The notice date must be before the execution date'); // Corrected error message
         }
     
         $notificationData = [
             'title' => $request->input('title'),
             'address' => $request->input('address'),
             'participants' => $request->input('participants'),
             'warningTime' => $request->input('warningTime'),
             'description' => $request->input('description'),
             'date_execution' => $dateExecution,
             'date_notice' => $dateNotice,
         ];
     
         $notification = $this->createNotification($notificationData);
     
         return redirect()->route('inbox.create')->with('msg', 'Successfully saved'); // Corrected route name and success message
     }
     
     private function createNotification($notificationData)
     {
         $notification = Avisos::create($notificationData);
     
         // Notify all users about the new notification
         $users = User::all();
         Notification::send($users, new UserReadNotification(
             $notificationData['title'],
             $notificationData['participants'],
             $notificationData['description'],
             $notificationData['address'],
             $notificationData['date_execution'],
             $notificationData['date_notice'],
             $notificationData['warningTime']
         ));
     
         foreach ($users as $user) {
             $user->notify(new UserAvisosNotify($notification));
         }
     
         return $notification;
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

    // public function notificaUser(){ 

    //     if(auth()->user()){
    //         $user = User::first();
    //         $user->notify( new notificaUser($user));
    //     }
    //     dd('ok');
       
    // }

    // public function markAsRead($id){
    //     if($id){
    //         auth()->user()->notifyAvisos->where('id',$id)->markAsRead();
    //     }
    //     return back();
    // }

}
