<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class BossModel extends Model
{
    protected $table = 'boss';
    
    public function boss_login_process()
    {
        $boss = DB::select("select * from $this->table 
            where Email = ? and Pass = ? 
            limit 1",[
                $this->email, $this->pass
            ]);
        return $boss;
    }

    public function get_accout()
    {
        $array_boss = DB::select("select * from $this->table limit 1");
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
