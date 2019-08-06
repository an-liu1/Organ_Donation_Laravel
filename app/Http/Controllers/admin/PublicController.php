<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Input;
use App\admin\User;
// use App\admin\Donor;
// use App\admin\Redeem;


class PublicController extends Controller
{
    function login(){
        return view('admin/public/login');
    }

    public function check(Request $request){
        $this -> validate($request, [
            'username' => 'required|min:2|max:20',
            'password' => 'required|min:4',
            'captcha'  => 'required|captcha|size:4',
        ]);
        
        $data = $request -> only(['username','password']);
        // $data['status'] = '2';
        $result = Auth::guard('admin') -> attempt($data, $request-> get('online'));
        if($result){
            $last_login_time = date('d', strtotime(Auth::guard('admin') -> User() -> last_login_time));
            $now = date('d');
            
            if($last_login_time != $now){
                Auth::guard('admin') -> User() -> update([
                    'last_login_ip' => $request->ip(),
                    'last_login_time' => date('Y-m-d H:i:s', time()),
                    'status' => '1',
                ]);
                
            }else{
                Auth::guard('admin') -> User() -> update([
                    'last_login_ip' => $request->ip(),
                    'last_login_time' => date('Y-m-d H:i:s', time()),
                    'status' => '2',
                ]);
            }
            // $userinfo = User::where('username',$data['username']) -> get();
            // $donor = Donor::get();
            // $redeem = Redeem::get();
            // return view('/admin/index/index',compact('donor','redeem'));
            return redirect('admin/index/index');
        }else{
            return redirect('/admin/public/login') -> withErrors([
               'loginError' => 'wrong usename or password!', 
            ]);
        }

    }

    public function signup(Request $request){
        
       if(Input::method() == 'POST'){
            $this -> validate($request,[
                'username' => 'required|min:2|max:20',
                'password' => 'required|min:6',
                'name'     => 'required|min:2',
                'tel'      => 'required|numeric',
                'email'    => 'required|email',
                'check'    => 'required',
            ]);

            $data = Input::except(['_token','saveForm','check']);
            $data['password'] = bcrypt(Input::get('password'));
            $data['points'] = '300';
            $data['last_login_ip'] = $request->ip();
            $data['created_at'] = date('Y-m-d H:i:s', time());
            // dd($data);
            if(User::insert($data)){
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
       }else{
           return view('admin/public/signup');
       }
    }

    public function logout(){
        Auth::guard('admin') -> logout();
        return redirect('admin/public/login');
    }
}
