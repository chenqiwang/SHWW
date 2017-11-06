<?php

namespace App\Http\Controllers\admin;

use App\Models\User_RegloginModel;
use Illuminate\Http\Request;
use App\Http\Requests;
use \DB;
use App\Models\User_infoModel;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //拿出需要的表
        $ob = DB::table('tab_user_info');
        $where = [];
        // 判断是否搜索了search字段
        if($request->has('search')){
            // 获取用户搜索的Name字段的值
            $phone = $request->input('search');
            //给查询语句添加上where条件
            $where['search'] = $phone;
            $ob->join('tab_user_reglogin', function ($join) use($phone){
                $join->on('tab_user_info.rid', '=', 'tab_user_reglogin.id')
                     ->where('tab_user_reglogin.phone', 'like', '%'.$phone.'%');
                })
               ->select('tab_user_info.*', 'tab_user_reglogin.phone');
        } else {
        $ob = DB::table('tab_user_info')
            ->join('tab_user_reglogin', 'tab_user_info.rid', '=', 'tab_user_reglogin.id')
            ->select('tab_user_info.*', 'tab_user_reglogin.phone');
        }
        $list = $ob->paginate(5);
        return view('admin.user.index', ['list' => $list, 'where' => $where]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.user.add');

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
        $list = User_infoModel::find($id);
        $phone = $list->phone;
        return view('admin.user.info', compact('list', 'phone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list = User_infoModel::find($id);
        $phone = $list->phone;
        return view('admin.user.update', compact('list', 'phone'));

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
        $info = $request->except('_token','_method');
        
        \DB::beginTransaction();
        try{
            $user = User_infoModel::find($id);

            $rid = $user->rid;
            $user->name = $info['name'];
            $user->nickname = $info['nickname'];
            $user->email = $info['email'];
            if ($info['sex'] == '男'){
                $user->sex = 1;
            }else{
                $user->sex = 0;
            }
            $user->age = $info['age'];
            $result1 = $user->save();

            $rinfo = User_RegloginModel::find($rid);
            $rinfo->phone = $info['phone'];
            $result2 = $rinfo->save();

            if ($result1 && $result2) {
                \DB::commit();
                return redirect('admin/user')->with('msg', '修改成功！');
            }else{
                \DB::rollBack();
                return redirect('admin/user')->with('msg', '修改失败！');
            }
        }catch (\Exception $e){
            \DB::rollBack();
            return redirect('admin/user')->with('msg', '修改失败！');
        }
    }
}
