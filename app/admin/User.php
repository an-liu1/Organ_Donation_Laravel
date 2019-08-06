<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

class User extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    //
    use Authenticatable;
    protected $table = 'user';
    protected $fillable = ['usrname','password','name','tel','email','last_login_ip','last_login_time','donor_form','points','status'];

}
