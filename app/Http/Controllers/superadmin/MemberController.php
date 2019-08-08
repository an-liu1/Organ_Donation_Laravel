<?php

namespace App\Http\Controllers\superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin\User;
use Input;

class MemberController extends Controller
{
    public function index(){
        $data = User::get();
        return view('superadmin/member/index',compact('data'));
    }

    public function add(){
        if(Input::method()  == 'POST'){
            if(User::where('username', '=',Input::get('username')) -> exists()){
                return '3';
            }
            $result = User::Insert([
                'username'		=>		Input::get('username'),
                'name'		    =>		Input::get('name'),
                'password'		=>		bcrypt('password'),
                'points'		=>		'300',
                'tel'		    =>		Input::get('tel'),
                'email'			=>		Input::get('email'),
                'status'		=>		'1',
                'created_at'	=>		date('Y-m-d H:i:s')
            ]);
            return $result ? '1':'2';

        }else{
            return view('superadmin/member/add');
        }

    }

    public function edit($id){
        if(Input::method()  == 'POST'){
            $result = User::where('id', $id) -> update([
                'username'		=>		Input::get('username'),
                'name'		    =>		Input::get('name'),
                'password'		=>		bcrypt('password'),
                'tel'		    =>		Input::get('tel'),
                'email'			=>		Input::get('email'),
            ]);
            return $result? '1' : '2';
        }else{
            $user = User::where('id', $id) -> get();
            return view('superadmin/member/edit',compact('user'));
        }
    }

    public function delete($id){
        $result = User::where('id',$id) -> delete();
        if($result){
            return response()->json(array(
                'status' => 1,
                'msg' => 'ok',		                        	            
            ));
        }else{
            return response()->json(array(
                'status' => 2,
                'msg' => 'fail',		                        	            
            ));
        }
    }
}
