<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\User_infoModel;
use App\Models\User_RegloginModel;
use App\Http\Controllers\Controller;
use App\Org\SmsCode;
use Illuminate\Support\Facades\Redis;

use Mockery\Exception;
use DB;

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
        if (Redis::exists('HASH:'.$phone))
        {
            $user = Redis::hGetall('HASH:'.$phone);
            session(['user' => $user]);
            return redirect('/');
        }

        //$pwd = md5($pwd);
        $res = User_RegloginModel::where('phone',$phone)->first();
        if ($res){
            if ($res->pwd == $pwd) {
                $res = User_infoModel::where('rid', $res->id)->first();
                //存到Redis的HASH中
                $key = 'HASH:'+$phone;
                $users = [ 'id'=>$res->id, 'name' => $res->name, 'age' => $res->age, 'sex' => $res->sex,
                           'phone' => $phone, 'pwd' => $pwd, 'nickname' => $res->nickname, 'email' => $res->email, 'score' => $res->score,
                           'photo' => $res->photo ];
                $info = \Redis::hMset($key, $users);
                if ($info) {
                    $user = Redis::hGetall('HASH:'+$phone);
                    $request->session()->put('user', $user);
                    return redirect('/');
                } else {
                    return back()->with('msg', '登录失败：用户名或密码错误');
                }
            }
        }else{
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
                    \DB::beginTransaction();
                    try{
                        $user = new User_RegloginModel;
                        $user->phone = $phone;
                        $user->pwd = $pwd;
                        $result = $user->save();
                        $userinfo = new User_infoModel;
                        $userinfo->rid = $user->id;
                        $result2 = $userinfo->save();
                        if ($result && $result2){
                            \DB::commit();
                            return redirect('/');
                        }else{
                            \DB::rollback();
                            return back()->with('msg', '密码格式有误，请重新输入！');
                        }
                    } catch (Exception $e){
                        return back()->with('msg', '输入有误，请重新输入！');
                        \DB::rollback();
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

    public function dologOut(Request $request)
    {
        $request->session()->pull('user');
        return redirect('/');
    }
}
