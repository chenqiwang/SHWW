<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\Problem;
use App\Models\LabelModel;
use App\Models\ProblemModel;
use App\Models\User_infoModel;
use DB;

class WholeController extends Controller
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

        //显示全部标签表
        return view('home.whole');
    }
    public function emotion ($id)
    {
        //tab_collection表的uid和pid去查tab_user_info的id和tab_problem的id,的提问页面
        // $problem = DB::table('tab_collection')
        // ->join('tab_user_info', 'tab_collection.uid','=', 'tab_user_info.id')
        // ->join('tab_problem', 'tab_collection.pid', '=' ,'tab_problem.id')
        // ->select('tab_collection.*', 'tab_user_info.nickname','tab_user_info.photo','tab_problem.name','tab_problem.time','tab_problem.lid')->get();
        //显示情感问题列表
        // $problem = DB::table('tab_problem')
        // ->join('tab_user_info','tab_problem.uid','=','tab_user_info.id')
        // ->select('tab_problem.*','tab_user_info.nickname','tab_user_info.photo','tab_problem.name','tab_problem.lid')->get();
        // dd($problem);
        //通过models查询tab_label表
        $alabel = LabelModel::where('id',$id)->first();
        //tab_label表的ID
        $lid = $alabel->id;
        //用tab_label表的ID取查tab_problem的id
        $problem = ProblemModel::where('lid', $lid)->get();
        //查tab_user_info表在视图显示头像
        $user = User_infoModel::get();
        return view('home.emotion',compact('alabel','problem','user'));
    }
}
