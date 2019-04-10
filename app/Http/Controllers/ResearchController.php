<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Research;

class ResearchController extends Controller
{
    public function researchNews()  
    {

    	

    	$research=Research::orderBy('id','asc')->get();
    	return view('pages.researchNews')->with('research',$research);
    }
}
