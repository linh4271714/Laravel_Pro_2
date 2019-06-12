<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class BossController extends Controller
{
    private $folder = 'boss';
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
    public function sign_in_boss()
    {
        return view('sign_in_boss');
    }
    public function sign_in_boss_process()
    {
        $boss = new BossModel();
        $boss->userName = Request::get('userName']);
        $boss->email = Request::get('email');
        $boss->phone = Request::get('sdt');
        $boss->pass = Request::get('pass');
        $boss_model->sign_in_boss_process();

        return redirect()->route('boss_view_all');
    }
