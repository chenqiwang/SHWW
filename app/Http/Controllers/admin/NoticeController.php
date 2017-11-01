<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\NoticeModel;
use App\Http\Controllers\Controller;
use DB;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //拿出需要的表
        $ob = DB::table('tab_notice');
        $where = [];
        // 判断是否搜索了search字段
        if($request->has('search')){
            // 获取用户搜索的Name字段的值
            $content = $request->input('search');
            $where['search'] = $content;
            //给查询语句添加上where条件
            $ob->where('content', 'like','%'.$content.'%')
                ->orderBy('id', 'desc');
        }
        $list = $ob->orderBy('id', 'desc')->paginate(3);
        return view ('admin.notice.index', ['list' => $list, 'where' => $where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.notice.add');
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
        $list = $request->except('_token');
        $type = $list['type'];
        $content = $list['content'];
        $notice = new NoticeModel;
        $notice->type = $type;
        $notice->content = $content;
        if ($notice->save()) {
            return redirect('admin/notice')->with('msg', '添加成功');
        }else{
            //回到上一页
            return back()->with('msg', '输入有误，请检查后重新提交！');
        }
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
    public function delNotice(Request $request)
    {
        //
        $info = $request->except('_token');
        $id = $info['id'];
        $delete = NoticeModel::destroy($id);
        return $delete;
    }
}
