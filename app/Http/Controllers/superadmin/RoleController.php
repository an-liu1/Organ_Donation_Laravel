<?php

namespace App\Http\Controllers\superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\superadmin\Role;
use App\superadmin\Auth;
use Input;

class RoleController extends Controller
{
    public function index(){
        $data = Role::get();
        return view('superadmin/role/index',compact('data'));
    }

    public function assign(){
        if(Input::method() == 'POST'){
            $data = Input::only(['id','auth_id']);
            $role = new Role();
            return $role -> assignAuth($data);  
        }else{
            $top = Auth::where('pid','0') -> get();
            $cat = Auth::where('pid', '!=', '0') -> get();
            $ids = Role::where('id',Input::get('id')) -> value('auth_ids');
            return view('superadmin/role/assign',compact('top','cat','ids'));
        }
    }
}
