@extends('partials.master')

@section('afterNav')

<div class="pt-4"></div>



<div class="container" style="background: #00142d;">



	  <form class="form-horizontal  " action="{{route('update_2_2')}}" method="POST">
    @csrf
    @foreach($result as $result)
    <legend class="text-center header" style="background:#52587d;color: #0d1126"><b>Update Result(2-2)<> (Registration no: {{$result->Registration_no}})</b></legend>
    <fieldset>
  <div class="form-group row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="ex4">Registration No:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control  text-primary" id="ex4" name="Registration_no" placeholder="Registration No." value="{{$result->Registration_no}}" required>
    </div>
  </div>
  <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE401">LG(CSE 401):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE401" placeholder="LG(CSE 401)" name="LG_CSE401" value="{{$result->LG_CSE401}}">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE401">GP(CSE 401):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE401" placeholder="GP(CSE 401)" name="GP_CSE401" value={{ $result->GP_CSE401}}>
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE402">LG(CSE 402):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE402" placeholder="LG(CSE 402)" name="LG_CSE402" value="{{$result->LG_CSE402}}">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE402">GP(CSE 402):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE402" placeholder="GP(CSE 402)" name="GP_CSE402" value={{ $result->GP_CSE402}}>
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE403">LG(CSE 403):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE403" placeholder="LG(CSE 403)" name="LG_CSE403" value="{{$result->LG_CSE403}}">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE403">GP(CSE 403):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE403" placeholder="GP(CSE 403)" name="GP_CSE403" value={{ $result->GP_CSE403}}>
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE404">LG(CSE 404):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE404" placeholder="LG(CSE 404)" name="LG_CSE404" value="{{$result->LG_CSE404}}">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE404">GP(CSE 404):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE404" placeholder="GP(CSE 404)" name="GP_CSE404" value={{ $result->GP_CSE404}}>
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE405">LG(CSE 405):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE405" placeholder="LG(CSE 405)" name="LG_CSE405" value="{{ $result->LG_CSE405}}">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE405">GP(CSE 405):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE405" placeholder="GP(CSE 405)" name="GP_CSE405" value={{ $result->GP_CSE405}}>
    </div>
  </div>

    

       <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_EEE407">LG(EEE 407):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_EEE407" placeholder="LG(EEE 407)" name="LG_EEE407" value="{{$result->LG_EEE407}}">
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_EEE407">GP(EEE 407):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_EEE407" placeholder="GP(EEE 407)" name="GP_EEE407" value={{ $result->GP_EEE407}}>
    </div>
  </div>


     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_EEE408">LG(EEE 408):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_EEE408" placeholder="LG(EEE 408)" name="LG_EEE408" value="{{$result->LG_EEE408}}">
    </div>
  </div>

      <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_EEE408">GP(EEE 408):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_EEE408" placeholder="GP(EEE 408)" name="GP_EEE408" value={{ $result->GP_EEE408}}>
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_MATH401">LG(MATH 401):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_MATH401" placeholder="LG(MATH 401)" name="LG_MATH401" value="{{$result->LG_MATH401}}">
    </div>
  </div>

       <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_MATH401">GP(MATH 401):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_MATH401" placeholder="GP(MATH 401)" name="GP_MATH401" value={{ $result->GP_MATH401}}>
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