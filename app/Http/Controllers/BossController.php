<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\BossModel;
class BossController extends Controller
{
    private $folder = 'boss';

    public function login_boss()
    {
        return view('login_boss');
    }

    public function login_boss_process(Request $request)
    {
        $boss_model = new BossModel();
        $boss_model->email = $request->email;
        $boss_model->pass = $request->pass;
        $boss_model->login_boss_process();

        return redirect()->route('boss_view_all');
    }

    public function sign_in_boss()
    {
        return view('sign_in_boss');
    }

    public function sign_in_boss_process(Request $request)
    {
        $boss_model = new BossModel();
        $boss_model->userName = $request->userName;
        $boss_model->email = $request->email;
        $boss_model->phone = $request->phone;
        $boss_model->pass = $request->pass;
        $boss_model->sign_in_boss_process();

        return redirect()->route('boss_view_all');
    }

    public function boss_view_all()
    {
        $boss_model       = new BossModel();
        $array_boss = $boss_model->get_all();

        return view('boss_view_all',compact('array_boss'));
    }
}
