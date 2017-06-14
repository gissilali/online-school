<?php

namespace App\Http\Controllers\Accountant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Level;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
	public function index() {
		$class_levels = Level::orderBy('class')->with('students')->get(); 
		return view('accountant.dashboard', compact('class_levels'));
	}
}
