<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnswerModel extends Model
{
    //与数据库tab_answer对应
    protected $table = 'tab_answer';


    public $timestamps = false;

    public function ss()
    {
    	return $this->table;
    }
}
