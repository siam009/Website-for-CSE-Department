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
      
      <td>CSE 501</td>
      <td>{{$result->LG_CSE501}}</td>
      <td>{{$result->GP_CSE501}}</td>
    </tr>

    <tr>
      <td>CSE 502</td>
      <td>{{$result->LG_CSE502}}</td>
      <td>{{$result->GP_CSE502}}</td>
    </tr>

    <tr>
      <td>CSE 503</td>
      <td>{{$result->LG_CSE503}}</td>
      <td>{{$result->GP_CSE503}}</td>
    </tr>

    <tr>
      <td>CSE 505</td>
      <td>{{$result->LG_CSE505}}</td>
      <td>{{$result->GP_CSE505}}</td>
    </tr>

    <tr>
      <td>CSE 506</td>
      <td>{{$result->LG_CSE506}}</td>
      <td>{{$result->GP_CSE506}}</td>
    </tr>

    <tr>
      <td>CSE 507</td>
      <td>{{$result->LG_CSE507}}</td>
      <td>{{$result->GP_CSE507}}</td>
    </tr>

    <tr>
      <td>CSE 508</td>
      <td>{{$result->LG_CSE508}}</td>
      <td>{{$result->GP_CSE508}}</td>
    </tr>

    <tr>
      <td>CSE 509</td>
      <td>{{$result->LG_CSE509}}</td>
      <td>{{$result->GP_CSE509}}</td>
    </tr>

    <tr>
      <td>SS 501</td>
      <td>{{$result->LG_SS501}}</td>
      <td>{{$result->GP_SS501}}</td>
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