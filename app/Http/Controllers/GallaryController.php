<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallary;

class GallaryController extends Controller
{
    public function gallary()
    {
      $gallary=Gallary::orderBy('created_at','desc')->get();
      return view('pages.gallary')->with('gallary',$gallary);
    }
}
