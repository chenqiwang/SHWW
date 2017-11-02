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


//前台首页
Route::get('/','home\HomeController@index');

//前台登录and注册
Route::get('/login', 'home\LoginController@index');
Route::post('/login', 'home\LoginController@doLogin');
Route::get('/register', 'home\LoginController@register');
Route::get('/getCode','home\LoginController@getCode');
Route::post('/register', 'home\LoginController@doRegister');
Route::get('/doLogOut','home\LoginController@dologOut');

Route::group(['prefix' => 'ngavig'] ,function(){

    //前台导航的内容内容分类
	Route::get('/label', 'home\LabelController@index');
	//导航问题里的全部标签
	Route::get('/whole/{id}', 'home\WholeController@index');
	//导航下的全部问题
	Route::get('/emotion/{id}', 'home\WholeController@emotion');
	//全部问题下的提问
	Route::get('/answer/{pid}', 'home\answerController@index');
	//导航栏精华帖
	Route::get('/essence', 'home\essenceController@index');
});

//后台管理操作
Route::group(['prefix' => 'admin','middleware' => 'isLogin'], function () {
	//显示后台首页
	Route::get('/index', 'admin\IndexController@index');
	//后台用户管理操作
	Route::resource('user', 'admin\UserController');
	// 广告区域管理操作
    Route::resource('ad', 'admin\AdverController');
    // 意见管理操作
    Route::resource('comp', 'admin\CompController');
    // 公告管理操作
    Route::resource('notice', 'admin\NoticeController');
    Route::post('doNotice', 'admin\NoticeController@delNotice');
     //问题列表
     Route::get('tabulation', 'admin\QuestionController@index');
    //问题详情路由
    Route::resource('recycling','admin\RecyclingController');
    //问题内容路由
    Route::resource('content','admin\ContentController');
    // 热门问题
    Route::resource('Hotspot','admin\HotspotController');
    //用户收藏
    Route::resource('collect','admin\CollectController');
});

//后台登录/退出操作
Route::get('admin/login', 'admin\LoginController@index');
Route::get('admin/dologin', 'admin\LoginController@doLogin');
Route::get('admin/loginOut', 'admin\LoginController@loginOut');

