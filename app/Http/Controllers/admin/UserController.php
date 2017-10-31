<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Models\ProblemModel;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

     $list = DB::table('tab_problem')
        ->join('tab_user_info',function($join){
             $join->on('tab_problem.uid','=','tab_user_info.rid')
        ->where('tab_problem.status','=',1); 
        })
        ->paginate(20);
        // dd($list);
        // ->simplePaginate(1);
        return view('admin.question.index',compact('list'));


        // $tsd = ProblemModel::all();
        // dd($tsd);
        //使用DB查询问题列表查询(遍历)
        // $php = DB::table('tab_problem')
        //        ->paginate(3);
        // // $php = DB::table('tab_user_info')
        // //         ->get();
        // $php = DB::table('tab_problem')->paginate(2);
        // return view('admin.question.index',compact('php'));

       
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //echo 11111;
        //return $id;
         $user = DB::table('tab_answer')->paginate(2);
        return view('admin.question.particulars',compact('user'));
      
    }
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
