<?php

namespace App\Http\Controllers\superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\superadmin\Manager;
use Auth;

class IndexController extends Controller
{
    public function login(){
        return view('superadmin/public/login');
    }

    public function welcome(){
        return view('superadmin/index/welcome');
    }

    public function check(Request $request){
        $this -> validate($request, [
            'username' => 'required|min:2|max:20',
            'password' => 'required|min:6',
            'captcha'  => 'required|min:4|captcha',
        ]);

        $data = $request -> only(['username','password']);
        $result = Auth::guard('superadmin') -> attempt($data,$request-> get('online'));

        if($result){
            return redirect('/superadmin/index/index');
        }else{
            return redirect('/superadmin/public/login') -> withErrors([
                'loginError' => 'wrong username or password!'
            ]);
        }
    }

    public function logout(){
        Auth::guard('superadmin') -> logout();
        return redirect('superadmin/public/login');
    }

    public function index(){
        return view('superadmin/index/index');
    }
}
