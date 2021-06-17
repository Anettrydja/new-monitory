<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class addNewUserController extends Controller
{
    protected $table = 'monitory';
    public function insertform(){
        return view('addNewUser');
    }

    function add(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:user',
            'password'=>'required',
            'type'=>'required',
        ]);

        $query = DB::table('users')->insert([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
            'type'=>$request->input('type'),

        ]);

        if($query){
            return back()->with('success', 'Kõik korras');
        } else {
            return back()->with('fail', 'Error');
        }
    }
}
