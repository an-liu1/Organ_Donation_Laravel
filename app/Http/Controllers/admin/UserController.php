<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class UserController extends Controller
{
    public function index(){
        return view('admin/user/index');
    }

    public function edit(Request $request){

        $this -> validate($request, [
            'name' => 'min:2|max:20',
            'new_pass' => 'min:6',
            'comfirm_pass' => 'min:6',
            'tel'      => 'numeric',
            'email'    => 'email',
        ]);
        
        $data = $request -> only(['name','new_pass','tel','email']);
        $result = Auth::guard('admin') -> User() -> update([
                    'name' => $data['name'],
                    'tel'  => $data['tel'],
                    'email' => $data['email'],
                    'password'  => bcrypt($data['new_pass']),
                ]);
        // return $result? 1 : 2;
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
