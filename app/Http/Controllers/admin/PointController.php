<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\admin\Redeem;

class PointController extends Controller
{
    public function index(){
        return view('/admin/point/index');
    }

    public function redeem($a,$p){

        $points = Auth::guard('admin') -> User() -> points;
        if($points > $p){
            $pointAfter = Auth::guard('admin') -> User() -> points - $p;
            Auth::guard('admin') -> User() -> update([
                'points'  => $pointAfter,
            ]);
            
            $data = [
                'name' => strtoupper(Auth::guard('admin') -> User() -> name),
                'points' => $p,
                'products' => $a,
                'redeem_time' => date('Y-m-d H:i:s'),
            ];
            Redeem::insert($data);

            return 1;
        }else{
            return 0;
        }
    }

    public function shipping(){
        return view('admin/point/shipping');
    }
}
