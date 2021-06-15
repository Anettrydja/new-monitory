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
        echo "Record deleted successfully.
        ";
        echo 'Click Here to go back.';
        }
}
