<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;

class StudentController extends Controller
{
	/**
	 * Get all info relating to students
	 * @return [type] [description]
	 */
    public function index() {
    	Student::all();
    }

    public function getStudents($slug,$level_id) {
    	$students = Student::where('level_id', $level_id)->orderBy('admission_number', 'asc')->paginate(10);
        $student_population = count(Student::where('level_id', $level_id)->get());
    	return view('students-list', compact('students', 'student_population'));
    }


}
