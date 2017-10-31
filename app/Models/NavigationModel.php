<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NavigationModel extends Model
{
    //与数据库tab_navigation对应
    protected $table = 'tab_navigation';


    public $timestamps = false;
}
