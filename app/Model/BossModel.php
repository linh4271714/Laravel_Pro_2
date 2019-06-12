<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class BossModel extends Model
{
    protected $table = 'boss';
    /*public function login_boss_process($boss)
    {
    	$email = $boss_model->email;
    	$pass = $boss_model->email;
    	$array_acc = select('select * from $this->table where Email = $email and Pass = $pass');
    }*/

    public function sign_in_boss_process()
    {
        DB::insert("insert into $this->table values (?,?,?,?)",[$this->userName, $this->email, $this->pass, $this->phone]);
    }

    public function get_all()
    {
        $array_boss = DB::select("select * from $this->table");
        return $array_boss;
    }
}
