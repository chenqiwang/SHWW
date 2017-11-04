<?php

namespace App\Http\Controllers\home;

use App\Models\AdvertisementModel;
use App\Models\ProblemModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class SupoController extends Controller
{
    /**
     *  
     */
     /* Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }


    public function faTie(Request $request)
    {
        if(!empty($request['content']) && !empty($request['lid'])){  

        //发帖内容
        $flight = new ProblemModel;

        $flight->name = $request['content'];
        //发帖用户
        $flight->uid = session('user')['id'];
        //属于那个标签类型下的
        $flight->lid = $request['lid'];
        //发帖时间
        $flight->time = date('Y-m-d H:i:s',time());
        //添加
        $flight->save();
            
        return '发帖成功';
        }else{
        return '发帖失败';
        }
    }
}
