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

class DeleteController extends Controller
{
    public function view_delete_res()
	{
		if (Auth::guard('admin')->check()){
			return view('pages.admin.DeleteResult.delete_res');
		}
		else return redirect()->route('homepage');
	}
	
	
	public function delete_res(Request $request)
	{
		$year=$request->year;
		$semester=$request->semester;
		if (Auth::guard('admin')->check()){
		if($year==1 && $semester==1){
			$result =Result_1_1::where('Registration_no',$request->Registration_no)->get();
			if(count($result)>0){
				//return view('pages.admin.UpdateResult.res_1_1')->with('result',$result);
				foreach($result as $result){
				$result->delete();
				
				}
				echo "successfully deleted";
				
			}
			else dd('not match');
		}
		else if($year==1 && $semester==2){
			$result = Result_1_2::where('Registration_no',$request->Registration_no)->get();
			if(count($result)>0){
				foreach($result as $result)
				$result->delete();
			}
			else dd('not match');
		}
		else if($year==2 && $semester==1){
			$result = Result_2_1::where('Registration_no',$request->Registration_no)->get();
			if(count($result)>0){
				foreach($result as $result)
				$result->delete();
			}
			else dd('not match');
		}
		else if($year==2 && $semester==2){
			$result = Result_2_2::where('Registration_no',$request->Registration_no)->get();
			if(count($result)>0){
				foreach($result as $result)
				$result->delete();
			}
			else dd('not match');
		}
		else if($year==3 && $semester==1){
			$result = Result_3_1::where('Registration_no',$request->Registration_no)->get();
			if(count($result)>0){
				foreach($result as $result)
				$result->delete();
			}
			else dd('not match');
		}
		else if($year==3 && $semester==2){
			$result = Result_3_2::where('Registration_no',$request->Registration_no)->get();
			if(count($result)>0){
				foreach($result as $result)
				$result->delete();
			}
			else dd('not match');
		}
		else if($year==4 && $semester==1){
			$result = Result_4_1::where('Registration_no',$request->Registration_no)->get();
			if(count($result)>0){
				foreach($result as $result)
				$result->delete();
			}
			else dd('not match');
		}
		else if($year==4 && $semester==2){
			$result = Result_4_2::where('Registration_no',$request->Registration_no)->get();
			if(count($result)>0){
				foreach($result as $result)
				$result->delete();
			}
			else dd('not match');
		}

	}
	 else return redirect()->route('homepage');
	}
	
}
