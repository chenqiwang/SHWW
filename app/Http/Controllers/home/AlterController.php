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

class AlterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $ser = DB::table('tab_user_reglogin')->first();

     return view('home.individual.alter',compact('ser'));
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


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request)
    {   
        $up = $request->all();

        $sa = DB::table('tab_user_reglogin')
            ->update($up);
        dd($sa);
       
    }
  
}
