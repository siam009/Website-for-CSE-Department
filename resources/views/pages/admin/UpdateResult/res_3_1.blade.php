@extends('partials.master')

@section('afterNav')

<div class="pt-4"></div>



<div class="container" style="background: #00142d;">

	<form class="form-horizontal  " action="{{route('update_3_1')}}" method="POST">
    @csrf
    @foreach($result as $result)
    <legend class="text-center header" style="background:#52587d;color: #0d1126"><b>Update Result(3-1) <> (Registration No: {{$result->Registration_no}})</b></legend>
    <fieldset>
  <div class="form-group row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="Registration_no">Registration No:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control  text-primary" id="Registration_no" name="Registration_no" placeholder="Registration No." value="{{$result->Registration_no}}" required>
    </div>
  </div>
  <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE501">LG(CSE 501):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE501" placeholder="LG(CSE 501)" name="LG_CSE501" value="{{$result->LG_CSE501}}">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE501">GP(CSE 501):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE501" placeholder="GP(CSE 501)" name="GP_CSE501" value={{ $result->GP_CSE501}}>
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE502">LG(CSE 502):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE502" placeholder="LG(CSE 502)" name="LG_CSE502" value="{{$result->LG_CSE502}}">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE502">GP(CSE 502):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE502" placeholder="GP(CSE 502)" name="GP_CSE502" value={{ $result->GP_CSE502}}>
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE503">LG(CSE 503):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE503" placeholder="LG(CSE 503)" name="LG_CSE503" value="{{$result->LG_CSE503}}">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE503">GP(CSE 503):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE503" placeholder="GP(CSE 503)" name="GP_CSE503" value={{ $result->GP_CSE503}}>
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE505">LG(CSE 505):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE505" placeholder="LG(CSE 505)" name="LG_CSE505" value="{{ $result->LG_CSE505}}">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE505">GP(CSE 505):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE505" placeholder="GP(CSE 505)" name="GP_CSE505" value={{ $result->GP_CSE505}}>
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE506">LG(CSE 506):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE506" placeholder="LG(CSE 506)" name="LG_CSE506" value="{{ $result->LG_CSE506}}">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE506">GP(CSE 506):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE506" placeholder="GP(CSE 506)" name="GP_CSE506" value={{ $result->GP_CSE506}}>
    </div>
  </div>

    
    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE507">LG(CSE 507):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE507" placeholder="LG(CSE 507)" name="LG_CSE507" value="{{$result->LG_CSE507}}">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE507">GP(CSE 507):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE507" placeholder="GP(CSE 507)" name="GP_CSE507" value={{ $result->GP_CSE507}}>
    </div>
  </div>

      <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE508">LG(CSE 508):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE508" placeholder="LG(CSE 508)" name="LG_CSE508" value="{{ $result->LG_CSE508}}">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE508">GP(CSE 508):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE508" placeholder="GP(CSE 508)" name="GP_CSE508" value={{ $result->GP_CSE508}}>
    </div>
  </div>

        <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE509">LG(CSE 509):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE509" placeholder="LG(CSE 509)" name="LG_CSE509" value="{{$result->LG_CSE509}}">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE509">GP(CSE 509):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE509" placeholder="GP(CSE 509)" name="GP_CSE509" value={{ $result->GP_CSE509}}>
    </div>
  </div>

      <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_SS501">LG(SS 501):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_SS501" placeholder="LG(SS 501)" name="LG_SS501" value="{{$result->LG_SS501}}">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_SS501">GP(SS 501):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_SS501" placeholder="GP(SS 501)" name="GP_SS501" value={{ $result->GP_SS501}}>
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