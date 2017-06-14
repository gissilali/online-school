<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Teacher;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{
        public function showEditForm($teacher_id){
        $teacher = Teacher::find($teacher_id);

        return view('teacher.edit', compact('teacher'));
    }

        public function updateAccount($teacher_id, Request $request){
        	/**
        	 * @todo  
        	 * Validator
        	 */
        	$teacher = Teacher::find($teacher_id);

        	$teacher->phone = $request['phone'];
        	$teacher->email = $request['email'];
        	$teacher->home_address = $request['home_address'];
        	$teacher->county = $request['county'];

        	$teacher->update();
        	Session::flash('update succesful', 'Account Updated');

        	return back();
        }
}
