<?php

namespace App\Http\Controllers\superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\superadmin\Manager;
use Excel;

class ManagerController extends Controller
{
    public function index(){
        $data = Manager::get();
        return view('superadmin/manager/index', compact('data'));
    }

    public function export(){
        $cellData = [
            ['id','username','gender','mobile','email','role','register time'],
        ];
        $data = Manager::all();
        foreach($data as $key => $value){
            if($value -> gender  == '1'){$value -> gender = 'Male';}else{$value -> gender = 'Female';}
            $cellData[] = [
                $value -> id,
                $value -> username,
                $value -> gender,
                $value -> mobile,
                $value -> email,
                $value -> role->role_name,
                $value -> created_at,
            ];
        }

        Excel::create('User List',function($excel) use ($cellData){
            $excel -> sheet('user list', function($sheet) use($cellData){
                $sheet->rows($cellData);
            });
        })->export('xls'); 
    }
}
