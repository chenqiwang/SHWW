<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\NoticeModel;
use App\Http\Controllers\Controller;
use DB;

class HomeController extends Controller
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
        $notice = NoticeModel::orderBy('id','desc')->get();
        //在Home页面显示
        return view('home.home', ['notice' => $notice]);
    }
}
