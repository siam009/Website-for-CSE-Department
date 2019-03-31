<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student\Result_1_1;
use App\Student\Result_1_2;
use App\Student\Result_2_1;
use App\Student\Result_2_2;
use App\Student\Result_3_1;
use App\Student\Result_3_2;
use App\Student\Result_4_1;
use App\Student\Result_4_2;
use Auth;

class InsertController extends Controller
{
    
    public function view_insert_1_1(){
        
		if (Auth::guard('admin')->check()){
			return view('pages.admin.InsertResult.res_1_1');
		}
		else return redirect()->route('homepage');
		
		
    }
    public function view_insert_1_2(){
        if (Auth::guard('admin')->check()){
			return view('pages.admin.InsertResult.res_1_2');
		}
		else return redirect()->route('homepage');
		
		
    }
    public function view_insert_2_1(){
            if (Auth::guard('admin')->check()){
			return view('pages.admin.InsertResult.res_2_1');
		}
		else return redirect()->route('homepage');
		
		
		
    }
    public function view_insert_2_2(){
                   if (Auth::guard('admin')->check()){
			return view('pages.admin.InsertResult.res_2_2');
		}
		else return redirect()->route('homepage');


	   
    }
    public function view_insert_3_1(){
             if (Auth::guard('admin')->check()){
			return view('pages.admin.InsertResult.res_3_1');
		}
		else return redirect()->route('homepage');
		
		

    }
    public function view_insert_3_2(){
             if (Auth::guard('admin')->check()){
			return view('pages.admin.InsertResult.res_3_2');
		}
		else return redirect()->route('homepage');
		
		
    }
    public function view_insert_4_1(){
                 if (Auth::guard('admin')->check()){
			return view('pages.admin.InsertResult.res_4_1');
		}
		else return redirect()->route('homepage');
		
		
    }
    public function view_insert_4_2(){
       
	        if (Auth::guard('admin')->check()){
			return view('pages.admin.InsertResult.res_4_2');
		}
		else return redirect()->route('homepage');

	   
    }



    public function insert_1_1(Request $request)
    {
    	if (Auth::guard('admin')->check()){
        
           $result =new Result_1_1;
           $result->Registration_no=$request->Registration_no;
           $result->LG_CSE101=$request->LG_CSE101;
           $result->GP_CSE101=$request->GP_CSE101;
           $result->LG_CSE102=$request->LG_CSE102;
           $result->GP_CSE102=$request->GP_CSE102;
           $result->LG_EEE105=$request->LG_EEE105;
           $result->GP_EEE105=$request->GP_EEE105;
           $result->LG_EEE106=$request->LG_EEE106;
           $result->GP_EEE106=$request->GP_EEE106;
           $result->LG_ME100=$request->LG_ME100;
           $result->GP_ME100=$request->GP_ME100;
           $result->LG_ME101=$request->LG_ME101;
           $result->GP_ME101=$request->GP_ME101;
           $result->LG_ME102=$request->LG_ME102;
           $result->GP_ME102=$request->GP_ME102;
           $result->LG_MATH101=$request->LG_MATH101;
           $result->GP_MATH101=$request->GP_MATH101;
           $result->LG_PHY101=$request->LG_PHY101;
           $result->GP_PHY101=$request->GP_PHY101;
           $result->LG_PHY102=$request->LG_PHY102;
           $result->GP_PHY102=$request->GP_PHY102;
           $result->LG_SS101=$request->LG_SS101;
           $result->GP_SS101=$request->GP_SS101;
           $result->GPA=$request->GPA;
           $result->CGPA=$request->CGPA;
           $result->save();

        return view('pages.admin.InsertResult.res_1_1');


         }
         else return redirect()->route('homepage');
         //return redirect()->route('/adminHome/res_1_1');
    }

