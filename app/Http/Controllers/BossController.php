<?php

namespace App\Http\Controllers;

use Request;
use Session;
use App\Model\BossModel;

class BossController extends Controller
{
    private $folder = 'boss';

    public function boss_login()
    {
        return view('boss_login');
    }

    public function boss_login_process(Request $request)
    {
        $boss        = new BossModel();
        $boss->email = Request::get('email');
        $boss->pass  = Request::get('pass');
        $boss_array  = $boss->boss_login_process();
        if(count($boss_array)==1){
            Session::put('username',$boss_array[0]->Username);

            return redirect()->route('boss_view_accout');
        }
        return redirect()->route('boss_login')->with('error','Login information is incorrect.');
    }

    public function boss_view_accout()
    {
        $boss_model = new BossModel();
        $array_boss = $boss_model->get_accout();

        return view('boss_view_accout',compact('array_boss'));
    }

    public function boss_check_password()
    {
        return view('boss_check_password');
    }

    public function boss_check_password_process()
    {
        $pass_check = Request::get('pass_check');
        $boss_model = new BossModel();
        $array_boss = $boss_model->get_accout();
        $pass       = $array_boss[0]->Pass;
        if($pass==$pass_check){
            return redirect()->route('boss_edit_accout');
        }
        return redirect()->route('boss_check_password')->with('error','Incorrect password.');
    }

    public function boss_check_password_2()
    {
        return view('boss_check_password_2');
    }

    public function boss_check_password_process_2()
    {
        $pass_check = Request::get('pass_check');
        $boss_model = new BossModel();
        $array_boss = $boss_model->get_accout();
        $pass       = $array_boss[0]->Pass;
        if($pass==$pass_check){
            return redirect()->route('boss_change_password');
        }
        return redirect()->route('boss_check_password_2')->with('error','Incorrect password.');
    }

    public function boss_edit_accout()
    {
        $boss_model = new BossModel();
        $array_boss = $boss_model->get_accout();

        return view('boss_edit_accout',compact('array_boss'));
    }

    public function boss_edit_accout_process()
    {
        $boss           = new BossModel();
        $boss->userName = Request::get('userName');
        $boss->email    = Request::get('email');
        $boss->phone    = Request::get('phone');
        $boss->boss_edit_accout_process();

        return redirect()->route('boss_view_accout')->with('success','Edit successful!');
    }

    public function boss_change_password()
    {
        return view('boss_change_password');
    }

    public function boss_change_password_process()
    {
        $boss_model = new BossModel();
        $boss_model->pass = Request::get('pass');
        $boss_model->boss_change_password_process();
        return redirect()->route('boss_view_accout')->with('success','Change successful!');
    }

    public function boss_logout()
    {
        Session::flush();
        return redirect()->route('boss_login')->with('success','Logout successful.');
    }
}
