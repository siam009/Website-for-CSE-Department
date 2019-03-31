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
  

  <form class="form-horizontal  " action="{{route('insert_4_2')}}" method="POST">
    @csrf
    <legend class="text-center header " style="background: #389fab; color: black;"><b>Insert Result (4-2) </b></legend>
    <fieldset>
  <div class="form-group row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="ex4">Registration No:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control  text-primary" id="ex4" name="Registration_no" placeholder="Registration No." required>
    </div>
  </div>
  <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE800">LG(CSE 800):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE800" placeholder="LG(CSE 800)" name="LG_CSE800">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE800">GP(CSE 800):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE800" placeholder="GP(CSE 800)" name="GP_CSE800">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE801">LG(CSE801):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE801" placeholder="LG(CSE 801)" name="LG_CSE801">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE801">GP(CSE 801):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE801" placeholder="GP(CSE 801)" name="GP_CSE801">
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE802">LG(CSE 802):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE802" placeholder="LG(CSE 802)" name="LG_CSE802">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE802">GP(CSE 802):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE802" placeholder="GP(CSE 802)" name="GP_CSE802">
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE803">LG(CSE 803):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE803" placeholder="LG(CSE 803)" name="LG_CSE803">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE803">GP(CSE 803):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE803" placeholder="GP(CSE 803)" name="GP_CSE803">
    </div>
  </div>



      <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="OptionalTheoryCode">Optional(Theory Code):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="OptionalTheoryCode" placeholder="Optional Theory Code(807/809/811/813/819)" name="OptionalTheoryCode">
    </div>
  </div>

  <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_OptionalTheory">LG(Optional Theory):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_OptionalTheory" placeholder="LG(Optional Theory )" name="LG_OptionalTheory">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_OptionalTheory">GP(Optional Theory):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_OptionalTheory" placeholder="GP(Optional Theory)" name="GP_OptionalTheory">
    </div>
  </div>


  <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="OptionalLabCode">Optional(Lab Code):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="OptionalLabCode" placeholder="Optional Lab Code(808/810/812/814/820)" name="OptionalLabCode">
    </div>
  </div>

  <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_OptionalLab">LG(Optional Lab):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_OptionalLab" placeholder="LG(Optional Lab )" name="LG_OptionalLab">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_OptionalLab">GP(Optional Lab ):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_OptionalLab" placeholder="GP(Optional Lab )" name="GP_OptionalLab">
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