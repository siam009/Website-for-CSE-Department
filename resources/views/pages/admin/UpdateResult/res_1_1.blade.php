@extends('partials.master')

@section('afterNav')

<div class="pt-4"></div>



<div class="container" style="background: #00142d;">

     
	<form class="form-horizontal" action="{{route('update_1_1')}}" method="post">
     
    @csrf
    @foreach($result as $result) 
    <legend class="text-center header" style="background:#52587d;color: #0d1126"><b>Update Result (1-1)<> (Registration No: {{$result->Registration_no}})</b></legend>
    <fieldset>
  <div class="form-group row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="Registration_no">Registration No:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control  text-primary" id="Registration_no"  name="Registration_no" placeholder="Registration No." value="{{$result->Registration_no}}" required>
    </div>
  </div>
  <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE101">LG(CSE 101):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE101" placeholder="LG(CSE 101)" name="LG_CSE101" value="{{$result->LG_CSE101}}">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE101">GP(CSE 101):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE101" placeholder="GP(CSE 101)" name="GP_CSE101"  value="{{$result->GP_CSE101}}">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE102">LG(CSE 102):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE102" placeholder="LG(CSE 102)" name="LG_CSE102" value="{{$result->LG_CSE102}}">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE102">GP(CSE 102):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE102" placeholder="GP(CSE 102)" name="GP_CSE102" value={{ $result->GP_CSE102}}>
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_EEE105">LG(EEE 105):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_EEE105" placeholder="LG(EEE 105)" name="LG_EEE105" value="{{$result->LG_EEE105}}">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_EEE105">GP(EEE 105):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_EEE105" placeholder="GP(EEE 105)" name="GP_EEE105" value={{ $result->GP_EEE105}}>
    </div>
  </div>

  <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_EEE106">LG(EEE 106):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_EEE106" placeholder="LG(EEE 106)" name="LG_EEE106"  value="{{ $result->LG_EEE106}}">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_EEE106">GP(EEE 106):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_EEE106" placeholder="GP(EEE 106)" name="GP_EEE106" value={{ $result->GP_EEE106}}>
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_ME100">LG(ME 100):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_ME100" placeholder="LG(ME 100)" name="LG_ME100" value="{{$result->LG_ME100}}">
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_ME100">GP(ME 100):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_ME100" placeholder="GP(ME 100)" name="GP_ME100" value={{ $result->GP_ME100}}>
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_ME101">LG(ME 101):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_ME101" placeholder="LG(ME 101)" name="LG_ME101" value="{{ $result->LG_ME101}}">
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_ME101">GP(ME 101):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_ME101" placeholder="GP(ME 101)" name="GP_ME101" value={{ $result->GP_ME101}}>
    </div>
  </div>


     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_ME100">LG(ME 102):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_ME102" placeholder="LG(ME 102)" name="LG_ME102" value="{{ $result->LG_ME102}}">
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_ME102">GP(ME 102):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_ME102" placeholder="GP(ME 102)" name="GP_ME102" value={{ $result->GP_ME102}}>
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_MATH101">LG(MATH 101):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_MATH101" placeholder="LG(MATH 101)" name="LG_MATH101" value="{{ $result->LG_MATH101 }}">
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_MATH101">GP(MATH 101):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_MATH101" placeholder="GP(GP_MATH101)" name="GP_MATH101" value={{ $result->GP_MATH101 }}>
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_PHY101">LG(PHY 101):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_PHY101" placeholder="LG(PHY 101)" name="LG_PHY101" value="{{ $result->LG_PHY101}}">
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_PHY101">GP(PHY 101):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_PHY101" placeholder="GP(PHY 101)" name="GP_PHY101" value={{ $result->GP_PHY101 }}>
    </div>
  </div>


     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_PHY102">LG(PHY 102):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_PHY102" placeholder="LG(PHY 102)" name="LG_PHY102" value="{{ $result->LG_PHY102}}">
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_PHY102">GP(PHY 102):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_PHY102" placeholder="GP(PHY 102)" name="GP_PHY102" value={{ $result->GP_PHY102}}>
    </div>
  </div>


     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_SS101">LG(SS 101):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_SS101" placeholder="LG(SS 101)" name="LG_SS101" value="{{$result->LG_SS101}}">
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_SS101">GP(SS 101):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_SS101" placeholder="GP(SS 101)" name="GP_SS101" value={{ $result->GP_SS101}}>
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GPA">GPA</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GPA" placeholder="GPA" name="GPA" value={{ $result->GPA}}>
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="CGPA">CGPA</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="CGPA" placeholder="CGPA" name="CGPA" value={{ $result->CGPA}}>
    </div>
  </div>

     <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
                       <div class="row">
        <div class="col">
      <button type="submit" class="btn btn-primary">Update</button>
      </div>
      <div class="col">
        <a href="{{route('admin.dashboard')}}"><button type="button" class="btn btn-outline-primary">AdminHome</button></a>
        
      </div>
      </div>
          </div>
      </div>

</fieldset>
@endforeach

</form>	


	
</div>

@endsection