<?php

namespace App\Http\Controllers\home;

use App\Models\AdvertisementModel;
use App\Models\ProblemModel;
use App\Models\User_infoModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\NoticeModel;
use App\Models\LabelModel;
use App\Http\Controllers\Controller;
use DB;

class HomeController extends Controller
{
    /**
     *  
     */
     /* Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   //公告显示
        $notice = NoticeModel::orderBy('id','desc')->take(15)->get();
        //零回复问题
        $zeroQues = ProblemModel::where('count', 0)->orderBy('id','asc')->take(5)->get();
        //热门问题
        $hotQues = DB::table('tab_problem')
            ->join('tab_label', 'tab_problem.id','=','tab_label.id')
            ->join('tab_user_info','tab_problem.uid','=','tab_user_info.id')
            ->select('tab_problem.*','tab_label.mview','tab_user_info.name as uname')
            ->where('tab_problem.count', '>=', 1)
            ->where('tab_problem.status', 1)
            ->orderBy('tab_problem.count','desc')
            ->take(10)
            ->get();
        //专家板块
        $expert = User_infoModel::where('score', '>=', 300)->take(8)->get();
        //最新问题
        $newQues = DB::table('tab_problem')
            ->join('tab_label', 'tab_problem.id','=','tab_label.id')
            ->join('tab_user_info','tab_problem.uid','=','tab_user_info.id')
            ->select('tab_problem.name','tab_problem.id','tab_problem.time','tab_user_info.photo','tab_user_info.name as uname')
            ->where('tab_problem.status', 1)
            ->orderBy('tab_problem.time','desc')
            ->take(5)
            ->get();
        //提交问题
        $supo = LabelModel::get();
      
        //广告区域
        $ad2 = AdvertisementModel::where('type', 2)->orderBy('time','desc')->take(5)->get();
        //在Home页面显示
        return view('home.home', ['notice' => $notice],['newQues' => $newQues,'zeroQues'=>$zeroQues,'hotQues' => $hotQues,'expert' => $expert,'supo' => $supo, 'ad2'=>$ad2]);
    }
    public function reSou(Request $request)
    {
        $where = [];
        $ob = DB::table('tab_problem');
        // 判断是否搜索了name字段
        if($request->has('name')){
            // 获取用户搜索的Name字段的值
            $name = $request->input('name');
            $where['name'] = $name;
            //给查询语句添加上where条件
            $ob->where('name', 'like', '%'.$name.'%');
        }
        $list = $ob->paginate(10);
        return view('home.resou',['users'=>$list, 'where'=>$where]);
    }
}
