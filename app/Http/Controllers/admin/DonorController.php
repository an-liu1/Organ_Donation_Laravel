<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin\User;
use Auth;

class DonorController extends Controller
{
    public function index(){
        return view('admin/donor/index');
    }

    public function submitForm(Request $request){
        if($request -> hasFile('file') && $request -> file('file') -> isValid()){
            $request -> file('file') -> move('./admin/upload_donorform', md5(time() . rand(100000,999999)) . '.' . $request ->file('file') -> getClientOriginalExtension());

            $data = $request ->all();
            $form_name = './admin/upload_donorform/' . md5(time() . rand(100000,999999)) . '.' . $request ->file('file') -> getClientOriginalExtension();
            $result = Auth::guard('admin') -> User() -> update([
                'donor_form' => $form_name,
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
}
