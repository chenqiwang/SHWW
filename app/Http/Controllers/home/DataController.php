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
        $ser=DB::table('tab_user_info')->where('id',1)
            ->first();
           
       return view('home.individual.data',compact('ser'));

    }
    public function edit($id)
    {   

        $ser = DB::table('tab_user_info')->where('id',$id)->first();
       // dd($as);
       return redirect('data');
       
    }
    public function update(Request $request,$id)
    {   
        $data = $request->except('_token', '_method');
        if($request->hasFile('photo')){
            $file = $request->file('photo');
                if($file->isValid()){
                    $ext = $file->getClientOriginalExtension();
                    $picname = time().rand(1000,9999).'.'.$ext;
                    $file->move('./pic/',$picname);
                    if($file->getError() > 0){
                        echo '上传失败';
                    }else{
                        echo '上传成功';
                    }
                }
        }
        $data['photo'] = $picname;

        // dd($data);
        $up = DB::table('tab_user_info')->where('id',$id)->update($data);
            if($up > 0 ){
                 return redirect('data')->with('msg','修改成功');
            }else{
                return redirect('data')->with('error','修改失败');
            }
    }
 }