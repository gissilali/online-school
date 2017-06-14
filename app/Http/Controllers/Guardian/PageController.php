<?php

namespace App\Http\Controllers\Guardian;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Guardian;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
	public function index() {
		$students = Guardian::find(Auth::guard('guardian')->user()->id)->students()->get();
		return view('guardian.home', compact('students'));
	}
}
