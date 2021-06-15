<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function apps(){
        $apps = DB::select("select * from app");
        return view("home",["apps"=>$apps]);
    }
}
