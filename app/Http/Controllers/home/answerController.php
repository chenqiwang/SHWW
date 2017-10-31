<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class answerController extends Controller
{
    /**
     *  
     */
     /* Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //通过tab_collection的aid和uid,去查询tab_user_info的id和tab_answer的id和tab_integral的aid
        //查询出了tab_user_info的昵称和头像,tab_answer的内容和时间，tab_integral和采纳率和积分
        $answer = DB::table('tab_collection')
        ->join('tab_user_info', 'tab_collection.uid','=','tab_user_info.id')
        ->join('tab_answer', 'tab_collection.aid','=','tab_answer.id')
        ->join('tab_integral', 'tab_collection.aid', '=', 'tab_integral.aid')
        ->select('tab_collection.*', 'tab_user_info.nickname', 'tab_user_info.photo','tab_answer.content','tab_answer.revtime','tab_integral.score','tab_integral.adopt')->get();
        //显示全部标签表
        return view('home.answer',['answer' => $answer]);
    }
}
