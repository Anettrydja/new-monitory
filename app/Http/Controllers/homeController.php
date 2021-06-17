<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function apps(){
        $apps = DB::select("select * from apps");
        return view("home",["apps"=>$apps]);
    }
}
