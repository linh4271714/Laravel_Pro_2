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

    public function mng_add_category_process($collection)
    {
        for ($i=0; $i<$collection->count() ; $i++) { 
            DB::insert('insert into categories (Category) values (?)', [$collection[$i]]);
        }
    }

    public function mng_add_author_process($collection)
    {
        for ($i=0; $i<$collection->count() ; $i++) { 
            DB::insert('insert into authors (Name) values (?)', [$collection[$i]]);
        }
    }

    public function mng_add_publisher_process($collection)
    {
        for ($i=0; $i<$collection->count() ; $i++) { 
            DB::insert('insert into publishers (Name) values (?)', [$collection[$i]]);
        }
    }

    public function get_max_id($id_category)
    {
       $array = DB::select('select count(*) from books where ID_category = ?', [$id_category]);
       dd($array[0]);
       return $maxID = $array[0];
    }

    public function mng_import_book_process()
    {
        DB::insert('insert into books (Name, ID_author, ID_category, ID_publisher, Price, Quanlity, Image, Demo, Status, ImportDate, ID_manager) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [
            $this->name, $this->id_author, $this->id_category, $this->id_publisher, $this->price, 
            $this->quanlity, $this->image, $this->demo, $this->status, $this->importDate, $this->id_manager
        ]);
    }

    public function get_one_book()
    {
        return $array_book = DB::select('select 
            ID_book, books.Name, authors.Name as Author, categories.Category as Category, 
            publishers.Name as Publisher, Price, Quanlity, Image, Demo, Location, Damage, Status, ImportDate, 
            managers.Username as Manager
            from books 
            inner join authors on books.ID_author = authors.ID_author
            inner join categories on books.ID_category = categories.ID_category
            inner join publishers on books.ID_publisher = publishers.ID_publisher
            inner join managers on books.ID_manager = managers.ID_manager
            where ID_book = ?',[$this->id_book]);
    }
}