<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Problem;
use App\Models\LabelModel;
use App\Models\ProblemModel;
use App\Models\User_infoModel;

use DB;

class WholeController extends Controller
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
        return view('home.whole');
    }
    public function emotion ($id)
    {

        //通过models查询tab_label表
        $alabel = LabelModel::where('id',$id)->first();
        //tab_label表的ID
        $lid = $alabel->id;
        //用tab_label表的ID取查tab_problem的id
        $problem = ProblemModel::where('lid', $lid)->get();
        //查tab_user_info表在视图显示头像
        $user = User_infoModel::get();
        return view('home.emotion',compact('alabel','problem','user'));

    }
}
