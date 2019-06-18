<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\BossModel;

class BossController extends Controller
{
    private $folder = 'boss';

    public function boss_view_accout()
    {
        $boss_model = new BossModel();
        $array_boss = $boss_model->get_accout();

        return view('boss_view_all',compact('array_boss'));
    }

    public function boss_check_password()
    {
        return view('boss_check_password');
    }
    public function check_password_process(Request $request)
    {
        $pass_check = Request::post('pass_check');
        $boss_model = new BossModel();
        $pass       = $boss_model->get_pass();
        if($pass==$pass_check){
            return view('boss_edit_accout');
        }
    }

    public function boss_edit_accout()
    {
        $boss_model = new BossModel();
        $array_boss = $boss_model->get_accout();

        return view('boss_edit_accout',compact('array_boss'));
    }
    public function boss_edit_accout_process(Request $request)
    {
        $boss           = new BossModel();
        $boss->userName = Request::post('userName');
        $boss->email    = Request::post('email');
        $boss->phone    = Request::post('phone');
        $boss->boss_edit_accout_process();

        return redirect()->route('boss_view_all');
    }
}
