<?php

namespace App\Http\Controllers\superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin\Redeem;

class ProductController extends Controller
{
    public function index(){
        $product = Redeem::get();
        return view('superadmin/product/index',compact('product'));
    }
}
