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

    public function boss_add_manager()
    {
        return view('boss_add_manager');
    }

    public function boss_add_manager_process()
    {
        $boss_model = new BossModel();
        $boss_model->userName = Request::get('userName');
        $boss_model->email = Request::get('email');
        $boss_model->pass = Request::get('pass');
        $boss_model->phone = Request::get('phone');
        $boss_model->add = Request::get('add');
        $boss_model->boss_add_manager_process();
        return redirect()->route('boss_view_all_manager');
    }

    public function boss_view_all_manager()
    {
        $boss_model = new BossModel();
        $array_manager = $boss_model -> get_all_manager();

        return view('boss_view_all_manager',compact('array_manager'));
    }

    public function boss_add_notification()
    {
        return view('boss_add_notification');
    }

    public function boss_add_notification_process()
    {
        $boss_model = new BossModel();
        $boss_model->title = Request::get('title');
        $boss_model->date = date("Y-m-d h-i-sa");
        $boss_model->content = Request::get('content');
        $boss_model->boss_add_notification_process();

        return redirect()->route('boss_view_all_notification');
    }

    public function boss_view_all_notification()
    {
        $boss_model = new BossModel();
        $array_notification = $boss_model->get_all_notification();

        return view('boss_view_all_notification',compact('array_notification'));
    }
}