    public function insert_1_2(Request $request)
    {
    	
        if (Auth::guard('admin')->check()){

        $result=new Result_1_2;
        $result->Registration_no=$request->Registration_no;
        $result->LG_CSE201=$request->LG_CSE201;
        $result->GP_CSE201 =$request->GP_CSE201;
        $result->LG_CSE202 =$request->LG_CSE202 ;
        $result->GP_CSE202 =$request->GP_CSE202;
        $result->LG_CSE203 =$request->LG_CSE203;
        $result->GP_CSE203 =$request->GP_CSE203;
        $result->LG_MATH201 =$request->LG_MATH201;
        $result->GP_MATH201 =$request->GP_MATH201;
        $result->LG_CHEM201 =$request->LG_CHEM201;
        $result->GP_CHEM201 =$request->GP_CHEM201;
        $result->LG_CHEM202 =$request->LG_CHEM202;
        $result->GP_CHEM202 =$request->GP_CHEM202;
        $result->LG_ENG201 =$request->LG_ENG201;
        $result->GP_ENG201 =$request->GP_ENG201;
        $result->LG_ENG202 =$request->LG_ENG202;
        $result->GP_ENG202 =$request->GP_ENG202;
        $result->LG_SS201 =$request->LG_SS201;
        $result->GP_SS201 =$request->GP_SS201;
        $result->GPA =$request->GPA;
        $result->CGPA =$request->CGPA;
        $result->save();

        return view('pages.admin.InsertResult.res_1_2');

        }

        else return redirect()->route('homepage');
    }
       public function insert_2_1(request $request)
    {
    	
        if (Auth::guard('admin')->check()){

            $result= new Result_2_1;

            $result->Registration_no=$request->Registration_no ;
            $result->LG_CSE301=$request->LG_CSE301 ;
            $result->GP_CSE301=$request->GP_CSE301 ;
            $result->LG_CSE302=$request->LG_CSE302 ;
            $result->GP_CSE302=$request->GP_CSE302 ;
            $result->LG_CSE303=$request->LG_CSE303 ;
            $result->GP_CSE303=$request->GP_CSE303 ;
            $result->LG_CSE304=$request->LG_CSE304 ;
            $result->GP_CSE304=$request->GP_CSE304 ;
            $result->LG_CSE305=$request->LG_CSE305 ;
            $result->GP_CSE305=$request->GP_CSE305 ;
            $result->LG_CSE306=$request->LG_CSE306 ;
            $result->GP_CSE306=$request->GP_CSE306 ;
            $result->LG_EEE309=$request->LG_EEE309 ;
            $result->GP_EEE309=$request->GP_EEE309 ;
            $result->LG_EEE310=$request->LG_EEE310 ;
            $result->GP_EEE310=$request->GP_EEE310 ;
            $result->LG_MATH301=$request->LG_MATH301 ;
            $result->GP_MATH301=$request->GP_MATH301 ;
            $result->GPA=$request->GPA ;
            $result->CGPA=$request->CGPA ;
            $result->save();

        return view('pages.admin.InsertResult.res_2_1');


        }

        else return redirect()->route('homepage');
    }
       public function insert_2_2(Request $request)
    {
    	if (Auth::guard('admin')->check()){

            $result=new Result_2_2;
            $result->Registration_no=$request->Registration_no ;
            $result->LG_CSE401=$request->LG_CSE401 ;
            $result->GP_CSE401=$request->GP_CSE401 ;
            $result->LG_CSE402=$request->LG_CSE402 ;
            $result->GP_CSE402=$request->GP_CSE402 ;
            $result->LG_CSE403=$request->LG_CSE403 ;
            $result->GP_CSE403=$request->GP_CSE403 ;
            $result->LG_CSE404=$request->LG_CSE404 ;
            $result->GP_CSE404=$request->GP_CSE404 ;
            $result->LG_CSE405=$request->LG_CSE405 ;
            $result->GP_CSE405=$request->GP_CSE405 ;
            $result->LG_EEE407=$request->LG_EEE407 ;
            $result->GP_EEE407=$request->GP_EEE407 ;
            $result->LG_EEE408=$request->LG_EEE408 ;
            $result->GP_EEE408=$request->GP_EEE408 ;
            $result->LG_MATH401=$request->LG_MATH401 ;
            $result->GP_MATH401=$request->GP_MATH401 ;
            $result->LG_SS401=$request->LG_SS401 ;
            $result->GP_SS401=$request->GP_SS401 ;
            $result->GPA=$request->GPA ;
            $result->CGPA=$request->CGPA ;
            $result->save();


        return view('pages.admin.InsertResult.res_2_2');

        }
        else return redirect()->route('homepage');
    }
       public function insert_3_1(Request $request)
    {
    	if (Auth::guard('admin')->check()){
            $result=New Result_3_1;
            $result->Registration_no=$request->Registration_no ;
            $result->LG_CSE501=$request->LG_CSE501 ;
            $result->GP_CSE501=$request->GP_CSE501 ;
            $result->LG_CSE502=$request->LG_CSE502 ;
            $result->GP_CSE502=$request->GP_CSE502 ;
            $result->LG_CSE503=$request->LG_CSE503 ;
            $result->GP_CSE503=$request->GP_CSE503 ;
            $result->LG_CSE505=$request->LG_CSE505 ;
            $result->GP_CSE505=$request->GP_CSE505 ;
            $result->LG_CSE506=$request->LG_CSE506 ;
            $result->GP_CSE506=$request->GP_CSE506 ;
            $result->LG_CSE507=$request->LG_CSE507 ;
            $result->GP_CSE507=$request->GP_CSE507 ;
            $result->LG_CSE508=$request->LG_CSE508 ;
            $result->GP_CSE508=$request->GP_CSE508 ;
            $result->LG_CSE509=$request->LG_CSE509 ;
            $result->GP_CSE509=$request->GP_CSE509 ;
            $result->LG_SS501=$request->LG_SS501 ;
            $result->GP_SS501=$request->GP_SS501 ;
            $result->GPA=$request->GPA ;
            $result->CGPA=$request->CGPA ;
            $result->save();
        return view('pages.admin.InsertResult.res_3_1');

       }
       else return redirect()->route('homepage');
    }
       public function insert_3_2(Request $request)
    {
    	if (Auth::guard('admin')->check()){
        $result=new Result_3_2;
        $result->Registration_no=$request->Registration_no ;
        $result->LG_CSE601=$request->LG_CSE601 ;
        $result->GP_CSE601=$request->GP_CSE601 ;
        $result->LG_CSE603=$request->LG_CSE603 ;
        $result->GP_CSE603=$request->GP_CSE603 ;
        $result->LG_CSE604=$request->LG_CSE604 ;
        $result->GP_CSE604=$request->GP_CSE604 ;
        $result->LG_CSE605=$request->LG_CSE605 ;
        $result->GP_CSE605=$request->GP_CSE605 ;
        $result->LG_CSE607=$request->LG_CSE607 ;
        $result->GP_CSE607=$request->GP_CSE607 ;
        $result->LG_CSE608=$request->LG_CSE608 ;
        $result->GP_CSE608=$request->GP_CSE608 ;
        $result->LG_CSE609=$request->LG_CSE609 ;
        $result->GP_CSE609=$request->GP_CSE609 ;
        $result->LG_CSE610=$request->LG_CSE610 ;
        $result->GP_CSE610=$request->GP_CSE610 ;
        $result->LG_CSE612=$request->LG_CSE612 ;
        $result->GP_CSE612=$request->GP_CSE612 ;
        $result->GPA=$request->GPA ;
        $result->CGPA=$request->CGPA ;

        $result->save();
        return view('pages.admin.InsertResult.res_3_2');

        }
        else return redirect()->route('homepage');
    }
       public function insert_4_1(Request $request)
    {
    	
        if (Auth::guard('admin')->check()){
       
        $result=new Result_4_1;
        $result->Registration_no=$request->Registration_no ;
        $result->LG_CSE700=$request->LG_CSE700 ;
        $result->GP_CSE700=$request->GP_CSE700 ;
        $result->LG_CSE701=$request->LG_CSE701 ;
        $result->GP_CSE701=$request->GP_CSE701 ;
        $result->LG_CSE702=$request->LG_CSE702 ;
        $result->GP_CSE702=$request->GP_CSE702 ;
        $result->LG_CSE703=$request->LG_CSE703 ;
        $result->GP_CSE703=$request->GP_CSE703 ;
        $result->LG_CSE704=$request->LG_CSE704 ;
        $result->GP_CSE704=$request->GP_CSE704 ;
        $result->LG_IPE701=$request->LG_IPE701 ;
        $result->GP_IPE701=$request->GP_IPE701 ;
        $result->LG_SS703=$request->LG_SS703 ;
        $result->GP_SS703=$request->GP_SS703 ;
        $result->LG_SS705=$request->LG_SS705 ;
        $result->GP_SS705=$request->GP_SS705 ;
        $result->OptionalSubCode=$request->OptionalSubCode ;
        $result->LG_Optional=$request->LG_Optional ;
        $result->GP_Optional=$request->GP_Optional ;
        $result->GPA=$request->GPA;
        $result->CGPA=$request->CGPA;
        $result->save();
        return view('pages.admin.InsertResult.res_4_1');
        }
        else return redirect()->route('homepage');
    }

