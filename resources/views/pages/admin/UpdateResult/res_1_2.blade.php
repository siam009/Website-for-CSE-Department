@extends('partials.master')

@section('afterNav')

<div class="pt-4"></div>



<div class="container" style="background: #00142d;">
	
	<form class="form-horizontal  " action="{{route('update_1_2')}}" method="POST">
    @csrf
    @foreach($result as $result)
    <legend class="text-center header" style="background:#52587d;color: #0d1126"><b>Update Result(1-2) <> (Registration No: {{$result->Registration_no}})</b></legend>
    <fieldset>
  <div class="form-group row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="ex4">Registration No:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control  text-primary" id="ex4" name="Registration_no" placeholder="Registration No." value="{{$result->Registration_no}}" required>
    </div>
  </div>
  <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE201">LG(CSE 201):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE201" placeholder="LG(CSE 201)" name="LG_CSE201" value="{{$result->LG_CSE201}}">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE201">GP(CSE 201):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE201" placeholder="GP(CSE 201)" name="GP_CSE201" value={{ $result->GP_CSE201}}>
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE202">LG(CSE 202):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE202" placeholder="LG(CSE 202)" name="LG_CSE202" value="{{$result->LG_CSE202}}">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE202">GP(CSE 202):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE202" placeholder="GP(CSE 202)" name="GP_CSE202" value={{ $result->GP_CSE202}}>
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CSE203">LG(CSE 203):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE203" placeholder="LG(CSE 203)" name="LG_CSE203" value="{{$result->LG_CSE203}}">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CSE203">GP(CSE 203):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE203" placeholder="GP(CSE 203)" name="GP_CSE203" value={{ $result->GP_CSE203}}>
    </div>
  </div>

  <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_MATH201">LG(MATH 201):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_MATH201" placeholder="LG(MATH 201)" name="LG_MATH201" value="{{$result->LG_MATH201}}">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_MATH201">GP(MATH 201):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_MATH201" placeholder="GP(MATH 201)" name="GP_MATH201" value={{$result->GP_MATH201}}>
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CHEM201">LG(CHEM 201):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CHEM201" placeholder="LG(CHEM 201)" name="LG_CHEM201" value="{{$result->LG_CHEM201}}">
    </div>
  </div>


     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CHEM201">GP(CHEM 201):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CHEM201" placeholder="GP(CHEM 201)" name="GP_CHEM201" value={{ $result->GP_CHEM201}}>
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_CHEM202">LG(CHEM 202):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CHEM202" placeholder="LG(CHEM 202)" name="LG_CHEM202" value="{{$result->LG_CHEM202}}">
    </div>
  </div>

      <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_CHEM202">GP(CHEM 202):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CHEM202" placeholder="GP(CHEM 202)" name="GP_CHEM202" value={{$result->GP_CHEM202}}>
    </div>
  </div>

       <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_ENG201">LG(ENG 201):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_ENG201" placeholder="LG(ENG 201)" name="LG_ENG201" value="{{$result->LG_ENG201}}">
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_ENG201">GP(ENG 201):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_ENG201" placeholder="GP(ENG 201)" name="GP_ENG201" value={{$result->GP_ENG201}}>
    </div>
  </div>


     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_ENG202">LG(ENG 202):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_ENG202" placeholder="LG(ENG 202)" name="LG_ENG202" value="{{$result->LG_ENG202}}">
    </div>
  </div>

      <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_ENG202">GP(ENG 202):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_ENG202" placeholder="GP(ENG 202)" name="GP_ENG202" value={{$result->GP_ENG202}}>
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="LG_SS201">LG(SS 201):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_SS201" placeholder="LG(SS 201)" name="LG_SS201" value="{{$result->LG_SS201}}">
    </div>
  </div>

       <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-primary" for="GP_SS201">GP(SS 201):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_SS201" placeholder="GP(SS 201)" name="GP_SS201" value={{$result->GP_SS201}}>
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