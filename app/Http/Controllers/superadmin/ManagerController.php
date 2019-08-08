<?php

namespace App\Http\Controllers\superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\superadmin\Manager;

class ManagerController extends Controller
{
    public function index(){
        $data = Manager::get();
        return view('superadmin/manager/index', compact('data'));
    }
}
