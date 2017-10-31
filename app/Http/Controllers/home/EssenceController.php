<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        //显示全部标签表
        return view('home.essence');
    }
}