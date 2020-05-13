<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index(){
        $user_user = User::all();
        return view('/User/admin', ['user_user' => $user_user]);
    }

    public function tambah(){
        return view('User/tambahadmin');
    }

    public function proses_tambah(Request $request){       

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  \Hash::make($request['password']),
        ]);
       
        
    

        $user->save();
        
        return redirect('/admin');
    }


}


