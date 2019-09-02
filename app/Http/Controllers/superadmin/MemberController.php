<?php

namespace App\Http\Controllers\superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin\User;
use Input;
use Excel;
use Storage;

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

    public function export(){
        $cellData = [
            ['id','username','name','points','tel','email','register time', 'last login time','last login ip'],
        ];
        $data = User::all();
        foreach($data as $key => $value){
            $cellData[] = [
                $value -> id,
                $value -> username,
                $value -> name,
                $value -> points,
                $value -> tel,
                $value -> email,
                $value -> created_at,
                $value -> last_login_time,
                $value -> last_login_ip,    
            ];
        }

        Excel::create('User List',function($excel) use ($cellData){
            $excel -> sheet('user list', function($sheet) use($cellData){
                $sheet->rows($cellData);
            });
        })->export('xls'); 
    }

    public function webuploader(Request $request){
    	if($request -> hasFile('file') && $request -> file('file') -> isValid()){
    		$filename = sha1(time() . $request -> file('file') -> getClientOriginalName()) . '.' .  $request -> file('file') -> getClientOriginalExtension();
    		Storage::disk('public') -> put($filename, file_get_contents($request -> file('file') -> path()));
    		$result = [
    			'errCode'		=>		'0',
    			'errMsg'		=>		'',
    			'succMsg'		=>		'Successfully uiploaded file！',
    			'path'			=>		'/storage/' . $filename,
    		];
    	}else{
    		$result = [
    			'errCode'		=>		'000001',
    			'errMsg'		=>		$request -> file('file') -> getErrorMessage()
    		];
    	}
    	return response() -> json($result);
    }

    public function import(){
        if(Input::method() == 'POST'){
            $filePath = '.' . Input::get('excelpath');
            Excel::load($filePath,function($reader){
                $data = $reader -> getSheet(0) -> toArray();
                // print_r($data);
                $temp = [];
		        foreach ($data as $key => $value) {
		        	if($key == '0'){
		        		continue;
		        	}
		        	$temp[] = [
		        		'username'		  => $value[1],
		        		'name'		      => $value[2],
		        		'points'		  => $value[3],
		        		'tel'		      => $value[4],
		        		'email'		      => $value[5],
                        'created_at'	  => date('Y-m-d H:i:s'),
                        'last_login_time' => $value[7],
                        'last_login_ip'   => $value[8]
		        	];
		        	
                }
                print_r($temp);
                $result = User::insert($temp);
                echo $result? '1':'0';
            });
            
        }else{
            return view('superadmin\member\import');
        }
    }
}
