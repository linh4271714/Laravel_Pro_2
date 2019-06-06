<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view_all()
    {
        return "This is all books";
    }
    public function view_one($ID_book)
    {
        return "This is the $ID_book book";
    }
}
