<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'admin'],function(){
  /* Route::get('/index',function(){
   		return view('admin.index');
	});*/
//后台路由	
   Route::get('index','admin\QuestionController@index');

//问题列表路由
   Route::get('tabulation', 'admin\UserController@index');

//连接数据库路由
   Route::get('user','admin\UserController@index');

//问题详情路由
   Route::resource('recycling','admin\RecyclingController');

//问题内容路由
   Route::resource('content','admin\ContentController');

// 热门问题
    Route::resource('Hotspot','admin\HotspotController');

//用户收藏
   Route::resource('collect','admin\CollectController');
});