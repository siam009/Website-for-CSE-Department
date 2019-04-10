<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Research;
use Auth;

class FormController extends Controller
{
    
	public function view_research_news()
	{
		if (Auth::guard('admin')->check())
		return view('pages.admin.form.research_news');
	    else return redirect()->route('homepage');
	}
    public function research_news(Request $request)
    {
    	if (Auth::guard('admin')->check()){
    	$research=new Research;
    	$research->authors=$request->authors;
    	$research->publication_link=$request->publication_link;
    	$research->linkName=$request->linkName;
    	$research->save();
    	return redirect()->route('researchNews');
        }

         else return redirect()->route('homepage');
    }

    public function view_notice()
    {
    	if (Auth::guard('admin')->check())
		return view('pages.admin.form.notice');
	    else return redirect()->route('homepage');
    }

    public function notice(Request $request)
    {
    	if (Auth::guard('admin')->check()){
    	$notice=new Notice;
    	$notice->details=$request->details;
    	$notice->save();
    	return redirect()->route('notice');
        }

         else return redirect()->route('homepage');
    }
}
