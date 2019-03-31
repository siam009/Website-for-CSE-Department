<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;

class StaffController extends Controller
{
  public function staff()
  {
    $staff=Staff::orderBy('id','asc')->get();
    return view('pages.staff')->with('staff',$staff);
  }
}
