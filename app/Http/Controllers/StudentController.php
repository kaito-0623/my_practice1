<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController extends Controller
{
    public function studentAll()
    {
        // Studentモデルのインスタンス生成
        $student = new Student();
        
        // getAll関数を呼び出して結果を取得
        $result = $student->getAll();
        
        // 取得したデータをビューに渡す
        return view('student_view', ['student_result' => $result]);
    }
}
