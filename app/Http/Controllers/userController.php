<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function users(){
        $users = DB::select("select * from users");
        return view("users",["users"=>$users]);
    }
}
