<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\User_infoModel;
use App\Models\User_RegloginModel;
use App\Http\Controllers\Controller;
use App\Org\SmsCode;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('home.login.login');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function doLogin(Request $request)
    {
        //
        $info = $request->except('_token');
        $phone = $info['phone'];
        $pwd = $info['pwd'];
        $pwd = md5($pwd);
        $res = User_RegloginModel::where('phone',$phone)->first();
        if ($res){
            if ($res->pwd == $pwd) {
                $res = User_infoModel::where('rid', $res->id)->first();
                $nickname = $res->nickname;
                session_start();
                $request->session()->put('user',$nickname);
                return redirect('/');
            }else{
                //回到上一页
                return back()->with('msg', '登录失败：用户名或密码错误');
            }
        }else{
            //回到上一页
            return back()->with('msg', '登录失败：用户名或密码错误');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        //
        return view('home.login.reg');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCode(Request $request)
    {
        //
        $info = $request->all();
        $code = SmsCode::sendSms($info['phone']);
        return $code;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function doRegister(Request $request)
    {
        $info = $request->except('_token');
        //获取验证码
        dd($info);
        if (!$request['scode']){
            return back()->with('msg', '请获取验证码后输入！');
        }else{
            //获取用户输入的验证码   手机  密码
            $code = $info['code'];
            $scode = $info['scode'];
            $phone = $info['phone'];
            $pwd = $info['pwd'];
            //密码加密
            $pwd = md5($pwd);
            if ($code == $scode) {
                $res = User_RegloginModel::where('phone', $phone)->first();
                if (!$res){
                    $user = new User_RegloginModel;
                    $user->phone = $phone;
                    $user->pwd = $pwd;
                    $result = $user->save();
                    if ($result){
                        $request->session()->pull('code');
                        return redirect('/');
                    }else{
                        //回到上一页
                        return back()->with('msg', '密码格式有误，请重新输入！');
                    }
                }else{
                    //回到上一页
                    return back()->with('msg', '手机号已存在，请重新输入！');
                }
            }else{
                //回到上一页
                return back()->with('msg', '验证码错误，请重新输入！');
            }
        }
    }
}
