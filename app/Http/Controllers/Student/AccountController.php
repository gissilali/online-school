<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{
        public function showEditForm($student_id){
        $student = Student::find($student_id);

        return view('student.edit', compact('student'));
    }

        public function updateAccount($student_id, Request $request){
        	/**
        	 * @todo  
        	 * Validator
        	 */
        	$student = Student::find($student_id);

        	$student->phone = $request['phone'];
        	$student->email = $request['email'];
        	$student->home_address = $request['home_address'];
        	$student->county = $request['county'];

        	$student->update();
        	Session::flash('update succesful', 'Account Updated');

        	return back();
        }

        public function delete($student_id){
            $student = Student::find($student_id);

            $name = $student->name;

            $student->delete();

            Session::flash('student_deleted', 'Student '.$name.' has been deleted');

            return back();
        }
}
