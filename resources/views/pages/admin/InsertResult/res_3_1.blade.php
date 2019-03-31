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
  

  <form class="form-horizontal  " action="{{route('insert_3_1')}}" method="POST">
    @csrf
    <legend class="text-center header" style="background: #389fab; color: black;"><b>Insert Result (3-1) </b></legend>
    <fieldset>
  <div class="form-group row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="Registration_no">Registration No:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control  text-primary" id="Registration_no" name="Registration_no" placeholder="Registration No." required>
    </div>
  </div>
  <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE501">LG(CSE 501):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE501" placeholder="LG(CSE 501)" name="LG_CSE501">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE501">GP(CSE 501):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE501" placeholder="GP(CSE 501)" name="GP_CSE501">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE502">LG(CSE 502):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE502" placeholder="LG(CSE 502)" name="LG_CSE502">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE502">GP(CSE 502):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE502" placeholder="GP(CSE 502)" name="GP_CSE502">
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE503">LG(CSE 503):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE503" placeholder="LG(CSE 503)" name="LG_CSE503">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE503">GP(CSE 503):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE503" placeholder="GP(CSE 503)" name="GP_CSE503">
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE505">LG(CSE 505):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE505" placeholder="LG(CSE 505)" name="LG_CSE505">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE505">GP(CSE 505):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE505" placeholder="GP(CSE 505)" name="GP_CSE505">
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE506">LG(CSE 506):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE506" placeholder="LG(CSE 506)" name="LG_CSE506">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE506">GP(CSE 506):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE506" placeholder="GP(CSE 506)" name="GP_CSE506">
    </div>
  </div>

    
    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE507">LG(CSE 507):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE507" placeholder="LG(CSE 507)" name="LG_CSE507">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE507">GP(CSE 507):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE507" placeholder="GP(CSE 507)" name="GP_CSE507">
    </div>
  </div>

      <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE508">LG(CSE 508):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE508" placeholder="LG(CSE 508)" name="LG_CSE508">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE508">GP(CSE 508):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE508" placeholder="GP(CSE 508)" name="GP_CSE508">
    </div>
  </div>

        <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE509">LG(CSE 509):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE509" placeholder="LG(CSE 509)" name="LG_CSE509">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE509">GP(CSE 509):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE509" placeholder="GP(CSE 509)" name="GP_CSE509">
    </div>
  </div>

      <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_SS501">LG(SS 501):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_SS501" placeholder="LG(SS 501)" name="LG_SS501">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_SS501">GP(SS 501):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_SS501" placeholder="GP(SS 501)" name="GP_SS501">
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