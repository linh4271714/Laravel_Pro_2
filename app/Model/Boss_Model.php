<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Boss_Model extends Model
{
    protected $table = 'boss';
    public function login_boss_process($boss)
    {
    	$email = $boss->email;
    	$pass = $boss->email;
    	$array_acc = select('select * from $this->table where Email = $email and Pass = $pass');
    	if(){
    		return view('view_boss');
    	}else{

    	}
    }
    public function sign_in_boss_process($boss)
    {
        DB::insert("insert into $this->table values (?,?,?,?)",[$this->$userName, $this->$email, $this->$pass, $this->$phone]);
    }
}
