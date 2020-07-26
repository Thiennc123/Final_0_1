<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Session;

use App\User;

use App\Photo;

class UserController extends Controller
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
         $user = User::find($id);
        return view('UpdateUser',['users'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $link)
    {
        $user = User::find($id);
       
        $user->userName = $request->input('userName');
        $user->firstName = $request->input('firstName');
        $user->lastName = $request->input('lastName');
        $user->email=$request->input('email');
        if($request->hasfile('link'))
        {

            $file = $request->file('link');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('image',$filename);
            $user->avatar = $filename;
           
        }

        if (Hash::check($request->input('password'), $user->password)) {
            $user->password =bcrypt($request->input('newPassword'));
        }

        $user->save();

        $listUsers = User::all();
        return view('Manage_User',['listUsers'=>$listUsers]);

        

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        $listUsers = User::all();
        return view('Manage_User',['listUsers'=>$listUsers]);
    }
}
