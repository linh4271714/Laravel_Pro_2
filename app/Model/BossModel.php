<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class BossModel extends Model
{
    protected $table = 'boss';
    
    public function login_boss_process($boss)
    {
        $email = $boss->email;
        $pass  = $boss->pass;
        $boss_result = DB::select("select * from $this->table where Email = ? and Pass = ?",[$email,$pass]);
        
        $demSoBanGhi = count($boss_result);
        return $demSoBanGhi;
    }

    public function get_accout()
    {
        $array_boss = DB::select("select * from $this->table");
        return $array_boss;
    }

    public function get_pass()
    {
        $pass = DB::select("select Pass from $this->table");
        return $pass[0];
    }

    public function boss_edit_accout_process()
    {
        DB::update("update $this->table
        set Username = ?, Email = ?, PhoneNumber = ?",
        [$this->userName, $this->email, $this->phone]);
    }
}
