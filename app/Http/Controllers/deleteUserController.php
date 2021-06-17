<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class deleteUserController extends Controller
{
    public function index(){
        $user = DB::select('select * from user');
        return view('deleteUser',['user'=>$user]);
        }

        public function destroy($id) {
        DB::delete('delete from user where id = ?',[$id]);
        // echo ("<body style='background-color:blue'><h1> Kasutaja on kustutatud!</h1> <br> <a href=/users>Mine tagasi</a></body>");
        echo ("<body>
        <style>
        body {
            font-family: Helvetica;
            background-color: #A3CEF1;
          }
        
        #logoimage {
            text-align: center;
        }
        
        #container {
            display: flex;
            justify-content: space-between;
        }
        
        #container_one {
            background-color: #FFFFFF;
            width: 17.5%;
            height: 700px;
            border-radius: 50px;
            margin-left: 10%;
            min-width: 150px;
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
        }
        
        a {
            color: #FFFFFF;
            text-decoration: none;
        }
        
        button:not(#logout) {
            width: 80%;
            height: 50px;
            font-size: 16px;
            border-radius: 10px;
            margin: 5px;
            color: #FFFFFF;
            background-color: #386FA4;
            border-color: #386FA4;
            border-style: solid;
        }
        
        #logout {
            width: 80%;
            height: 30px;
            font-size: 14px;
            border-radius: 5px;
            margin: 10px 0 15px 0;
            background-color: #386FA4;
            border-color: #386FA4;
            border-style: solid;
        }
        
        #top {
            padding: 15px;
            text-align: center;
        }
        
        #profile {
            padding: 10px;
        }
        
        #usericon {
            width: 60px;
            height: 60px;
            vertical-align: middle;
        }
        
        #name {
            vertical-align: middle;
        }
        
        #bottom {
            padding: 15px;
            text-align: center;
            vertical-align: bottom;
            margin-top: auto;
        }
        
        #container_two {
            background-color: #FFFFFF;
            width: 57.5%;
            height: 700px;
            border-radius: 50px;
            margin-right: 10%;
            min-width: 250px;
        }
  </style>
        <br>
        <div id='container'> 
            <div id='container_one'>
                <div id='top'>
                    <button><a href='/addnewapp'>Lisa rakendus</a></button>
                    <button><a href=''>Teavitused</a></button>
                    <button><a href='detailedappview'>Detailne vaade</a></button>
                    <button><a href='/users'>Kasutajate haldus</a></button>
                    <button><a href='/home'>Avaleht</a></button>
                </div>
                <div id='bottom'>
                    <div id='profile'>
                        <span id='name'>Test Testerino</span>
                    </div>
                    <div id='profilebutton'>
                        <button><a href=''>Profiil/konto</a></button>
                    </div>
                    <button id='logout'><a href=''a>Logi välja</a>
                </div>
            </div>
            <div id='container_two'>
            <h1>Kasutaja on kustutatud</h1>
            <br>
            <button><a href=/users>Mine tagasi</a></button>
            </div>
        </div>
    </body>");
        }
}
