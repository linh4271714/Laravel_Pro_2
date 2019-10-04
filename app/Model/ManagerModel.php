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
        set Username = ?, Email = ?, PhoneNumber = ?, Address = ? where ID_manager = ?",
        [$this->userName, $this->email, $this->phone, $this->add, $this->ID]);
    }

    public function mng_change_password_process()
    {
        DB::update("update $this->table 
            set Pass = ? where ID_manager = ?", [$this->pass, $this->ID]);
    }

    public function get_all_author()
    {
        $array_author = DB::select('select * from authors order by Name');
        return $array_author;
    }

    public function get_all_category()
    {
        $array_category = DB::select('select * from categories order by Category');
        return $array_category;
    }

    public function get_all_publisher()
    {
        $array_publisher = DB::select('select * from publishers order by Name');
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

    public function get_newest_book()
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
            order by ID_book desc limit 1');
    }

    public function get_all_book_for_bill()
    {
        return $array_name = DB::select('select *, books.Name as nameBook, authors.Name as nameAuthor, publishers.Name as namePublisher
            from books join authors on books.ID_author = authors.ID_author
            join publishers on books.ID_publisher = publishers.ID_publisher
            order by ID_book');
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

    public function mng_add_new_bill_process()
    {
        DB::insert('insert into bills (ReaderName,  ID_reader, Lender, BorrowDate, Total, Status) values (?, ?, ?, ?, ?, ?)', [
                $this->reader, $this->idreader, $this->idlender, $this->borrowdate, $this->total, $this->status
        ]);
    }

    public function select_newest_bill(){
        return DB::select('select max(ID_bill) as maxbill from bills');
    }

    public function mng_add_detail_invoice($collection3, $collection2){
        for ($i=0; $i<$collection2->count(); $i++) { 
            DB::insert('insert into detailedinvoice (ID_bill, ID_book, Amount) values (?, ?, ?)', [
                $this->newest_bill[0]->maxbill, $collection3[$i], $collection2[$i]
            ]);
        }
    }

    public function get_price_book()
    {
        $sum = DB::select('select sum(Price) from books 
            where ID_book = ID_book_1 or ID_book = ID_book_2 or ID_book = ID_book_3');
        return $deposit = $sum/2;
    }
    public function search_bill_borrowing(){
        return $array_bill = DB::select('select *,
            datediff(CURRENT_DATE,bills.BorrowDate) as soNgayMuon from bills join detailedinvoice
            on bills.ID_bill = detailedinvoice.ID_bill
            join managers on bills.Lender = managers.ID_manager
            where ID_reader = ? and Status = ?', [
                $this->idreader, $this->status
            ]);
    }
    public function get_detailed(){
        return $array_detailed = DB::select('select *, datediff(CURRENT_DATE,bills.BorrowDate) as soNgayMuon 
            from detailedinvoice join books
            on detailedinvoice.ID_book = books.ID_book join bills on bills.ID_bill=detailedinvoice.ID_bill
            where detailedinvoice.ID_bill = ?', [
                $this->idbill
            ]);
    }

    public function mng_search_all_bill_process()
    {
        return $array_bill = DB::select("select * from bills 
            join managers on bills.Lender = managers.ID_manager 
            order by bills.ID_bill desc");
    }

    public function mng_search_bill_process()
    {
        $id = $this->idreader;
        $bd = $this->borrowdate;
        $rd = $this->receivedate;
        return $array_bill = DB::select("select * from bills 
            join managers on bills.Lender = managers.ID_manager
            where ID_reader like '%$id%' and BorrowDate like '%$bd%' and ReturnDate like '%$rd%' 
            order by bills.ID_bill desc");
    }
    public function detailBill()
    {
        return DB::select("select a.Username, a.BorrowDate, a.ReturnDate, a.Amount, a.Total, books.Name,
            ifnull(datediff(ReturnDate,BorrowDate)*2*a.Amount,0) as tongGiaTriHoaDon 
            from books inner join (
            select managers.Username, BorrowDate, ReturnDate, ID_book, Amount, Total 
            from bills join managers on bills.Lender= managers.ID_manager 
            join detailedinvoice on detailedinvoice.ID_bill=bills.ID_bill 
            where detailedinvoice.ID_bill=?
            )a on a.ID_book=books.ID_book",[$this->maHoaDon]);
    }
}