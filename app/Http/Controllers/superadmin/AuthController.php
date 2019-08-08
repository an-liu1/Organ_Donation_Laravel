<?php

namespace App\Http\Controllers\superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\superadmin\Auth;
use Input;
use DB;

class AuthController extends Controller
{
    public function index(){
        $data = DB::table('auth as t1') -> select('t1.*','t2.auth_name as parent_name') -> leftJoin('auth as t2','t1.pid','=','t2.id') -> get();
        return view('superadmin/auth/index', compact('data'));
    }

    public function add(){
        if(Input::method()  == 'POST'){
            $data = Input::except('_token');
            $result = Auth::insert($data);
            return $result? '1' : '0';
        }else{
            $data = Auth::where('pid','0') -> get();
            return view('superadmin/auth/add',compact('data'));
        }
    }
}
