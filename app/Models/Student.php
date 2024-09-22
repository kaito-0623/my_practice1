<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;






class Student extends Model
{
    // テーブル名が 'students' でない場合は以下を追加
    // protected $table = 'your_table_name';

    // すべての学生データを取得するメソッド
    public function getAll()
    {
        return $this->all();
    }
}


