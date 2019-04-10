<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class insertSocietyController extends Controller
{
    public function insertSociety()
    {
      if(Auth::guard('admin')->check())
      {
        return view('pages.admin.insertSociety');
      }
      else {
        return redirect()->route('homepage');
      }
    }
    public function storeDevice(Request $request)
    {
        $society = new \App\CSE_Society;
        // $society->id = request->id;
        $society->name = $request->name;
        $society->batch = $request->batch;
        $society->designation = $request->designation;
        $society->email = $request->email;
        $society->contact_number = $request->contact_number;
        $img = \Image::make($request->file('img'));
        $name = time().'.'.$request->file('img')->getClientOriginalExtension();
        $img->save($name);
        $society->img = $name;
        $society->save();
        return redirect('/adminHome/insert_society');
    }
}
