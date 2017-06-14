<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Level;
use App\Student;
use App\Subject;
use App\Result;
use App\StudentController;
use PDF;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    public function index(){
    	$classes = Level::orderBy('value')->get();

    	return view('teacher.class-list', compact('classes'));
    }

    public function getStudents($slug,$level_id){
    	$students = Student::where('level_id', $level_id)->orderBy('admission_number', 'asc')->paginate(10);

    	return view('teacher.student-list', compact('students'));
    }

    public function showResultForm($student_id){
    	$subjects = Subject::orderBy('name')->get();

    	return view('teacher.result-form', compact('student_id', 'subjects'));
    }

    public function addResult($student_id, Request $request){
        $student = Student::find($student_id);

        $form_item = $request->except(['_token','term']);

        /**
         * Check if term exists on table
         * @var [type]
         */
        if (Result::whereTermId($request['term'])->get()->count()>0){
            foreach ($form_item as $subject_id => $mark) {
            
                if ($student->subjects->contains($subject_id)) {
                        $student->subjects()->detach($subject_id, ['term_id' => $request['term']]);

                        $student->subjects()->attach($subject_id, ['mark' => $mark, 'term_id' => $request['term']]);
                    }
                    else{
                        $student->subjects()->attach($subject_id, ['mark' => $mark, 'term_id' => $request['term']]);
                    }
            }
        }else{
            foreach ($form_item as $subject_id => $mark) {
            
                if ($student->subjects->contains($subject_id)) {
                        $student->subjects()->detach($subject_id, ['term_id' => $request['term']]);

                        $student->subjects()->attach($subject_id, ['mark' => $mark, 'term_id' => $request['term']]);
                    } else{
                        $student->subjects()->attach($subject_id, ['mark' => $mark, 'term_id' => $request['term']]);
                    }
            }
        }
        return back();
    }

    public function downloadPDF(){
        $results = Result::whereStudentId(Auth::guard('student')->user()->id)->get();

        view()->share('results',$results);

        $pdf = PDF::loadView('result-view');
        
        return $pdf->stream('results_for_'.str_replace(' ','_',strtolower(Auth::guard('student')->user()->name)).'.pdf');

    }

    public function downloadPDFGuardian($student_id){
        $results = Result::whereStudentId($student_id)->get();

        $student =Student::find($student_id);

        view()->share('results',$results);

        view()->share('student',$student);


        $pdf = PDF::loadView('guardian.downloadable-result-view');
        
        return $pdf->stream('results_for_'.str_replace(' ','_',strtolower(Student::find($student_id)->name)).'.pdf');

    }

    public function guardianResultView($slug, $student_id){
        $results = Result::whereStudentId($student_id)->get();
        $student = Student::find($student_id);
        return view('guardian.result-view', compact('results', 'student'));
    }
}
