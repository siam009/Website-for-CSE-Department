@extends('partials.master')

@section('afterNav')



<div class="pt-4"></div>
<div class="row">
  <div class=" col-md-3 col-sm-2 col-lg-4 col-xl-4 col-xs-1"></div>
    <div class=" col-md-6 col-sm-8 col-lg-5 col-xl-4 col-xs-10">

<table class=" table table-responsive table-hover bg-dark text-info">
	
	<div class="container-fluid">
	<thead>
		<div class="container">
  <tr>
    <th scope="col">Course_ID</th>
    <th scope="col">LG</th>
    <th scope="col">GP</th>
  </tr>
</div>
</thead>
<tbody>
    <div class="container">
    @foreach ($result as $result)
    <tr>
      
      <td>CSE 401</td>
      <td>{{$result->LG_CSE401}}</td>
      <td>{{$result->GP_CSE401}}</td>
    </tr>

    <tr>
      <td>CSE 402</td>
      <td>{{$result->LG_CSE402}}</td>
      <td>{{$result->GP_CSE402}}</td>
    </tr>

    <tr>
      <td>CSE 403</td>
      <td>{{$result->LG_CSE403}}</td>
      <td>{{$result->GP_CSE403}}</td>
    </tr>

    <tr>
      <td>CSE 404</td>
      <td>{{$result->LG_CSE404}}</td>
      <td>{{$result->GP_CSE404}}</td>
    </tr>

    <tr>
      <td>CSE 405</td>
      <td>{{$result->LG_CSE405}}</td>
      <td>{{$result->GP_CSE405}}</td>
    </tr>

    <tr>
      <td>EEE 407</td>
      <td>{{$result->LG_EEE407}}</td>
      <td>{{$result->GP_EEE407}}</td>
    </tr>

    <tr>
      <td>EEE 408</td>
      <td>{{$result->LG_EEE408}}</td>
      <td>{{$result->GP_EEE408}}</td>
    </tr>

    <tr>
      <td>MATH 401</td>
      <td>{{$result->LG_MATH401}}</td>
      <td>{{$result->GP_MATH401}}</td>
    </tr>

    <tr>
      <td>SS 401</td>
      <td>{{$result->LG_SS401}}</td>
      <td>{{$result->GP_SS401}}</td>
    </tr>

    @endforeach
</div>
</tbody>
</div>
</table>
</div>
<div class=" col-md-3 col-sm-2 col-lg-3 col-xl-4 col-xs-1"></div>
</div>
<p class="text-center muted"><strong>GPA: <b class="btn btn-primary">{{$result->GPA}}</b></strong></p>
<p class="text-center muted"><strong>CGPA: <b class="btn btn-danger">{{$result->CGPA}}</b></strong></p>






@endsection