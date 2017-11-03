<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\ComplaintModel;
use DB;

class CompController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //拿出需要的表
        $ob = DB::table('tab_complaint');
        $where = [];
        // 判断是否搜索了search字段
        if($request->has('search')){
            // 获取用户搜索的Name字段的值
            $name = $request->input('search');
            $where['search'] = $name;
            //给查询语句添加上where条件
            $ob->join('tab_user_info', function ($join) use($name){
                $join->on('tab_complaint.uid', '=', 'tab_user_info.id')
                     ->where('tab_user_info.name', 'like', '%'.$name.'%');
                })
               ->select('tab_complaint.*', 'tab_user_info.name');
        } else {
        $ob = DB::table('tab_complaint')
            ->join('tab_user_info', 'tab_complaint.uid', '=', 'tab_user_info.id')
            ->select('tab_complaint.*', 'tab_user_info.name');
        }
        $list = $ob->paginate(1);
        return view('admin.complaint.index', ['list' => $list, 'where' => $where]);
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
        $list = ComplaintModel::find($id)->name;
        $name = $list['name'];
        $info = ComplaintModel::find($id);
        return view('admin.complaint.info', compact('name', 'info'));
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
        $result = ComplaintModel::where('id', $id)->delete();
        if ($result) {
            return redirect('admin/comp')->with('msg', '删除成功！');
        }else{
            return redirect('admin/comp')->with('msg', '删除失败！');
        }
    }
}
