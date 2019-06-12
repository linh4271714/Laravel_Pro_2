<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Boss_Model extends Model
{
    protected $table = 'boss';
    public function login_boss_process()
    {
    	$email = $boss->email;
    	$pass = $boss->email;
    	$array_acc = select('select * from boss where Email = $email and Pass = $pass');
    	if(){
    		return view('view_boss');
    	}else{

    	}
    }
}
