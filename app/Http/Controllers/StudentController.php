<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentIndexController extends Controller
{
    public function __invoke()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }
}

class StudentCreateController extends Controller
{
    public function __invoke()
    {
        return view('student.create');
    }
}

class StudentStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        // バリデーションと保存のロジック
    }
}

class StudentShowController extends Controller
{
    public function __invoke($id)
    {
        $student = Student::findOrFail($id);
        return view('student.show', compact('student'));
    }
}

class StudentEditController extends Controller
{
    public function __invoke($id)
    {
        $student = Student::findOrFail($id);
        return view('student.edit', compact('student'));
    }
}

class StudentUpdateController extends Controller
{
    public function __invoke(Request $request, $id)
    {
        // バリデーションと更新のロジック
    }
}

class StudentDestroyController extends Controller
{
    public function __invoke($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('student.index');
    }
}

class StudentViewController extends Controller
{
    public function __invoke()
    {
        $students = Student::all();
        return view('student_view', compact('students'));
    }
}

