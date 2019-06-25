<?php

namespace App\Model;

use DB;

class ManagerModel
{
    protected $table = 'managers';
    
    public function mng_login_process()
    {
        $mng_array = DB::select("select * from $this->table 
            where Email = ? and Pass = ? 
            limit 1",[
                $this->email, $this->pass
            ]);
        return $mng_array;
    }

    public function get_accout()
    {
        $array_mng = DB::select("select * from $this->table where ID_manager = ?",
            [$this->ID]);
        return $array_mng;
    }

    public function mng_edit_accout_process()
    {
        DB::update("update $this->table
        set Username = ?, Email = ?, PhoneNumber = ?. Address = ? where ID_manager = ?",
        [$this->userName, $this->email, $this->phone, $this->add, $this->ID]);
    }

    public function mng_change_password_process()
    {
        DB::update("update $this->table 
            set Pass = ? where ID_manager = ?", [$this->pass, $this->ID]);
    }

    public function get_all_author()
    {
        $array_author = DB::select('select * from authors');
        return $array_author;
    }

    public function get_all_category()
    {
        $array_category = DB::select('select * from categories');
        return $array_category;
    }

    public function get_all_publisher()
    {
        $array_publisher = DB::select('select * from publishers');
        return $array_publisher;
    }

    public function mng_add_category_process()
    {
        DB::insert('insert into categories (Category) values (?, ?, ?, ?, ?)', [1, 'Dayle'])
    }
}