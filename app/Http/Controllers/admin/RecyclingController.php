<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use App\Models\ProblemModel;
use App\Http\Controllers\Controller;

class RecyclingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //回收管理
        // echo 111;

        $list = DB::table('tab_problem')        
                ->join('tab_answer', 'tab_problem.id','=','tab_answer.pid')
                ->join('tab_user_info','tab_answer.id','=','tab_user_info.id')
                 ->select('tab_problem.*','tab_answer.*','tab_user_info.*')
                 ->where('tab_problem.status','=',0)
                   ->paginate(20);
       return view('admin.question.recyling',compact('list'));
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
        
        // echo 11111; 
            // dd($id);
        
            $res = ProblemModel::where('id', $id)->first();
            
            if ($res->status == 0) {
                $res->status = 1;
            }else{
                $res->status = 0;
            }
            $res->save();
            return redirect('admin/recycling');
          
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
       dd($id);
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
        $res=DB::table('tab_problem')->where('id', $id)->delete();
        if($res > 0){
            return redirect('admin/recycling')->with('msg','删除成功');
        }else{
            return redirect('admin/recycling')->with('msg','删除失败（操作太快了）');
        }
       
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function reinstate($id)
    {           
        return ($id);
    }
}
