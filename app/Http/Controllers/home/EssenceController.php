<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\IntegralModel;
use App\Models\User_infoModel;
use App\Models\ProblemModel;

use DB;

class essenceController extends Controller
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
        //取采纳率大于50的帖子
        $price = IntegralModel::where('adopt' ,'>', '50')->get();
        //用户表
        $users = User_infoModel::get();
        //问题表
        $problem = ProblemModel::get();
        return view('home.essence', compact('price', 'users','problem'));

    }
}