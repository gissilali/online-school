<?php

namespace App\Http\Controllers\Guardian;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
	public function index() {
		return view('guardian.home');
	}
}
