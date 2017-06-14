<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Level; 
use App\Student;
use Illuminate\Support\Facades\Validator;

class FeesAccountController extends Controller
{
    public function getStudents($slug, $level_id) {
    	$class_level =  Level::where('id', $level_id)->with('students')->first();

    	return view('student-fees-account-list', compact('class_level'));
    }

    public function showFeesUpdateForm($slug, $student_id) {
    	$student = Student::find($student_id);
    	return view('fees-update-form', compact('student'));
    }

    public function updateFees($slug, $student_id, Request $request) {
    	$validator = Validator::make($request->all(), [
    		'fees_balance' => 'required|integer',
    		]);
    	if ($validator->fails()) {
    		return back()->withErrors($validator);
    	} else {
    		$student = Student::find($student_id);

    		$student->fees_update = true;

    		$student->fees_balance = $request->fees_balance;

    		$student->update();

    		Session::flash('fees_updated', 'Fees for '.$student->name.' updated');

    		return redirect('accountant/home');
    	}
    	
    }
}
