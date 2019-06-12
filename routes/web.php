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
Route::get('boss', "BossController@login_boss")
->name('login_boss');

Route::post('boss/login_boss_process',"BossController@login_boss_process")
->name('login_boss_process');

Route::get('boss/sign_in_boss',"BossController@sign_in_boss")
->name('sign_in_boss');

Route::get('boss/sign_in_boss_process',"BossController@sign_in_boss_process")
->name('sign_in_boss_process');

Route::get('boss/view_all',"BossController@boss_view_all")
->name('boss_view_all');

//managers
Route::get('manager', "ManagerController@view_all");
Route::get('manager/view_one/{ID_manager}',"ManagerController@view_one");

Route::get('reader', "ReaderController@view_all");
Route::get('reader/view_one/{ID_reader}',"ReaderController@view_one");

Route::get('book', "BookController@view_all");
Route::get('book/view_one/{ID_book}',"BookController@view_one");

Route::get('bill', "BillController@view_all");
Route::get('bill/view_one/{ID_bill}',"BillController@view_one");