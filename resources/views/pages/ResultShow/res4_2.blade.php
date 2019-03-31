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
      
      <td>CSE 800</td>
      <td>{{$result->LG_CSE800}}</td>
      <td>{{$result->GP_CSE800}}</td>
    </tr>

    <tr>
      <td>CSE 801</td>
      <td>{{$result->LG_CSE801}}</td>
      <td>{{$result->GP_CSE801}}</td>
    </tr>

    <tr>
      <td>CSE 802</td>
      <td>{{$result->LG_CSE802}}</td>
      <td>{{$result->GP_CSE802}}</td>
    </tr>

    <tr>
      <td>CSE 803</td>
      <td>{{$result->LG_CSE803}}</td>
      <td>{{$result->GP_CSE803}}</td>
    </tr>

    <tr>
      <td>{{$result->OptionalTheoryCode}}</td>
      <td>{{$result->LG_OptionalTheory}}</td>
      <td>{{$result->GP_OptionalTheory}}</td>
    </tr>

    <tr>
      <td>{{$result->OptionalLabCode}}</td>
      <td>{{$result->LG_OptionalLab}}</td>
      <td>{{$result->GP_OptionalLab}}</td>
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