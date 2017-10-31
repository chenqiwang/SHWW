<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
    public function emotion()
    {
        //tab_collection表的uid和pid去查tab_user_info的id和tab_problem的id,的提问页面
        $problem = DB::table('tab_collection')
        ->join('tab_user_info', 'tab_collection.uid','=', 'tab_user_info.id')
        ->join('tab_problem', 'tab_collection.pid', '=' ,'tab_problem.id')
        ->select('tab_collection.*', 'tab_user_info.nickname','tab_user_info.photo','tab_problem.name','tab_problem.time','tab_problem.lid')->get();
        //显示情感问题列表
        // dd($problem);
        return view('home.emotion',['problem' => $problem]);
    }
}
