<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    // Menampilkan semua data students
    public function index()
    {
        return response()->json(Student::all());
    }

    // Menambahkan student baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:students',
            'age' => 'required|integer',
            'gender' => 'required|in:male,female',
        ]);

        $student = Student::create($request->all());
        return response()->json($student, 201);
    }

    // Menampilkan satu student berdasarkan ID
    public function show($id)
    {
        $student = Student::find($id);
        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }
        return response()->json($student);
    }

    // Mengupdate data student
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }

        $request->validate([
            'name' => 'sometimes|string',
            'email' => 'sometimes|email|unique:students,email,' . $id,
            'age' => 'sometimes|integer',
            'gender' => 'sometimes|in:male,female',
        ]);

        $student->update($request->all());
        return response()->json($student);
    }

    // Menghapus student
    public function destroy($id)
    {
        $student = Student::find($id);
        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }

        $student->delete();
        return response()->json(['message' => 'Student deleted successfully']);
    }
}
