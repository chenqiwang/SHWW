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

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //composer update
        $qwe = DB::table('tab_problem')
            
             ->get();
        // dd($qwe);
                return view('home.individual.quiz',compact('qwe'));
      
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function doLogin(Request $request)
    {
       
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   

       $as = DB::table('tab_user_info')->where('id',$id)->first();
       // dd($as);
       return view('home.individual.data');
       
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        //
       
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCode(Request $request)
    {
        //
      
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function doRegister(Request $request)
    {
        
    }

    public function dologOut(Request $request)
    {
        
    }
}
