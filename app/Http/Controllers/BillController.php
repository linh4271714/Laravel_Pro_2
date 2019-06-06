<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view_all()
    {
        return "This is all bills";
    }
    public function view_one($ID_bill)
    {
        return "This is the $ID_bill bill";
    }
}
