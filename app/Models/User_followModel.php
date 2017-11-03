<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_followModel extends Model
{
    //与数据库tab_user_follow对应
    protected $table = 'tab_user_follow';


    public $timestamps = false;
}
