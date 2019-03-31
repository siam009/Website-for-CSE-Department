@extends('partials.master')

@section('afterNav')

<div class="pt-4"></div>



<div class="container" style="background: #00142d;">



	 <form class="form-horizontal  " action="{{route('update_4_2')}}" method="POST">
    @csrf
    @foreach($result as $result)
    <legend class="text-center header" style="background:#52587d;color: #0d1126"><b>Update Result(4-2) <> (Registration No: {{$result->Registration_no}})</b></legend>
    <fieldset>
  <div class="form-group row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="ex4">Registration No:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control  text-primary" id="ex4" name="Registration_no" placeholder="Registration No." value="{{$result->Registration_no}}" required>
    </div>
  </div>
  <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE800">LG(CSE 800):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE800" placeholder="LG(CSE 800)" name="LG_CSE800" value="{{$result->LG_CSE800}}">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE800">GP(CSE 800):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE800" placeholder="GP(CSE 800)" name="GP_CSE800" value={{$result->GP_CSE800}}>
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE801">LG(CSE801):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE801" placeholder="LG(CSE 801)" name="LG_CSE801" value="{{$result->LG_CSE801}}">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE801">GP(CSE 801):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE801" placeholder="GP(CSE 801)" name="GP_CSE801" value={{ $result->GP_CSE801}}>
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE802">LG(CSE 802):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE802" placeholder="LG(CSE 802)" name="LG_CSE802" value="{{$result->LG_CSE802}}">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE802">GP(CSE 802):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE802" placeholder="GP(CSE 802)" name="GP_CSE802" value={{ $result->GP_CSE802}}>
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE803">LG(CSE 803):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE803" placeholder="LG(CSE 803)" name="LG_CSE803" value="{{$result->LG_CSE803}}">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE803">GP(CSE 803):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE803" placeholder="GP(CSE 803)" name="GP_CSE803" value={{ $result->GP_CSE803}}>
    </div>
  </div>



      <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="OptionalTheoryCode">Optional(Theory Code):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="OptionalTheoryCode" placeholder="Optional Theory Code(807/809/811/813/819)" name="OptionalTheoryCode" value="{{$result->OptionalTheoryCode}}">
    </div>
  </div>

  <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_OptionalTheory">LG(Optional Theory):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_OptionalTheory" placeholder="LG(Optional Theory )" name="LG_OptionalTheory" value="{{$result->LG_OptionalTheory}}">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_OptionalTheory">GP(Optional Theory):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_OptionalTheory" placeholder="GP(Optional Theory)" name="GP_OptionalTheory" value={{ $result->GP_OptionalTheory}}>
    </div>
  </div>


  <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="OptionalLabCode">Optional(Lab Code):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="OptionalLabCode" placeholder="Optional Lab Code(808/810/812/814/820)" name="OptionalLabCode" value="{{$result->OptionalLabCode}}">
    </div>
  </div>

  <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_OptionalLab">LG(Optional Lab):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_OptionalLab" placeholder="LG(Optional Lab )" name="LG_OptionalLab" value="{{$result->LG_OptionalLab}}">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_OptionalLab">GP(Optional Lab ):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_OptionalLab" placeholder="GP(Optional Lab )" name="GP_OptionalLab" value={{ $result->GP_OptionalLab}}>
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