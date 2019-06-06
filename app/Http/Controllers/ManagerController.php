<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view_all()
    {
        return view('view_all');
    }
    public function view_one($ID_manager){
        return "This is manager $ID_manager";
    }
}
