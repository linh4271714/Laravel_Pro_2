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
    return view('welcome_reader');
});
//boss
Route::get('boss/boss_login', "BossController@boss_login")
->name('boss_login');
Route::post('boss/boss_login_process',"BossController@boss_login_process")
->name('boss_login_process');
Route::group(["prefix" => "boss", "middleware" => "CheckBoss"], function(){

	Route::get("boss/boss_logout","BossController@boss_logout")
	->name("boss_logout");
	
	Route::group(["prefix" => "boss"], function(){

		$group      = "boss";
		$controller = "BossController";

		Route::get('$group/boss_view_accout',"$controller@boss_view_accout")
		->name('boss_view_accout');

		Route::get('$group/boss_check_password',"$controller@boss_check_password")
		->name('boss_check_password');

		Route::post('$group/boss_check_password_process',"$controller@boss_check_password_process")
		->name('boss_check_password_process');

		Route::get('$group/boss_check_password_2',"$controller@boss_check_password_2")
		->name('boss_check_password_2');

		Route::post('$group/boss_check_password_process_2',"$controller@boss_check_password_process_2")
		->name('boss_check_password_process_2');

		Route::get('$group/boss_change_password',"$controller@boss_change_password")
		->name('boss_change_password');

		Route::post('$group/boss_change_password_process',"$controller@boss_change_password_process")
		->name('boss_change_password_process');

		Route::get('$group/boss_edit_accout',"$controller@boss_edit_accout")
		->name('boss_edit_accout');

		Route::post('$group/boss_edit_accout_process',"$controller@boss_edit_accout_process")
		->name('boss_edit_accout_process');

		Route::get('$group/boss_edit_password',"$controller@boss_edit_password")
		->name('boss_edit_password');

		Route::post('$group/boss_edit_password_process',"$controller@boss_edit_password_process")
		->name('boss_edit_password_process');

		Route::get('$group/boss_logout',"$controller@boss_logout")
		->name('boss_logout');
	});
});


//managers
Route::get('manager', "ManagerController@view_all");
Route::get('manager/view_one/{ID_manager}',"ManagerController@view_one");

Route::get('reader', "ReaderController@view_all");
Route::get('reader/view_one/{ID_reader}',"ReaderController@view_one");

Route::get('book', "BookController@view_all");
Route::get('book/view_one/{ID_book}',"BookController@view_one");

Route::get('bill', "BillController@view_all");
Route::get('bill/view_one/{ID_bill}',"BillController@view_one");