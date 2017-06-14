<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Level;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
    	$class_levels = Level::where('id','>',0)->with('students')->get(); 
    	return view('admin.dashboard', compact('class_levels'));
    }
}
