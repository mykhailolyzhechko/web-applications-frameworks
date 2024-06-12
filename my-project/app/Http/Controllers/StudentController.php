<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return response()->json($students);
    }

    public function show($id)
    {
        $student = Student::find($id);
        return response()->json($student);
    }

    public function store(Request $request)
    {
        $student = Student::create($request->all());
        return response()->json($student, 201);
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->update($request->all());
        return response()->json($student, 200);
    }

    public function destroy($id)
    {
        Student::destroy($id);
        return response()->json(null, 204);
    }
}
