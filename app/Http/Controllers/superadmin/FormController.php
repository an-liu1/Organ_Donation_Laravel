<?php

namespace App\Http\Controllers\superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin\User;

class FormController extends Controller
{
    public function index(){
        $user = User::get();
        return view('superadmin\form\index', compact('user'));
    }

    public function delete($id){
        $result = User::where('id',$id) -> update([
            'donor_form' => '',
        ]);

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
