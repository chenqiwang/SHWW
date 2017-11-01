<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Models;
use App\Http\Controllers\Controller;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo 111;
        //问题详情
         $list = DB::table('tab_problem')

                    ->join('tab_answer','tab_problem.id','=','tab_answer.pid')
                    ->join('tab_user_info','tab_answer.id','=','tab_user_info.id')
                    ->select('tab_problem.*','tab_answer.*','tab_user_info.*')
                    ->get();
                  dd($list);
        return view('admin.question.content',compact('list'));
    }
        

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        // $a = $_GET($id);
        
        $list = DB::table('tab_problem')
                    
                    ->join('tab_answer', function($join) use($id){
                        $join->on('tab_problem.id','=','tab_answer.pid')
                             ->where('tab_problem.id','=',$id);
                    })
                    ->get();
       return view('admin.question.content',compact('list'));
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
