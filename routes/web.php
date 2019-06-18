<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//boss
Route::get('boss/login_boss', "BossController@login_boss")
->name('login_boss');

Route::post('boss/login_boss_process',"BossController@login_boss_process")
->name('login_boss_process');

Route::get('boss/view_accout',"BossController@boss_view_accout")
->name('boss_view_accout');

Route::get('boss/check_password',"BossController@boss_check_password")
->name('boss_check_password');

Route::post('boss/check_password_process',"BossController@check_password_process")
->name('check_password_process');

Route::get('boss/boss_edit_accout',"BossController@boss_edit_accout")
->name('boss_edit_accout');

Route::post('boss/boss_edit_accout_process',"BossController@boss_edit_accout_process")
->name('boss_edit_accout_process');

Route::get('boss/boss_edit_password',"BossController@boss_edit_password")
->name('boss_edit_password');

Route::post('boss/boss_edit_password_process',"BossController@boss_edit_password_process")
->name('boss_edit_password_process');

//managers
Route::get('manager', "ManagerController@view_all");
Route::get('manager/view_one/{ID_manager}',"ManagerController@view_one");

Route::get('reader', "ReaderController@view_all");
Route::get('reader/view_one/{ID_reader}',"ReaderController@view_one");

Route::get('book', "BookController@view_all");
Route::get('book/view_one/{ID_book}',"BookController@view_one");

Route::get('bill', "BillController@view_all");
Route::get('bill/view_one/{ID_bill}',"BillController@view_one");