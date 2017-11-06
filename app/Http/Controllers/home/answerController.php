<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\AnswerModel;
use App\Models\User_infoModel;
use App\Models\ProblemModel;
use App\Models\IntegralModel;
use App\Models\Thumbs_upModel;

use DB;

class answerController extends Controller
{
     /* Display a listing of the resource.
     *  
     * @return \Illuminate\Http\Response
     */
    public function index($pid)
    {
        //tab_problem表查询
        $problem = ProblemModel::where('id',$pid)->first();

        //tab_user_info表查询
        $user = User_infoModel::where('id' ,$problem->uid)->first();

        //tab_user_info表查询
        $integral = IntegralModel::where('aid',$problem->uid)->first();

        //每个登录用户的ID
        $uid = session('user')['id'];

        //用tab_answer的id查询tab_user_info的字段
        $answer = DB::table('tab_answer')
        ->join('tab_user_info', 'tab_answer.uid','=', 'tab_user_info.id')
        ->select('tab_answer.*','tab_user_info.nickname','tab_user_info.photo','tab_user_info.score')->get();

        //tab_thumbs_up点赞表
        $thunbs = Thumbs_upModel::where('uid' ,$uid)
        ->whereOr('pid', $problem['id'])
        ->get();
        return view('home.answer' ,compact('user','problem','integral','answer','thunbs'));

    }

    public function reply(Request $request)
    {
        if (!empty($request['content'])) {
            //new一个tab_answer回答表
            $reply = new AnswerModel;
            //在哪个问题下发帖
            $reply->pid = $request['pid'];
            //发帖用户
            $reply->uid = session('user')['id'];
            //发帖内容
            $reply->content = $request['content'];
            //发帖时间
            $reply->revtime = date('Y-m-d H:i:s', time());
            //添加
            $reply->save();

            return '回复成功';
        } else {
            return '请先填写内容，再回复';
        }
    }
    public function dian(Request $request)
    {   
        //点赞表
        $flight = new Thumbs_upModel;
        //回答id
        $flight->aid = $request->id;
        //用户id
        $flight->uid = session('user')['id'];
        //点赞状态变1
        $flight->status = 1;
        //添加
        $flight->save();
    }
}
