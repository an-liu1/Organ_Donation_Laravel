<?php

namespace App\superadmin;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';
    public $timestamps = false;

    public function assignAuth($data){

    	$post['auth_ids'] = implode(',', $data['auth_id']);//1,2,3,4
    
    	$tmp = \App\superadmin\Auth::where('pid','!=','0') -> whereIn('id',$data['auth_id']) -> get();
    	//controller  action
    	$ac = '';
    	foreach ($tmp as $key => $value) {
    		$ac .= $value -> controller . '@' . $value -> action . ',';
    	}
    	$post['auth_ac'] = strtolower(rtrim($ac,','));
    	return self::where('id',$data['id']) -> update($post);
    }
}
