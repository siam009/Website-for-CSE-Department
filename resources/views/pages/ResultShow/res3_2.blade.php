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
      
      <td>CSE 601</td>
      <td>{{$result->LG_CSE601}}</td>
      <td>{{$result->GP_CSE601}}</td>
    </tr>

    <tr>
      <td>CSE 603</td>
      <td>{{$result->LG_CSE603}}</td>
      <td>{{$result->GP_CSE603}}</td>
    </tr>

    <tr>
      <td>CSE 604</td>
      <td>{{$result->LG_CSE604}}</td>
      <td>{{$result->GP_CSE604}}</td>
    </tr>

    <tr>
      <td>CSE 605</td>
      <td>{{$result->LG_CSE605}}</td>
      <td>{{$result->GP_CSE605}}</td>
    </tr>

    <tr>
      <td>CSE 607</td>
      <td>{{$result->LG_CSE607}}</td>
      <td>{{$result->GP_CSE607}}</td>
    </tr>

    <tr>
      <td>CSE 608</td>
      <td>{{$result->LG_CSE608}}</td>
      <td>{{$result->GP_CSE608}}</td>
    </tr>

    <tr>
      <td>CSE 609</td>
      <td>{{$result->LG_CSE609}}</td>
      <td>{{$result->GP_CSE609}}</td>
    </tr>

    <tr>
      <td>CSE 610</td>
      <td>{{$result->LG_CSE610}}</td>
      <td>{{$result->GP_CSE610}}</td>
    </tr>

    <tr>
      <td>CSE 612</td>
      <td>{{$result->LG_CSE612}}</td>
      <td>{{$result->GP_CSE612}}</td>
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