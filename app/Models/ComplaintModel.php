<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComplaintModel extends Model
{
    //与数据库tab_complaint对应
    protected $table = 'tab_complaint';


    public $timestamps = false;
}
