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
  

  <form class="form-horizontal  " action="{{route('insert_2_1')}}" method="POST">
    @csrf
    <legend class="text-center header" style="background: #389fab; color: black;"><b>Insert Result (2-1) </b></legend>
    <fieldset>
  <div class="form-group row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="Registration_no">Registration No:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control  text-primary" id="Registration_no" name="Registration_no" placeholder="Registration No." required>
    </div>
  </div>
  <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE301">LG(CSE 301):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE301" placeholder="LG(CSE 301)" name="LG_CSE301">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE301">GP(CSE 301):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE301" placeholder="GP(CSE 301)" name="GP_CSE301">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE302">LG(CSE 302):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE302" placeholder="LG(CSE 302)" name="LG_CSE302">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE302">GP(CSE 302):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE302" placeholder="GP(CSE 302)" name="GP_CSE302">
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE303">LG(CSE 303):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE303" placeholder="LG(CSE 303)" name="LG_CSE303">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE303">GP(CSE 303):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE303" placeholder="GP(CSE 303)" name="GP_CSE303">
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE304">LG(CSE 304):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE304" placeholder="LG(CSE 304)" name="LG_CSE304">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE304">GP(CSE 304):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE304" placeholder="GP(CSE 304)" name="GP_CSE304">
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE305">LG(CSE 305):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE305" placeholder="LG(CSE 305)" name="LG_CSE305">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE305">GP(CSE 305):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE305" placeholder="GP(CSE 305)" name="GP_CSE305">
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE306">LG(CSE 306):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE306" placeholder="LG(CSE 306)" name="LG_CSE306">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE306">GP(CSE 306):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE306" placeholder="GP(CSE 306)" name="GP_CSE306">
    </div>
  </div>

       <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_EEE309">LG(EEE 309):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_EEE309" placeholder="LG(EEE 309)" name="LG_EEE309">
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_EEE309">GP(EEE 309):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_EEE309" placeholder="GP(EEE 309)" name="GP_EEE309">
    </div>
  </div>


     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_EEE310">LG(EEE 310):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_EEE310" placeholder="LG(EEE 310)" name="LG_EEE310">
    </div>
  </div>

      <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_EEE310">GP(EEE 310):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_EEE310" placeholder="GP(EEE 310)" name="GP_EEE310">
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_MATH301">LG(MATH 301):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_MATH301" placeholder="LG(MATH 301)" name="LG_MATH301">
    </div>
  </div>

       <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_MATH301">GP(MATH 301):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_MATH301" placeholder="GP(MATH 301)" name="GP_MATH301">
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