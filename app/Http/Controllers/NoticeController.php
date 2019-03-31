<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;

class NoticeController extends Controller
{
  public function notice()
  {
    $notice=Notice::orderBy('created_at','desc')->get();
    return view('pages.notice')->with('notice',$notice);
  }
}
