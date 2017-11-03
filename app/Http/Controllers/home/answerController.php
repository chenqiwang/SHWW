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

        
        //tab_thumbs_up点赞表
        $thunbs = Thumbs_upModel::where('aid' ,$pid)->first();

        //用tab_answer的id查询tab_user_info的字段
        $answer = DB::table('tab_answer')
        ->join('tab_user_info', 'tab_answer.uid','=', 'tab_user_info.id')
        ->select('tab_answer.*','tab_user_info.nickname','tab_user_info.photo','tab_user_info.score')
        ->where('tab_answer.pid', $pid)
        ->get();
        
        return view('home.answer' ,compact('user','problem','integral','answer','thunbs'));

    }
    public function submit(Request $request)
    {
        
    }
    public function dian(Request $request)
    {
        //点赞后的状态等于1
         $thumb = Thumbs_upModel::where('aid', $request->id)->update(['status' => 1]);
         // 点赞1次加1
         $thumb1 = DB::table('tab_thumbs_up')->where('aid', $request->id)->increment('thumb',1);
        return Thumbs_upModel::where('aid', $request->id)->first();
    }
}
