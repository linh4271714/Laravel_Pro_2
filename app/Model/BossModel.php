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

    public function boss_add_manager_process()
    {
        DB::insert("insert into managers (Username, Email, Pass, PhoneNumber, Address) 
            values (?, ?, ?, ?, ?)", 
            [$this->userName, $this->email, $this->pass, $this->phone, $this->add]);
    }

    public function get_all_manager()
    {
        $array_manager = DB::select('select * from managers');
        return $array_manager;
    }

    public function boss_add_notification_process()
    {
        DB::insert("insert into notifications (Title, Date, Content) values (?, ?, ?)", 
            [$this->title, $this->date ,$this->content]);
    }

    public function get_all_notification()
    {
        $array_notification = DB::select("select * from notifications");
        return $array_notification;
    }

    public function get_all_book()
    {
        return $array_book = DB::select('select Image, Price, Quanlity, Location, ImportDate, Username,
            books.Name as bookname, authors.Name as authorname, publishers.Name as publishername 
            from books join authors on books.ID_author = authors.ID_author
            join publishers on books.ID_publisher = publishers.ID_publisher
            join managers on books.ID_manager = managers.ID_manager
            order by ID_book desc limit 10');
    }

    public function search_book()
    {
        $name = $this->name;
        $author = $this->author;
        $publisher = $this->publisher;
        return $array_result = DB::select("select Image, Price, Quanlity, Location, ImportDate, Username,
            books.Name as bookname, authors.Name as authorname, publishers.Name as publishername 
            from books join authors on books.ID_author = authors.ID_author
            join publishers on books.ID_publisher = publishers.ID_publisher
            join managers on books.ID_manager = managers.ID_manager
            where books.Name like '%$name%' and authors.Name like '%$author%' and publishers.Name like '%$publisher%'
            order by ID_book desc");
    }
}
