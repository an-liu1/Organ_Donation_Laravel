<?php

namespace App\superadmin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

class Manager extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use Authenticatable;
    protected $table = 'manager';

    public function role(){
        return $this -> hasOne('App\superadmin\Role', 'id', 'role_id');
    }
    
}
