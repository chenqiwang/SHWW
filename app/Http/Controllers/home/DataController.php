<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\IntegralModel;
use App\Models\User_infoModel;
use App\Models\ProblemModel;

use DB;

class DataController extends Controller
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
        $ser=User_infoModel::where('id',(session('user')['id']))
            ->get();
       return view('home.individual.data',compact('ser'));

    }
 }