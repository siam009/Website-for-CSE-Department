<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teachers;

class TeachersController extends Controller
{
  public function teachers()
  {
    $teacher=Teachers::orderBy('id','asc')->get();
    return view('pages.teachers')->with('teacher',$teacher);
  }
}
