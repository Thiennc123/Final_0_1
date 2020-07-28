<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

use RealRashid\SweetAlert\Facades\Aler;

class AuthController extends Controller
{
	

	public function getLogin()
	{
		return view('login');
	}

    public function postLogin(Request $request)
    {
    	$array = $request->only('email', 'password');

        $validate = $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

    	if(Auth::attempt($array))
    	{
            $user = Auth::User();
            $request->session()->put('data',Auth::User());
            if($user->userName === 'admin')
    		  return redirect('Manage')->with('info','Success');
            else
                return redirect('Feeds_Photo')->with('info','123');
    	}else{
    		return view('login')->with('info','Dang nhap that bai! Email hoac mat khau khong dung');
    	}
    	
    	
    }

    public function logout()
    {
    	Auth::logout();
        session()->forget('data');
    	return redirect('Feeds_Photo');
    }

    public function getRegister()
    {
    	return view('signup');
    }

    public function setRegister(Request $request)
    {
        $validate = $request->validate([
            'userName'=>'unique:users',
            'email'=>'required|unique:users',
            

        ]);

    	$user = new User();
    	$user->userName = $request->userName;
    	$user->firstName = $request->firstName;
    	$user->lastName = $request->lastName;
    	$user->email=$request->email;
    	$user->password = bcrypt($request->password);

        // if($request->hasfile('image'))
        // {
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$extension;
        //     $file->move('image',$filename);
            $url = '/storage/default.jpg';
            
            $user->avatar = $url;
        // }else{
        //     return dd('dsfds');
        // }
    	$user->save();
    	return view('login');
    }
}
