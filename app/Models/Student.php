<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // 全件取得の関数
    public static function getAll()
    {
        return self::all();
    }
}


