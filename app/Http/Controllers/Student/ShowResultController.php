<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Student\Result_1_1;
use App\Student\Result_1_2;
use App\Student\Result_2_1;
use App\Student\Result_2_2;
use App\Student\Result_3_1;
use App\Student\Result_3_2;
use App\Student\Result_4_1;
use App\Student\Result_4_2;

class ShowResultController extends Controller
{
    

    public function showResult(Request $request)
    {
    	
       
        /*if ($request->Registration_no=='2022'){
            $model=new Result_1_1;
            $result=Result_1_1::orderBy('id','desc')->where($model->Registration_no='2021')->get();
            ///$result=Result_1_1::->where('id',2);
            return view('pages.ResultShow.sec1_1')->with('result',$result);
    	}
        else dd('Not Found');*/
       // dd($request->Registration_no);
        //$result=Result_1_1::orderBy('id','desc')->get();
        //return view('pages.ResultShow.sec1_1')->with('result',$result);

        //1st Year 1st Semester
        if(!Auth::guest() || Auth::guard('admin')->check()){
        if($request->year==1 && $request->semester==1 && ( Auth::user()->Registration_no==$request->Registration_no || Auth::guard('admin')->check())){
            

            $result = Result_1_1::where('Registration_no',$request->Registration_no)->get();
            if(count($result)>0){
            return view('pages.ResultShow.res1_1')->with('result',$result);
            }
            else dd('Not Found');
         }
        //1st Year 2nd Semester
         else if($request->year==1 && $request->semester==2&& ( Auth::user()->Registration_no==$request->Registration_no || Auth::guard('admin')->check())){
            

            $result = Result_1_2::where('Registration_no',$request->Registration_no)->get();
            if(count($result)>0){
            return view('pages.ResultShow.res1_2')->with('result',$result);
            }
            else dd('Not Found');
         }

        // 2nd Year 1st Semester
          else if($request->year==2 && $request->semester==1 && ( Auth::user()->Registration_no==$request->Registration_no || Auth::guard('admin')->check())){
            $result = Result_2_1::where('Registration_no',$request->Registration_no)->get();
            if(count($result)>0){
            return view('pages.ResultShow.res2_1')->with('result',$result);
            }
            else dd('Not Found');
         }
            // 2nd Year 2nd Semester
          else if($request->year==2 && $request->semester==2 && ( Auth::user()->Registration_no==$request->Registration_no || Auth::guard('admin')->check())){
            

            $result = Result_2_2::where('Registration_no',$request->Registration_no)->get();
            if(count($result)>0){
            return view('pages.ResultShow.res2_2')->with('result',$result);
            }
            else dd('Not Found');
         }
         // 3rd Year 1st Semester
          else if($request->year==3 && $request->semester==1 && ( Auth::user()->Registration_no==$request->Registration_no || Auth::guard('admin')->check())){
            

            $result = Result_3_1::where('Registration_no',$request->Registration_no)->get();
            if(count($result)>0){
            return view('pages.ResultShow.res3_1')->with('result',$result);
            }
            else dd('Not Found');
         }
         // 3rd Year 2nd semester
          else if($request->year==3 && $request->semester==2 && ( Auth::user()->Registration_no==$request->Registration_no || Auth::guard('admin')->check())){
            

            $result = Result_3_2::where('Registration_no',$request->Registration_no)->get();
            if(count($result)>0){
            return view('pages.ResultShow.res3_2')->with('result',$result);
            }
            else dd('Not Found');
         }
         // 4th Year 1st Semester
          else if($request->year==4 && $request->semester==1 && ( Auth::user()->Registration_no==$request->Registration_no || Auth::guard('admin')->check())){
            

            $result = Result_4_1::where('Registration_no',$request->Registration_no)->get();
            if(count($result)>0){
            return view('pages.ResultShow.res4_1')->with('result',$result);
            }
            else dd('Not Found');
         }
         // 4th Year 2nd Semester
          else if($request->year==4 && $request->semester==2 && ( Auth::user()->Registration_no==$request->Registration_no || Auth::guard('admin')->check())){
            
         
            $result = Result_4_2::where('Registration_no',$request->Registration_no)->get();
            if(count($result)>0){
            return view('pages.ResultShow.res4_2')->with('result',$result);
            }
            else dd('Not Found');
         }

       else dd('Not Found');

     }
     else  dd('You are not registered member');

    }
}
