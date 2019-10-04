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

//boss
Route::get('boss', "BossController@boss_login")
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

		Route::get('$group/boss_add_manager',"$controller@boss_add_manager")
		->name('boss_add_manager');

		Route::get('$group/boss_add_manager_process',"$controller@boss_add_manager_process")
		->name('boss_add_manager_process');

		Route::get('$group/boss_view_all_manager',"$controller@boss_view_all_manager")
		->name('boss_view_all_manager');

		Route::get('$group/boss_add_notification',"$controller@boss_add_notification")
		->name('boss_add_notification');

		Route::post('$group/boss_add_notification_process',"$controller@boss_add_notification_process")
		->name('boss_add_notification_process');

		Route::get('$group/boss_view_all_notification',"$controller@boss_view_all_notification")
		->name('boss_view_all_notification');

		Route::get('$group/boss_search', "$controller@boss_search")
		->name('boss_search');

		Route::get('$group/boss_search_process', "$controller@boss_search_process")
		->name('boss_search_process');
	});
});


//managers
Route::get('managers', "ManagerController@mng_login")
->name('mng_login');
Route::post('managers/mng_login_process',"ManagerController@mng_login_process")
->name('mng_login_process');
Route::group(["prefix" => "managers", "middleware" => "CheckManager"], function(){

	Route::get("managers/mng_logout","ManagerController@mng_logout")
	->name("mng_logout");
	
	Route::group(["prefix" => "managers"], function(){

		$group      = "managers";
		$controller = "ManagerController";

		Route::get('$group/mng_view_accout',"$controller@mng_view_accout")
		->name('mng_view_accout');

		Route::get('$group/mng_check_password',"$controller@mng_check_password")
		->name('mng_check_password');

		Route::post('$group/mng_check_password_process',"$controller@mng_check_password_process")
		->name('mng_check_password_process');

		Route::get('$group/mng_check_password_2',"$controller@mng_check_password_2")
		->name('mng_check_password_2');

		Route::post('$group/mng_check_password_process_2',"$controller@mng_check_password_process_2")
		->name('mng_check_password_process_2');

		Route::get('$group/mng_change_password',"$controller@mng_change_password")
		->name('mng_change_password');

		Route::post('$group/mng_change_password_process',"$controller@mng_change_password_process")
		->name('mng_change_password_process');

		Route::get('$group/mng_edit_accout',"$controller@mng_edit_accout")
		->name('mng_edit_accout');

		Route::post('$group/mng_edit_accout_process',"$controller@mng_edit_accout_process")
		->name('mng_edit_accout_process');

		Route::get('$group/mng_edit_password',"$controller@mng_edit_password")
		->name('mng_edit_password');

		Route::post('$group/mng_edit_password_process',"$controller@mng_edit_password_process")
		->name('mng_edit_password_process');

		Route::get('$group/mng_logout',"$controller@mng_logout")
		->name('mng_logout');

		Route::get('$group/mng_add_category',"$controller@mng_add_category")
		->name('add_category');

		Route::get('$group/mng_add_category_process',"$controller@mng_add_category_process")
		->name('mng_add_category_process');

		Route::get('$group/mng_view_all_category',"$controller@mng_view_all_category")
		->name('view_all_category');

		Route::get('$group/mng_add_author',"$controller@mng_add_author")
		->name('add_author');

		Route::get('$group/mng_add_author_process',"$controller@mng_add_author_process")
		->name('mng_add_author_process');

		Route::get('$group/mng_view_all_author',"$controller@mng_view_all_author")
		->name('view_all_author');

		Route::get('$group/mng_add_publisher',"$controller@mng_add_publisher")
		->name('add_publisher');

		Route::get('$group/mng_add_publisher_process',"$controller@mng_add_publisher_process")
		->name('mng_add_publisher_process');

		Route::get('$group/mng_view_all_publisher',"$controller@mng_view_all_publisher")
		->name('view_all_publisher');

		Route::get('$group/import_book',"$controller@import_book")
		->name('import_book');

		Route::post('$group/mng_import_book_process',"$controller@mng_import_book_process")
		->name('mng_import_book_process');

		Route::get('$group/mng_search', "$controller@mng_search")
		->name('mng_search');

		Route::get('$group/mng_search_process', "$controller@mng_search_process")
		->name('mng_search_process');

		Route::get('$group/mng_add_new_bill',"$controller@mng_add_new_bill")
		->name('mng_add_new_bill');

		Route::get('$group/mng_add_new_bill_process',"$controller@mng_add_new_bill_process")
		->name('mng_add_new_bill_process');

		Route::get('$group/mng_add_new_bill_total',"$controller@mng_add_new_bill_total")
		->name('mng_add_new_bill_total');

		Route::get('$group/mng_receive_book',"$controller@mng_receive_book")
		->name('mng_receive_book');

		Route::get('$group/mng_receive_book_process',"$controller@mng_receive_book_process")
		->name('mng_receive_book_process');

		Route::get('$group/mng_receive_book_detailed',"$controller@mng_receive_book_detailed")
		->name('mng_receive_book_detailed');

		Route::get('$group/mng_search_bill',"$controller@mng_search_bill")
		->name('mng_search_bill');

		Route::get('$group/mng_search_bill_process',"$controller@mng_search_bill_process")
		->name('mng_search_bill_process');

		Route::post('$group/detail_process',"$controller@detail_process")
		->name("detail_process");
	});
});