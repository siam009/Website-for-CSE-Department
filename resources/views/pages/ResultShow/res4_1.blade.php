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
      
      <td>CSE 700</td>
      <td>{{$result->LG_CSE700}}</td>
      <td>{{$result->GP_CSE700}}</td>
    </tr>

    <tr>
      <td>CSE 701</td>
      <td>{{$result->LG_CSE701}}</td>
      <td>{{$result->GP_CSE701}}</td>
    </tr>

    <tr>
      <td>CSE 702</td>
      <td>{{$result->LG_CSE702}}</td>
      <td>{{$result->GP_CSE702}}</td>
    </tr>

    <tr>
      <td>CSE 703</td>
      <td>{{$result->LG_CSE703}}</td>
      <td>{{$result->GP_CSE703}}</td>
    </tr>

    <tr>
      <td>CSE 704</td>
      <td>{{$result->LG_CSE704}}</td>
      <td>{{$result->GP_CSE704}}</td>
    </tr>

    <tr>
      <td>IPE 701</td>
      <td>{{$result->LG_IPE701}}</td>
      <td>{{$result->GP_IPE701}}</td>
    </tr>

    <tr>
      <td>SS 703</td>
      <td>{{$result->LG_SS703}}</td>
      <td>{{$result->GP_SS703}}</td>
    </tr>

    <tr>
      <td>SS 705</td>
      <td>{{$result->LG_SS705}}</td>
      <td>{{$result->GP_SS705}}</td>
    </tr>

    <tr>
      <td>{{$result->OptionalSubCode}}</td>
      <td>{{$result->LG_Optional}}</td>
      <td>{{$result->GP_Optional}}</td>
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