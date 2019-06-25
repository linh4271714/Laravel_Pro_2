<?php

namespace App\Http\Controllers;

use Request;
use Session;
use App\Model\ManagerModel;

class ManagerController extends Controller
{
    private $folder = 'managers';

    public function mng_login()
    {
        return view('mng_login');
    }

    public function mng_login_process(Request $request)
    {
        $mng        = new ManagerModel();
        $mng->email = Request::get('email');
        $mng->pass  = Request::get('pass');
        $mng_array  = $mng->mng_login_process();
        if(count($mng_array)==1){
            Session::put('ID_manager',$mng_array[0]->ID_manager);

            return redirect()->route('mng_view_accout');
        }
        return redirect()->route('mng_login')->with('error','Login information is incorrect.');
    }

    public function mng_view_accout()
    {
        $mng_model = new ManagerModel();
        $mng_model->ID = Session::get('ID_manager');
        $array_mng = $mng_model->get_accout();

        return view('mng_view_accout',compact('array_mng'));
    }

    public function mng_check_password()
    {
        return view('mng_check_password');
    }

    public function mng_check_password_process()
    {
        $pass_check = Request::get('pass_check');
        $mng_model = new ManagerModel();
        $mng_model->ID = Session::get('ID_manager');
        $array_mng = $mng_model->get_accout();
        $pass       = $array_mng[0]->Pass;
        if($pass==$pass_check){
            return redirect()->route('mng_edit_accout');
        }
        return redirect()->route('mng_check_password')->with('error','Incorrect password.');
    }

    public function mng_check_password_2()
    {
        return view('mng_check_password_2');
    }

    public function mng_check_password_process_2()
    {
        $pass_check = Request::get('pass_check');
        $mng_model = new ManagerModel();
        $mng_model->ID = Session::get('ID_manager');
        $array_mng = $mng_model->get_accout();
        $pass       = $array_mng[0]->Pass;
        if($pass==$pass_check){
            return redirect()->route('mng_change_password');
        }
        return redirect()->route('mng_check_password_2')->with('error','Incorrect password.');
    }

    public function mng_edit_accout()
    {
        $mng_model = new ManagerModel();
        $mng_model->ID = Session::get('ID_manager');
        $array_mng = $mng_model->get_accout();

        return view('mng_edit_accout',compact('array_mng'));
    }

    public function mng_edit_accout_process()
    {
        $mng           = new ManagerModel();
        $mng->ID = Session::get('ID_manager');
        $mng->userName = Request::get('userName');
        $mng->email    = Request::get('email');
        $mng->phone    = Request::get('phone');
        $mng->add    = Request::get('add');        
        $mng->mng_edit_accout_process();

        return redirect()->route('mng_view_accout')->with('success','Edit successful!');
    }

    public function mng_change_password()
    {
        return view('mng_change_password');
    }

    public function mng_change_password_process()
    {
        $mng_model = new ManagerModel();
        $mng_model->ID = Session::get('ID_manager');
        $mng_model->pass = Request::get('pass');
        $mng_model->mng_change_password_process();
        return redirect()->route('boss_view_accout')->with('success','Change successful!');
    }

    public function mng_logout()
    {
        Session::flush();
        return redirect()->route('mng_login')->with('success','Logout successful.');
    }

    public function import_book()
    {
        $mng_model = new ManagerModel();
        $array_author = $mng_model->get_all_author();
        $array_category = $mng_model->get_all_category();
        $array_publisher = $mng_model->get_all_publisher();
        return view('mng_import_book',compact('array_author','array_category','array_publisher'));
    }

    public function mng_add_category()
    {
        return view('mng_add_category');
    }

    public function mng_add_category_process()
    {
        $mng_model = new ManagerModel();
        $mng_model->category1 = Request::get('category1');
        $mng_model->mng_add_category_process();

        return redirect()->route('view_all_category');
    }
}
