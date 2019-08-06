<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin\User;
use App\admin\Donor;
use App\admin\Redeem;
use Auth;

class IndexController extends Controller
{
    public function index(){
        $donor = Donor::get();
        $redeem = Redeem::get();
        return view('admin/index/index',compact('donor','redeem'));
    }

    public function click(){
        // dd(Auth::guard('admin') -> User() -> last_login_time);
        $status = Auth::guard('admin') -> User() -> status;
        if($status  == '1'){
            $point = Auth::guard('admin') -> User() -> points + 20;

            Auth::guard('admin') -> User() -> update([
                'points'  => $point,
                'status'  => '2',
            ]);
            return 1;
        }
            return 2;
    }


}
