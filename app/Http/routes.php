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

// Route::get('/', function () {
//     return view('welcome');
// });
//前台首页
Route::get('/','home\HomeController@index');

Route::group(['prefix' => 'ngavig'] ,function(){

	//前台导航的内容内容分类
	Route::get('/label', 'home\LabelController@index');
	//导航问题里的全部标签
	Route::get('/whole/{id}', 'home\WholeController@index');
	//导航下的全部问题
	Route::get('/emotion/{id}', 'home\WholeController@emotion');
	//全部问题下的提问
	Route::get('/answer/{pid}/{uid}', 'home\answerController@index');
	//导航栏精华帖
	Route::get('/essence', 'home\essenceController@index');
});
