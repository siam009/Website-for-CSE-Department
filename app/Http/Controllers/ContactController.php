<?php

namespace App\Http\Controllers;
use App\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
    	return view('pages.contact');
    }
}
