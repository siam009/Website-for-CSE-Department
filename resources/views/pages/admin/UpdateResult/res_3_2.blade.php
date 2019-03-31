@extends('partials.master')

@section('afterNav')

<div class="pt-4"></div>



<div class="container" style="background: #00142d;">
	

 <form class="form-horizontal  " action="{{route('update_3_2')}}" method="POST">
    @csrf
    @foreach($result as $result)
    <legend class="text-center header" style="background:#52587d;color: #0d1126"><b>Update Result(3-2) <> (Registration No: {{ $result->Registration_no}})</b></legend>
    <fieldset>
  <div class="form-group row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="ex4">Registration No:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control  text-primary" id="ex4" name="Registration_no" placeholder="Registration No." value="{{$result->Registration_no}}" required>
    </div>
  </div>
  <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE601">LG(CSE 601):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE601" placeholder="LG(CSE 601)" name="LG_CSE601" value="{{$result->LG_CSE601}}">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE601">GP(CSE 601):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE601" placeholder="GP(CSE 601)" name="GP_CSE601" value={{ $result->GP_CSE601}}>
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE603">LG(CSE 603):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE603" placeholder="LG(CSE 603)" name="LG_CSE603" value="{{ $result->LG_CSE603}}">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE603">GP(CSE 603):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE603" placeholder="GP(CSE 603)" name="GP_CSE603" value={{ $result->GP_CSE603}}>
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE604">LG(CSE 604):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE604" placeholder="LG(CSE 604)" name="LG_CSE604" value="{{ $result->LG_CSE604}}">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE604">GP(CSE 604):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE604" placeholder="GP(CSE 604)" name="GP_CSE604" value={{ $result->GP_CSE604}}>
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE605">LG(CSE 605):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE605" placeholder="LG(CSE 605)" name="LG_CSE605" value="{{$result->LG_CSE605}}">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE605">GP(CSE 605):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE605" placeholder="GP(CSE 605)" name="GP_CSE605" value={{ $result->GP_CSE605}}>
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE607">LG(CSE 607):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE607" placeholder="LG(CSE 607)" name="LG_CSE607" value="{{$result->LG_CSE607}}">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE607">GP(CSE 607):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE607" placeholder="GP(CSE 607)" name="GP_CSE607" value={{ $result->GP_CSE607}}>
    </div>
  </div>

    
    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE608">LG(CSE 608):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE608" placeholder="LG(CSE 608)" name="LG_CSE608" value="{{$result->LG_CSE608}}">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE608">GP(CSE 608):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE608" placeholder="GP(CSE 608)" name="GP_CSE608" value={{ $result->GP_CSE608}}>
    </div>
  </div>

      <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE609">LG(CSE 609):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE609" placeholder="LG(CSE 609)" name="LG_CSE609" value="{{$result->LG_CSE609}}">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE609">GP(CSE 609):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE609" placeholder="GP(CSE 609)" name="GP_CSE609" value={{ $result->GP_CSE609}}>
    </div>
  </div>

        <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE610">LG(CSE610):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE610" placeholder="LG(CSE 610)" name="LG_CSE610" value="{{$result->LG_CSE610}}">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE610">GP(CSE 610):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE610" placeholder="GP(CSE 610)" name="GP_CSE610" value={{ $result->GP_CSE610}}>
    </div>
  </div>

      <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE612">LG(CSE 612):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE612" placeholder="LG(CSE 612)" name="LG_CSE612" value="{{$result->LG_CSE612}}">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE612">GP(CSE 612):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE612" placeholder="GP(CSE 612)" name="GP_CSE612" value={{ $result->GP_CSE612}}>
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