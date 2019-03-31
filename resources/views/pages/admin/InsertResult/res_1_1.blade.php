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
  

  <form class="form-horizontal  " action="{{route('insert_1_1')}}" method="POST">
    @csrf
    <legend class="text-center header" style="background: #389fab; color: black;"><b>Insert Result (1-1) </b></legend>
    <fieldset>
  <div class="form-group row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="ex4">Registration No:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control  text-primary" id="ex4" name="Registration_no" placeholder="Registration No." required>
    </div>
  </div>
  <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE101">LG(CSE 101):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE101" placeholder="LG(CSE 101)" name="LG_CSE101">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE101">GP(CSE 101):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE101" placeholder="GP(CSE 101)" name="GP_CSE101">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_CSE102">LG(CSE 102):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_CSE102" placeholder="LG(CSE 102)" name="LG_CSE102">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_CSE102">GP(CSE 102):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_CSE102" placeholder="GP(CSE 102)" name="GP_CSE102">
    </div>
  </div>

    <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_EEE105">LG(EEE 105):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_EEE105" placeholder="LG(EEE 105)" name="LG_EEE105">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_EEE105">GP(EEE 105):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_EEE105" placeholder="GP(EEE 105)" name="GP_EEE105">
    </div>
  </div>

  <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_EEE106">LG(EEE 106):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_EEE106" placeholder="LG(EEE 106)" name="LG_EEE106">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_EEE106">GP(EEE 106):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_EEE106" placeholder="GP(EEE 106)" name="GP_EEE106">
    </div>
  </div>

   <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_ME100">LG(ME 100):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_ME100" placeholder="LG(ME 100)" name="LG_ME100">
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_ME100">GP(ME 100):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_ME100" placeholder="GP(ME 100)" name="GP_ME100">
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_ME101">LG(ME 101):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_ME101" placeholder="LG(ME 101)" name="LG_ME101">
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_ME101">GP(ME 101):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_ME101" placeholder="GP(ME 101)" name="GP_ME101">
    </div>
  </div>


     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_ME100">LG(ME 102):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_ME102" placeholder="LG(ME 102)" name="LG_ME102">
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_ME102">GP(ME 102):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_ME102" placeholder="GP(ME 102)" name="GP_ME102">
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_MATH101">LG(MATH 101):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_MATH101" placeholder="LG(MATH 101)" name="LG_MATH101">
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_MATH101">GP(MATH 101):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_MATH101" placeholder="GP(GP_MATH101)" name="GP_MATH101">
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_PHY101">LG(PHY 101):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_PHY101" placeholder="LG(PHY 101)" name="LG_PHY101">
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_PHY101">GP(PHY 101):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_PHY101" placeholder="GP(PHY 101)" name="GP_PHY101">
    </div>
  </div>


     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_PHY102">LG(PHY 102):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_PHY102" placeholder="LG(PHY 102)" name="LG_PHY102">
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_PHY102">GP(PHY 102):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_PHY102" placeholder="GP(PHY 102)" name="GP_PHY102">
    </div>
  </div>


     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="LG_SS101">LG(SS 101):</label>
    <div class="col-sm-10"> 
      <input type="string" class="form-control" id="LG_SS101" placeholder="LG(SS 101)" name="LG_SS101">
    </div>
  </div>

     <div class="form-group  row flex-v-center">
    <label class="control-label col-sm-2 text-white" for="GP_SS101">GP(SS 101):</label>
    <div class="col-sm-10"> 
      <input type="number" step="0.01" class="form-control" id="GP_SS101" placeholder="GP(SS 101)" name="GP_SS101">
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