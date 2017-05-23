<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Level;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
    	$class_levels = Level::all(); 
    	return view('admin.dashboard', compact('class_levels'));
    }
}
