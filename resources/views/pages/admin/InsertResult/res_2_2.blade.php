@extends('partials.master')




@section('afterNav')


<div class="p-4 container"></div>

  <div class="example1 container">
<h3 class=" text-center" style="background: #98d9c1; color: #0f0f39;">Welcome to Admin Panel</h3>
</div>

<div class="p-4 container"></div>



<!------ Include the above in your HEAD tag ---------->
<div class="container ">
<div class="row container">
<div class="col-lg-3 col-md-3 col-sm-8 " style="background: #00142d;">
<nav class="navbar  sidebar">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    
    <!-- Collect the nav links, forms, and other content for toggling -->

      <ul class=" navbar-nav">
        
          <div class="container">
        <li class=" nav-item "><a class="nav-link text-white" href="{{route('admin.dashboard')}}">Dashboard</a></li>

        <li class="dropdown nav-item mt-2">
          <a href="#" class="dropdown-toggle text-white active" data-toggle="dropdown">Insert Exam Result </a>
          <ul class="dropdown-menu text-center " style="background: #171731;"  >
            <li class="nav-item" ><a  class="nav-link text-white " href="{{route('view_insert_1_1')}}">1-1</a></li>
            <li class="nav-item" ><a  class="nav-link text-white " href="{{route('view_insert_1_2')}}">1-2</a></li>
            <li class="nav-item" ><a  class="nav-link text-white " href="{{route('view_insert_2_1')}}">2-1</a></li>
            <li class="divider"></li>
            <li class="nav-item" ><a  class="nav-link text-white " href="{{route('view_insert_2_2')}}">2-2</a></li>
            <li class="divider"></li>
            <li class="nav-item" ><a  class="nav-link text-white " href="{{route('view_insert_3_1')}}">3-1</a></li>
            <li class="divider"></li>
            <li class="nav-item" ><a  class="nav-link text-white " href="{{route('view_insert_3_2')}}">3-2</a></li>
            <li class="divider"></li>
            <li class="nav-item" ><a  class="nav-link text-white " href="{{route('view_insert_4_1')}}">4-1</a></li>
            <li class="divider"></li>
            <li class="nav-item" ><a  class="nav-link text-white " href="{{route('view_insert_4_2')}}">4-2</a></li>
          </ul>
        </li>

        <li class=" nav-item active"><a class="nav-link text-white" href="{{route('checkUpdateView')}}">Update Result</a></li>
    <li class=" nav-item active"><a class="nav-link text-white" href="{{route('view_delete_res')}}">Delete Result</a></li>
      </div>

      </ul>
   
  </div>
</nav>
</div>
<div class="col-md-9 col-lg-9 col-sm-10 " style="background: #2d5d67;">
  

  <form class="form-horizontal  " action="{{route('insert_2_2')}}" method="POST">
    @csrf
    <legend class="text-center header" style="background: #389fab; color: black;"><b>Insert Result (2-2) </b></legend>
    <fieldset>
  <div class="form-group row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="ex4">Registration No:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control  text-primary" id="ex4" name="Registration_no" placeholder="Registration No." required>
    </div>
  </div>
  <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE401">LG(CSE 401):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE401" placeholder="LG(CSE 401)" name="LG_CSE401">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE401">GP(CSE 401):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE401" placeholder="GP(CSE 401)" name="GP_CSE401">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE402">LG(CSE 402):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE402" placeholder="LG(CSE 402)" name="LG_CSE402">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE402">GP(CSE 402):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE402" placeholder="GP(CSE 402)" name="GP_CSE402">
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE403">LG(CSE 403):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE403" placeholder="LG(CSE 403)" name="LG_CSE403">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE403">GP(CSE 403):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE403" placeholder="GP(CSE 403)" name="GP_CSE403">
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE404">LG(CSE 404):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE404" placeholder="LG(CSE 404)" name="LG_CSE404">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE404">GP(CSE 404):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE404" placeholder="GP(CSE 404)" name="GP_CSE404">
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE405">LG(CSE 405):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE405" placeholder="LG(CSE 405)" name="LG_CSE405">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE405">GP(CSE 405):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE405" placeholder="GP(CSE 405)" name="GP_CSE405">
    </div>
  </div>

    

       <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_EEE407">LG(EEE 407):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_EEE407" placeholder="LG(EEE 407)" name="LG_EEE407">
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_EEE407">GP(EEE 407):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_EEE407" placeholder="GP(EEE 407)" name="GP_EEE407">
    </div>
  </div>


     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_EEE408">LG(EEE 408):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_EEE408" placeholder="LG(EEE 408)" name="LG_EEE408">
    </div>
  </div>

      <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_EEE408">GP(EEE 408):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_EEE408" placeholder="GP(EEE 408)" name="GP_EEE408">
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_MATH401">LG(MATH 401):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_MATH401" placeholder="LG(MATH 401)" name="LG_MATH401">
    </div>
  </div>

       <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_MATH401">GP(MATH 401):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_MATH401" placeholder="GP(MATH 401)" name="GP_MATH401">
    </div>
  </div>

  <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GPA">GPA</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GPA" placeholder="GPA" name="GPA">
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="CGPA">CGPA</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="CGPA" placeholder="CGPA" name="CGPA">
    </div>
  </div>

     <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
                     <div class="row">
        <div class="col">
      <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      <div class="col">
        <a href="{{route('admin.dashboard')}}"><button type="button" class="btn btn-outline-primary">AdminHome</button></a>
        
      </div>
      </div>
          </div>
      </div>

</fieldset>
</form>

</div>

</div>
</div>



@endsection