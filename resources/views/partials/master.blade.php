<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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




</head>

<body data-spy="scroll" data-target="#navbarResponsive" >

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

@yield('afterNav')

</div>

@yield('content')

@include('partials.footer')

<!--navigation End.. -->



<!-- Footer Start-- >
