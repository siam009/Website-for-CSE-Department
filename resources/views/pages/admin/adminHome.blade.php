@extends('partials.master')




@section('afterNav')





<div class="p-4 container"></div>

  <div class="example1 container">
<h3 class=" text-center" style="background: #98d9c1; color: #0f0f39;">Welcome to Admin Panel</h3>
</div>

<div class="p-4 container"></div>



<!------ Include the above in your HEAD tag ---------->
<div class="container">
<div class="row container">
<div class="col-lg-4 col-md-4 col-sm-8 " style="height: 500px;background: #00142d;">
<nav class="navbar  sidebar">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    
    <!-- Collect the nav links, forms, and other content for toggling -->

      <ul class=" navbar-nav m-4">
        <div class="container">
          <div class="container">
        <li class=" nav-item active"><a class="nav-link text-white" href="{{route('admin.dashboard')}}">Dashboard</a></li>

        <li class="dropdown nav-item mt-2">
          <a href="#" class="dropdown-toggle text-white active"  data-toggle="dropdown">Insert Exam Result </a>
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

               <!-- <li class="dropdown nav-item mt-2">
          <a href="#" class="dropdown-toggle text-white" data-toggle="dropdown">Update Result </a>
          <ul class="dropdown-menu " style="background: tomato;" >
            <li class="nav-item" ><a  class="nav-link text-white " href="{{route('view_update_1_1')}}">1-1</a></li>
            <li class="nav-item" ><a  class="nav-link text-white " href="{{route('view_update_1_2')}}">1-2</a></li>
            <li class="nav-item" ><a  class="nav-link text-white " href="{{route('view_update_2_1')}}">2-1</a></li>
            <li class="divider"></li>
            <li class="nav-item" ><a  class="nav-link text-white " href="{{route('view_update_2_2')}}">2-2</a></li>
            <li class="divider"></li>
            <li class="nav-item" ><a  class="nav-link text-white " href="{{route('view_update_3_1')}}">3-1</a></li>
            <li class="divider"></li>
            <li class="nav-item" ><a  class="nav-link text-white " href="{{route('view_update_3_2')}}">3-2</a></li>
            <li class="divider"></li>
            <li class="nav-item" ><a  class="nav-link text-white " href="{{route('view_update_4_1')}}">4-1</a></li>
            <li class="divider"></li>
            <li class="nav-item" ><a  class="nav-link text-white " href="{{route('view_update_4_2')}}">4-2</a></li>
          </ul>
        </li> -->
      </div>
    </div>
      </ul>
   
  </div>
</nav>
</div>
<div class="col-md-8 col-lg-8 col-sm-10" style="background: #2d5d67;">
  

  <!--<form class="form-horizontal" action="/action_page.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>  -->

<!-- admin succesful login status  -->

    <div id="home">

<div class="pt-3"></div>
<div class="pt-3"></div>
<div class="pt-3"></div>
<div class="pt-3"></div>
    <div id="app">
       <nav class="navbar navbar-expand-md navbar-light navbar-laravel container"  style="background: #4e7c71">
            <div class="container"   style="background: #4e7c71">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent"  style="background: #4e7c71">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto" >

                    </ul>

                    <!-- Right Side Of Navbar -->
                     <ul class="navbar-nav ml-auto" style="background: #4e7c71">
                        <!-- Authentication Links -->
                        @guest('admin')
                            <li class="navbar-item mr-5"><button type="button" class="btn btn-outline-primary"><a  class="nav-link" href="{{ route('admin.auth.login') }}"><b style="color:#003a68;">Login</b></a></button></li>
                            
                             <li class="navbar-item mr-5"><button type="button" class="btn btn-outline-primary"><a  class="nav-link" href="{{ route('admin.register') }}"><b style="color:#003a68;">Register</b></a></button></li>

                            
                            
                          
                            
                        @else
                            <li class="nav-item-dropdown">
                                 

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::guard('admin')->user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                        <a  class="dropdown-item" href="{{ route('admin.auth.logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('admin.auth.logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header"><strong>Admin's</strong> Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Welcome   <strong>{{ Auth::guard('admin')->user()->name}}</strong></p>
                    <p>Your joined  : {{ Auth::guard('admin')->user()->created_at->diffForHumans() }} </p>
                </div>
            </div>
        </div>
    </div>
</div>
        </main>
    </div>
</div>

</div>

</div>
</div>



@endsection