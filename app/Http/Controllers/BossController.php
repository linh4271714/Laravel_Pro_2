<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class BossController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login_boss()
    {
        return view('login_boss');
    }
    public function login_boss_process()
    {
        $boss = new Boss();
        $boss->email = Request::post('email');
        $boss->pass = Request::post('pass');
        $boss_model = new BossModel();
        $boss_model->login_boss_process($boss);
    }
}
