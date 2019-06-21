<?php

namespace App\Model;

use DB;

class BossModel
{
    protected $table = 'boss';
    
    public function boss_login_process()
    {
        $boss_array = DB::select("select * from $this->table 
            where Email = ? and Pass = ? 
            limit 1",[
                $this->email, $this->pass
            ]);
        return $boss_array;
    }

    public function get_accout()
    {
        $array_boss = DB::select("select * from $this->table limit 1");
        return $array_boss;
    }

    public function boss_edit_accout_process()
    {
        DB::update("update $this->table
        set Username = ?, Email = ?, PhoneNumber = ?",
        [$this->userName, $this->email, $this->phone]);
    }

    public function boss_change_password_process()
    {
        DB::update("update $this->table 
            set Pass = ?", [$this->pass]);
    }
}
