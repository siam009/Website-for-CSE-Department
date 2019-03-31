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
  

   <form class="form-horizontal  " action="{{route('insert_1_2')}}" method="POST">
    @csrf
    <legend class="text-center header" style="background: #389fab; color: black;"><b>Insert Result (1-2) </b></legend>
    <fieldset>
  <div class="form-group row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="ex4">Registration No:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control  text-primary" id="ex4" name="Registration_no" placeholder="Registration No." required>
    </div>
  </div>
  <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE201">LG(CSE 201):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE201" placeholder="LG(CSE 201)" name="LG_CSE201">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE201">GP(CSE 201):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE201" placeholder="GP(CSE 201)" name="GP_CSE201">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE202">LG(CSE 202):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE202" placeholder="LG(CSE 202)" name="LG_CSE202">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE202">GP(CSE 202):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE202" placeholder="GP(CSE 202)" name="GP_CSE202">
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE203">LG(CSE 203):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE203" placeholder="LG(CSE 203)" name="LG_CSE203">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE203">GP(CSE 203):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE203" placeholder="GP(CSE 203)" name="GP_CSE203">
    </div>
  </div>

  <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_MATH201">LG(MATH 201):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_MATH201" placeholder="LG(MATH 201)" name="LG_MATH201">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_MATH201">GP(MATH 201):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_MATH201" placeholder="GP(MATH 201)" name="GP_MATH201">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CHEM201">LG(CHEM 201):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CHEM201" placeholder="LG(CHEM 201)" name="LG_CHEM201">
    </div>
  </div>


     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CHEM201">GP(CHEM 201):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CHEM201" placeholder="GP(CHEM 201)" name="GP_CHEM201">
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CHEM202">LG(CHEM 202):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CHEM202" placeholder="LG(CHEM 202)" name="LG_CHEM202">
    </div>
  </div>

      <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CHEM202">GP(CHEM 202):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CHEM202" placeholder="GP(CHEM 202)" name="GP_CHEM202">
    </div>
  </div>

       <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_ENG201">LG(ENG 201):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_ENG201" placeholder="LG(ENG 201)" name="LG_ENG201">
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_ENG201">GP(ENG 201):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_ENG201" placeholder="GP(ENG 201)" name="GP_ENG201">
    </div>
  </div>


     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_ENG202">LG(ENG 202):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_ENG202" placeholder="LG(ENG 202)" name="LG_ENG202">
    </div>
  </div>

      <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_ENG202">GP(ENG 202):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_ENG202" placeholder="GP(ENG 202)" name="GP_ENG202">
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_SS201">LG(SS 201):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_SS201" placeholder="LG(SS 201)" name="LG_SS201">
    </div>
  </div>

       <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_SS201">GP(SS 201):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_SS201" placeholder="GP(SS 201)" name="GP_SS201">
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