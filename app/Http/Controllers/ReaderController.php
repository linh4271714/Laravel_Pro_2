<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReaderController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view_all()
    {
        return "This is all readers";
    }
    public function view_one($ID_reader){
        return "This is reader $ID_reader";
    }
}
