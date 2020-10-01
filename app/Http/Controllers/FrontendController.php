<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class FrontendController extends Controller
{
    public function front(){
    // $students = Student::with('class')->latest()->paginate(10);
    	
       return view('frontend.front');
    }
    
}
