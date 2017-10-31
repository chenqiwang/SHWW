<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProblemModel extends Model
{
//与数据库tab_problem对应
    public $table = 'tab_problem';

//如果表中没有的字段需要关闭自动添加的时间戳
    public $timestamps = false;
}
