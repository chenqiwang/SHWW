<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\IntegralModel;
use App\Models\User_infoModel;
use App\Models\ProblemModel;
use DB;
class expertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //专家分享采纳率大于50的都能成为专家
        $intes = DB::table('tab_problem')
        ->join('tab_integral', 'tab_problem.id', '=','tab_integral.pid')
        ->join('tab_user_info','tab_problem.uid','=','tab_user_info.id')
        ->select('tab_problem.name','tab_problem.id', 'tab_problem.time','tab_user_info.nickname','tab_user_info.photo','tab_integral.adopt')
        ->where('tab_integral.adopt', '>', 50)
        ->orderBy('tab_integral.adopt', 'desc')
        ->take(8)
        ->get();

        return view('home.expert',compact('intes'));
    }

}