       public function insert_4_2(Request $request)
    {
    	if (Auth::guard('admin')->check()){
        $result=new Result_4_2;
        $result->Registration_no=$request->Registration_no ;
        $result->LG_CSE800=$request->LG_CSE800 ;
        $result->GP_CSE800=$request->GP_CSE800 ;
        $result->LG_CSE801=$request->LG_CSE801 ;
        $result->GP_CSE801=$request->GP_CSE801 ;
        $result->LG_CSE802=$request->LG_CSE802 ;
        $result->GP_CSE802=$request->GP_CSE802 ;
        $result->LG_CSE803=$request->LG_CSE803 ;
        $result->GP_CSE803=$request->GP_CSE803 ;
        $result->OptionalTheoryCode=$request->OptionalTheoryCode ;
        $result->LG_OptionalTheory=$request->LG_OptionalTheory ;
        $result->GP_OptionalTheory=$request->GP_OptionalTheory ;
        $result->OptionalLabCode=$request->OptionalLabCode ;
        $result->LG_OptionalLab=$request->LG_OptionalLab ;
        $result->GP_OptionalLab=$request->GP_OptionalLab ;
        $result->GPA=$request->GPA ;
        $result->CGPA=$request->CGPA ;
        
        $result->save();
        return view('pages.admin.InsertResult.res_4_2');
        }
        else return redirect()->route('homepage');
    }

}
