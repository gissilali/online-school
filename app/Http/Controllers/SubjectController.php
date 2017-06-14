<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class SubjectController extends Controller
{
    public function index() {
    	$subjects = Subject::orderBy('name')->get();

    	return view('subject-list', compact('subjects'));
    }

    public function getSubjects() {
    	$subjects = Subject::orderBy('name')->get();

    	return response(['1','2'], 200);
    }
}
