@extends('partials.master')

@section('afterNav')

<div class="pt-4"></div>



<div class="container" style="background: #00142d;">

	<form class="form-horizontal  " action="{{route('update_2_1')}}" method="POST">
    @csrf
    @foreach($result as $result)
    <legend class="text-center header" style="background:#52587d;color: #0d1126"><b>Insert Result(2-1)<> (Registration No: {{$result->Registration_no}})</b></legend>
    <fieldset>
  <div class="form-group row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="ex4">Registration No:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control  text-primary" id="ex4" name="Registration_no" placeholder="Registration No."  value="{{$result->Registration_no}}" required>
    </div>
  </div>
  <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE301">LG(CSE 301):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE301" placeholder="LG(CSE 301)" name="LG_CSE301" value="{{$result->LG_CSE301}}">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE301">GP(CSE 301):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE301" placeholder="GP(CSE 301)" name="GP_CSE301" value={{ $result->GP_CSE301}}>
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE302">LG(CSE 302):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE302" placeholder="LG(CSE 302)" name="LG_CSE302" value="{{$result->LG_CSE302}}">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE302">GP(CSE 302):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE302" placeholder="GP(CSE 302)" name="GP_CSE302" value={{ $result->GP_CSE302}}>
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE303">LG(CSE 303):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE303" placeholder="LG(CSE 303)" name="LG_CSE303" value="{{$result->LG_CSE303}}">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE303">GP(CSE 303):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE303" placeholder="GP(CSE 303)" name="GP_CSE303" value={{ $result->GP_CSE303}}>
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE304">LG(CSE 304):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE304" placeholder="LG(CSE 304)" name="LG_CSE304" value="{{$result->LG_CSE304}}">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE304">GP(CSE 304):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE304" placeholder="GP(CSE 304)" name="GP_CSE304" value={{ $result->GP_CSE304}}>
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE305">LG(CSE 305):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE305" placeholder="LG(CSE 305)" name="LG_CSE305" value="{{$result->LG_CSE305}}">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE305">GP(CSE 305):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE305" placeholder="GP(CSE 305)" name="GP_CSE305" value={{ $result->GP_CSE305}}>
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE306">LG(CSE 306):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE306" placeholder="LG(CSE 306)" name="LG_CSE306" value="{{$result->LG_CSE306}}">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE306">GP(CSE 306):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE306" placeholder="GP(CSE 306)" name="GP_CSE306" value={{ $result->GP_CSE306}}>
    </div>
  </div>

       <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_EEE309">LG(EEE 309):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_EEE309" placeholder="LG(EEE 309)" name="LG_EEE309" value="{{$result->LG_EEE309}}">
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_EEE309">GP(EEE 309):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_EEE309" placeholder="GP(EEE 309)" name="GP_EEE309" value={{ $result->GP_EEE309}}>
    </div>
  </div>


     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_EEE310">LG(EEE 310):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_EEE310" placeholder="LG(EEE 310)" name="LG_EEE310" value="{{$result->LG_EEE310}}">
    </div>
  </div>

      <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_EEE310">GP(EEE 310):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_EEE310" placeholder="GP(EEE 310)" name="GP_EEE310" value={{ $result->GP_EEE310}}>
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_MATH301">LG(MATH 301):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_MATH301" placeholder="LG(MATH 301)" name="LG_MATH301" value="{{ $result->LG_MATH301}}">
    </div>
  </div>

       <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_MATH301">GP(MATH 301):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_MATH301" placeholder="GP(MATH 301)" name="GP_MATH301" value={{ $result->GP_MATH301}}>
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