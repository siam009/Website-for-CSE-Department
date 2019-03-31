@extends('partials.master')

@section('afterNav')

<div class="pt-4"></div>



<div class="container" style="background: #00142d;">



	<form class="form-horizontal  " action="{{route('update_4_1')}}" method="POST">
    @csrf
    @foreach($result as $result)
    <legend class="text-center header" style="background:#52587d;color: #0d1126"><b>Update Result(4-1) <> (Registration No: {{$result->Registration_no}})</b></legend>
    <fieldset>
  <div class="form-group row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="ex4">Registration No:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control  text-primary" id="ex4" name="Registration_no" placeholder="Registration No." value="{{$result->Registration_no}}" required>
    </div>
  </div>
  <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE700">LG(CSE 700):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE700" placeholder="LG(CSE 700)" name="LG_CSE700" value="{{ $result->LG_CSE700}}">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE700">GP(CSE 700):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE700" placeholder="GP(CSE 700)" name="GP_CSE700" value={{ $result->GP_CSE700}}>
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE701">LG(CSE701):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE701" placeholder="LG(CSE 701)" name="LG_CSE701" value="{{$result->LG_CSE701}}">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE701">GP(CSE 701):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE701" placeholder="GP(CSE 701)" name="GP_CSE701" value="{{ $result->GP_CSE701}}">
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE702">LG(CSE 702):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE702" placeholder="LG(CSE 702)" name="LG_CSE702" value="{{$result->LG_CSE702}}">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE702">GP(CSE 702):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE702" placeholder="GP(CSE 702)" name="GP_CSE702" value={{ $result->GP_CSE702}}>
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE703">LG(CSE 703):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE703" placeholder="LG(CSE 703)" name="LG_CSE703" value="{{$result->LG_CSE703}}">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE703">GP(CSE 703):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE703" placeholder="GP(CSE 703)" name="GP_CSE703" value={{ $result->GP_CSE703}}>
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE704">LG(CSE 704):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE704" placeholder="LG(CSE 704)" name="LG_CSE704" value="{{$result->LG_CSE704}}">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE704">GP(CSE 704):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE704" placeholder="GP(CSE 704)" name="GP_CSE704" value={{ $result->GP_CSE704}}>
    </div>
  </div>

    
    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_IPE701">LG(IPE 701):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_IPE701" placeholder="LG(IPE 701)" name="LG_IPE701" value="{{$result->LG_IPE701}}">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_IPE701">GP(IPE 701):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_IPE701" placeholder="GP(IPE 701)" name="GP_IPE701" value={{ $result->GP_IPE701}}>
    </div>
  </div>

      <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_SS703">LG(SS 703):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_SS703" placeholder="LG(SS 703)" name="LG_SS703" value={{$result->LG_SS703}}>
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_SS703">GP(SS 703):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_SS703" placeholder="GP(SS 703)" name="GP_SS703" value={{ $result->GP_SS703}}>
    </div>
  </div>

        <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_SS705">LG(SS 705):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_SS705" placeholder="LG(SS 705)" name="LG_SS705" value="{{$result->LG_SS705}}">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_SS705">GP(SS 705):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_SS705" placeholder="GP(SS 705)" name="GP_SS705" value={{ $result->GP_SS705}}>
    </div>
  </div>

      <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="OptionalSubCode">OptionalSubCode:</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="OptionalSubCode" placeholder="Optional Subject Code(705/707/709/711/713)" name="OptionalSubCode" value="{{$result->OptionalSubCode}}">
    </div>
  </div>

  <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_Optional">LG(Optional):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_Optional" placeholder="LG Optional" name="LG_Optional" value="{{$result->LG_Optional}}">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_Optional">GP(Optional):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_Optional" placeholder="GP(Optional)" name="GP_Optional" value={{$result->GP_Optional}}>
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