<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CSE_Society;

class CSESocietyController extends Controller
{
    public function society()
    {
    	$society=CSE_Society::orderBy('id','asc')->get();
    	return view('pages.society')->with('society',$society);
    }
}
