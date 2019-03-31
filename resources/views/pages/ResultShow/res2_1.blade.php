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
      
      <td>CSE 301</td>
      <td>{{$result->LG_CSE301}}</td>
      <td>{{$result->GP_CSE301}}</td>
    </tr>

    <tr>
      <td>CSE 302</td>
      <td>{{$result->LG_CSE302}}</td>
      <td>{{$result->GP_CSE302}}</td>
    </tr>

    <tr>
      <td>CSE 303</td>
      <td>{{$result->LG_CSE303}}</td>
      <td>{{$result->GP_CSE303}}</td>
    </tr>

    <tr>
      <td>CSE 304</td>
      <td>{{$result->LG_CSE304}}</td>
      <td>{{$result->GP_CSE304}}</td>
    </tr>

    <tr>
      <td>CSE 305</td>
      <td>{{$result->LG_CSE305}}</td>
      <td>{{$result->GP_CSE305}}</td>
    </tr>

    <tr>
      <td>CSE 306</td>
      <td>{{$result->LG_CSE306}}</td>
      <td>{{$result->GP_CSE306}}</td>
    </tr>

    <tr>
      <td>EEE 309</td>
      <td>{{$result->LG_EEE309}}</td>
      <td>{{$result->GP_EEE309}}</td>
    </tr>

    <tr>
      <td>EEE 310</td>
      <td>{{$result->LG_EEE310}}</td>
      <td>{{$result->GP_EEE310}}</td>
    </tr>

    <tr>
      <td>MATH 301</td>
      <td>{{$result->LG_MATH301}}</td>
      <td>{{$result->GP_MATH301}}</td>
    </tr>

    @endforeach
</div>
</tbody>
</div>
</table>
</div>
<div class=" col-md-3 col-sm-2 col-lg-3 col-xl-4 col-xs-1"></div>
</div>
<hp class="text-center muted"><strong>GPA: <b class="btn btn-primary">{{$result->GPA}}</b></strong></p>
<p class="text-center muted"><strong>CGPA: <b class="btn btn-danger">{{$result->CGPA}}</b></strong></p>






@endsection