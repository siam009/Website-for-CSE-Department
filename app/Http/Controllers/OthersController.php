<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Others;

class OthersController extends Controller
{
    public function others()
    {
    	$others=Others::orderBy('id','desc')->get();
    	return view('pages.others')->with('others',$others);
    }
}
