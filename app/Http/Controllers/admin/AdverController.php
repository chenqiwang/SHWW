<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\AdvertisementModel;
class AdverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = AdvertisementModel::paginate(5);
        return view('admin.advertisement.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.advertisement.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //判断图片是否为空
        $info = $request->except('_token');
        if(!empty($info['adname']) && !empty($info['ttime']) && !empty($info['ttype']) && !empty($info['photo']) && !empty($info['content'])){

            return back();
        } else {
            //图片上传

            if($request->hasFile('photo')){
                $file = $request->file('photo');
                if ($file->isValid()) {
                    //获取后缀
                    $ext = $file->getClientOriginalExtension();
                    //安时间获取图片名
                    $picname = time().rand(1000,9999).'.'.$ext;
                    //上传的图片路径
                    $file->move('./ad/',$picname);
                    //判断图片是否上传成功
                    if($file->getError()>0){
                         return redirect('/admin/ad/create')->with('msg','图片上传失败');
                    }else{
                       $request->except("_token");
                       $sphoto = new AdvertisementModel;
                       //上传的地址
                       $sphoto->url = $request['adname'];
                       //上传的时间
                       $sphoto->time = $request['ttime'];
                       //上传类型
                       $sphoto->type = $request['ttype'];
                       //上传的标题
                       $sphoto->title = $request['content'];
                       //上传的图片名
                       $sphoto->pic = $picname;
                       //添加
                       $sphoto->save();
                        return redirect('admin/ad');
                    }
                }
            } else {
                return back();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return 3333333;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //修改的数据
        $users = AdvertisementModel::where('id', $id)->first();
        
        return view('admin/advertisement.update',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->except('_method' ,'_token');
            if($request->hasFile('photo')){
                $file = $request->file('photo');
                if ($file->isValid()) {
                    //获取后缀
                    $ext = $file->getClientOriginalExtension();
                    $picname = time().rand(1000,9999).'.'.$ext;
                    $file->move('./ad/',$picname);
                    if($file->getError()>0){
                        echo '上传失败';
                    }else{
                        echo '上传成功';
                    }
                }
            }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
