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

         // //取采纳率大于50的帖子
        /*$price = DB::table('tab_integral')
        ->join('tab_problem', 'tab_integral.pid', '=', 'tab_problem.id')
        ->select('tab_integral.adopt', 'tab_problem.*')->where('tab_integral.adopt' ,'>', 50)->get();
        return view('home.essence', compact('price'));*/
         // //取采纳率大于50的帖子
        $price = DB::table('tab_integral')
        ->join('tab_problem', 'tab_integral.pid', '=', 'tab_problem.id')
        ->select('tab_integral.adopt', 'tab_problem.*')->where('tab_integral.adopt' ,'>', 50)->get();
        return view('home.essence', compact('price'));

    }
}