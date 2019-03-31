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
<div class="col-md-9 col-lg-9 col-sm-10" style="background: #2d5d67;">
  

  <form class="form-horizontal  " action="{{route('insert_3_2')}}" method="POST">
    @csrf
    <legend class="text-center header" style="background: #389fab; color: black;"><b>Insert Result (3-2) </b></legend>
    <fieldset>
  <div class="form-group row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="ex4">Registration No:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control  text-primary" id="ex4" name="Registration_no" placeholder="Registration No." required>
    </div>
  </div>
  <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE601">LG(CSE 601):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE601" placeholder="LG(CSE 601)" name="LG_CSE601">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE601">GP(CSE 601):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE601" placeholder="GP(CSE 601)" name="GP_CSE601">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE603">LG(CSE 603):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE603" placeholder="LG(CSE 603)" name="LG_CSE603">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE603">GP(CSE 603):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE603" placeholder="GP(CSE 603)" name="GP_CSE603">
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE604">LG(CSE 604):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE604" placeholder="LG(CSE 604)" name="LG_CSE604">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE604">GP(CSE 604):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE604" placeholder="GP(CSE 604)" name="GP_CSE604">
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE605">LG(CSE 605):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE605" placeholder="LG(CSE 605)" name="LG_CSE605">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE605">GP(CSE 605):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE605" placeholder="GP(CSE 605)" name="GP_CSE605">
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE607">LG(CSE 607):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE607" placeholder="LG(CSE 607)" name="LG_CSE607">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE607">GP(CSE 607):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE607" placeholder="GP(CSE 607)" name="GP_CSE607">
    </div>
  </div>

    
    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE608">LG(CSE 608):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE608" placeholder="LG(CSE 608)" name="LG_CSE 608">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE608">GP(CSE 608):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE608" placeholder="GP(CSE 608)" name="GP_CSE608">
    </div>
  </div>

      <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE609">LG(CSE 609):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE609" placeholder="LG(CSE 609)" name="LG_CSE609">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE609">GP(CSE 609):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE609" placeholder="GP(CSE 609)" name="GP_CSE609">
    </div>
  </div>

        <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE610">LG(CSE610):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE610" placeholder="LG(CSE 610)" name="LG_CSE610">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE610">GP(CSE 610):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE610" placeholder="GP(CSE 610)" name="GP_CSE610">
    </div>
  </div>

      <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE612">LG(CSE 612):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE612" placeholder="LG(CSE 612)" name="LG_CSE612">
    </div>
  </div>

<div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE612">GP(CSE 612):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE612" placeholder="GP(CSE 612)" name="GP_CSE612">
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