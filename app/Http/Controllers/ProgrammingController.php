<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Programming;

class ProgrammingController extends Controller
{
    public function programming()
    {
      return view('pages.programming');
    }
}
