<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class addNewUserController extends Controller
{
    public function insertform(){
        return view('addNewUser');
    }

    function add(Request $request){
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'username'=>'required|email|unique:user',
            'password'=>'required',
            'status'=>'required',
        ]);

        $query = DB::table('user')->insert([
            'firstname'=>$request->input('firstname'),
            'lastname'=>$request->input('lastname'),
            'username'=>$request->input('username'),
            'password'=>$request->input('password'),
            'status'=>$request->input('status'),

        ]);

        if($query){
            return back()->with('success', 'Kõik korras');
        } else {
            return back()->with('fail', 'Error');
        }
    }
}
