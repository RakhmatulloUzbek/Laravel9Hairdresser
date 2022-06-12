<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.user.index');
    }

    public function comments(){

        $comments = Comment::where('user_id','=',Auth::id())->get();
        return view('home.user.comment',[
            'comments'=>$comments
        ]);
    }
    public function appointments(){

        $workers = User::all();
        $appointments = Appointment::where('user_id','=',Auth::id())->orWhere('worker_id','=',Auth::id())->get();
        return view('home.user.appointment',[
            'appointments'=>$appointments,
            'workers'=>$workers
        ]);
    }
    public function appointmentupdate(Request $request, $id)
    {
        $data= Appointment::find($id);
        $data->status=$request->input('status','Canceled');
        $data->save();
        return redirect('userpanel/userappointments/');
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
    public function commentdestroy($id)
    {
        $data= Comment::find($id);
        $data->delete();
        return redirect('userpanel/usercomments/');
    }
    public function appointmentsdestroy($id)
    {
        $data= Appointment::find($id);
        $data->delete();
        return redirect('userpanel/userappointments/');
    }
}
