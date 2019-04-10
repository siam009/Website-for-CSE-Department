<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Research;
use App\Notice;
use App\Others;
use App\teachers;
use App\staff;
use App\CSE_Society;
use App\gallary;
use Auth;

class insertFormController extends Controller
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
  public function insertTeacher()
  {
    if(Auth::guard('admin')->check())
    {
      return view('pages.admin.insertTeacher');
    }
    else {
      return redirect()->route('homepage');
    }
  }
  public function insertStaff()
  {
    if(Auth::guard('admin')->check())
    {
      return view('pages.admin.insertStaff');
    }
    else {
      return redirect()->route('homepage');
    }
  }
  public function insertNotice()
  {
    if(Auth::guard('admin')->check())
    {
      return view('pages.admin.insertNotice');
    }
    else {
      return redirect()->route('homepage');
    }
  }
  public function insertOthers()
  {
    if(Auth::guard('admin')->check())
    {
      return view('pages.admin.insertOthers');
    }
    else {
      return redirect()->route('homepage');
    }
  }
  public function insertGallery()
  {
    if(Auth::guard('admin')->check())
    {
      return view('pages.admin.insertGallery');
    }
    else {
      return redirect()->route('homepage');
    }
  }
  public function insertResearch()
  {
    if(Auth::guard('admin')->check())
    {
      return view('pages.admin.insertResearch');
    }
    else {
      return redirect()->route('homepage');
    }
  }
  public function storeDevice(Request $request)
  {
      $society = new CSE_Society;
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
  public function teacher(Request $request)
  {
      $society = new teachers;
      // $society->id = request->id;
      $society->name = $request->name;
      $society->designation = $request->designation;
      $society->email = $request->email;
      $society->contact_number = $request->contact_number;
      $img = \Image::make($request->file('img'));
      $name = time().'.'.$request->file('img')->getClientOriginalExtension();
      $img->save($name);
      $society->img = $name;
      $society->save();
      return redirect('/adminHome/insert_teacher');
  }
  public function staff(Request $request)
  {
    if (Auth::guard('admin')->check()){
    $staff=new staff;
    $staff->name=$request->name;
    $staff->designation=$request->designation;
    $staff->email=$request->email;
    $staff->contact_number=$request->contact_number;
    $img = \Image::make($request->file('img'));
    $name = time().'.'.$request->file('img')->getClientOriginalExtension();
    $img->save($name);
    $staff->img = $name;
    $staff->save();
    return redirect('/adminHome/insert_staff');
      }

       else return redirect()->route('homepage');
  }
  public function research(Request $request)
  {
    if (Auth::guard('admin')->check()){
    	$research=new Research;
    	$research->authors=$request->authors;
    	$research->publication_link=$request->publication_link;
    	$research->linkName=$request->linkName;

    	$research->save();
    	return redirect('/adminHome/insert_research');
        }

         else return redirect()->route('homepage');
  }

  public function notice(Request $request)
  {
    if (Auth::guard('admin')->check()){
    	$notice=new Notice;
    	$notice->details=$request->details;
    	$notice->save();
    	return redirect('/adminHome/insert_notice');
        }

         else return redirect()->route('homepage');
  }
  public function others(Request $request)
  {
    if (Auth::guard('admin')->check()){
      	$others=new Others;
      	$others->title=$request->title;
      	$others->description=$request->description;
        $img = \Image::make($request->file('img'));
        $name = time().'.'.$request->file('img')->getClientOriginalExtension();
        $img->save($name);
        $others->img = $name;
      	$others->save();
      	return redirect('/adminHome/insert_others');
          }

           else return redirect()->route('homepage');
  }
  public function gallery(Request $request)
  {
    if (Auth::guard('admin')->check()){
    	$gallery=new gallary;
      $img = \Image::make($request->file('img'));
      $name = time().'.'.$request->file('img')->getClientOriginalExtension();
      $img->save($name);
      $gallery->img = $name;
    	$gallery->save();
    	return redirect('/adminHome/insert_gallery');
        }

         else return redirect()->route('homepage');
  }
}
