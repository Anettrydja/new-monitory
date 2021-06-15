<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class addNewAppController extends Controller
{
    public function insertform(){
        return view('addNewApp');
    }

    function add(Request $request){
        $request->validate([
            'name'=>'required',
            'platform'=>'required',
            'url'=>'required',
            'server_address'=>'required',
            'server_place'=>'required',
            'contact'=>'required',
            'version'=>'required',
            'client'=>'required',
        ]);

        $query = DB::table('app')->insert([
            'name'=>$request->input('name'),
            'platform'=>$request->input('platform'),
            'url'=>$request->input('url'),
            'server_address'=>$request->input('server_address'),
            'server_place'=>$request->input('server_place'),
            'contact'=>$request->input('contact'),
            'version'=>$request->input('version'),
            'client'=>$request->input('client'),
            'comments'=>$request->input('comments'),
        ]);

        if($query){
            return back()->with('success', 'Läksid databasei');
        } else {
            return back()->with('fail', 'Mingi jama on');
        }
    }
}
