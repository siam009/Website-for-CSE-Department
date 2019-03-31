<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Department of CSE | SEC</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/form.css')}}">
  <link rel="stylesheet" href="{{ asset('css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('css/fixed.css')}}">
  <link rel="stylesheet" href="{{ asset('css/css.css')}}">
   <link rel="icon" href="{{ asset('image/logo.jpg')}}">
   <link rel="stylesheet" href="{{asset('css/society/society.css')}}">

    <!-- Scripts -->
   

    <!-- Fonts -->
</head>
<body data-spy="scroll" >

  <div class=" row" style="background:#00142d">
    <img class="cse pt-3 pb-2" src="{{asset('image/logo.jpg')}}">
  <div class="col">
      <h3 class="display-5 pt-4 text-success  " ><b>Department of Computer Science and Engineering</b></h3>
      <h4 class="display-5   " style="color: #999"><b>Sylhet Engineering College</b></h4>
    </div>
  </div>


<div class="pt-3">

</div>



<!--Navigation Start-->
<div id="home">
@include('partials.nav')
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
            @yield('content')
        </main>
    </div>
</div>

    @include('partials.footer')
</body>
</html>
