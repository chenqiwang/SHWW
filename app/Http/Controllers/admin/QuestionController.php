<?php

namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class QuestionController extends Controller{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ob = DB::table('tab_problem');
        $where = [];
        if ($request->has('search')) {
            $name = $request->input('search');
            $where['search'] = $name;
            $ob->select('tab_problem.*','tab_user_info.nickname as uname','tab_label.name as lname')->join('tab_user_info',function($join){
                $join->on('tab_problem.uid','=','tab_user_info.id');
            })->join('tab_label',function($join){
                $join->on('tab_problem.lid','=','tab_label.id');
            })->where('tab_problem.status', 1)
              ->where('tab_problem.name', 'like','%'.$name.'%');
        } else {
            $ob = DB::table('tab_problem')->select('tab_problem.*','tab_user_info.nickname as uname','tab_label.name as lname')->join('tab_user_info',function($join){
                $join->on('tab_problem.uid','=','tab_user_info.id');
            })->join('tab_label',function($join){
                $join->on('tab_problem.lid','=','tab_label.id');
            })->where('tab_problem.status', 1);
        }
        $list = $ob->paginate(5);
        return view('admin.question.index',['list' => $list, 'where' => $where]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = DB::table('tab_answer')->paginate(2);
        return view('admin.question.particulars',compact('user'));
    }
}
