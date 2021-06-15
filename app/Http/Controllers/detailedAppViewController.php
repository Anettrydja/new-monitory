<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class detailedAppViewController extends Controller
{
    public function apps(){
        $app = DB::select("select * from app");
        return view("detailedappview",["app"=>$app]);
    }

    public function view($id) {
        $app = DB::select('select * from app where id = ?',[$id]);
        return view("detailedappview",["app"=>$app]);
    }

}
