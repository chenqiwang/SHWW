<?php

namespace App\Http\Controllers\admin;

use App\Models\User_infoModel;
use App\Models\User_RegloginModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //显示登录页面
        return view('admin.login');
    }
    /**
     * 登录判断操作
     *
     *
     */
    public function doLogin(Request $request)
    {
        $info = $request->all();
        $phone = $info['phone'];
        $pwd = $info['pwd'];
        $pwd = md5($pwd);
        $res = User_RegloginModel::where('phone',$phone)->first();
        if ($res->pwd == $pwd){
            $res = User_infoModel::where('rid', $res->id)->first();
            $name = $res->nickname;
            session_start();
            $request->session()->put('admin',$name);
            return 1;
        }else{
            return 0;
        }
    }

    public function loginOut(Request $request)
    {
        $request->session()->pull('admin');
        return redirect('admin/login');
    }
}
