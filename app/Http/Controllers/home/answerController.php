<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\AnswerModel;
use App\Models\User_infoModel;
use App\Models\ProblemModel;
use App\Models\IntegralModel;

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
    public function index($pid,$uid)
    {
        //tab_user_info表查询
        $user = User_infoModel::where('id' ,$uid)->first();
        //tab_problem表查询
        $problem = ProblemModel::where('id',$pid)->first();
        //tab_user_info表查询
        $integral = IntegralModel::where('aid',$uid)->first();
 
        //用tab_answer的id查询tab_user_info的字段
        $answer = DB::table('tab_answer')
        ->join('tab_user_info', 'tab_answer.uid','=', 'tab_user_info.id')
        ->select('tab_answer.content','tab_answer.revtime','tab_answer.pid','tab_answer.uid','tab_user_info.nickname','tab_user_info.photo','tab_user_info.score')->get();
        
        return view('home.answer' ,compact('user','problem','integral','answer'));
    }
}
