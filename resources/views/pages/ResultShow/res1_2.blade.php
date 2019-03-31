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
      
      <td>CSE 201</td>
      <td>{{$result->LG_CSE201}}</td>
      <td>{{$result->GP_CSE201}}</td>
    </tr>

    <tr>
      <td>CSE 202</td>
      <td>{{$result->LG_CSE202}}</td>
      <td>{{$result->GP_CSE202}}</td>
    </tr>

    <tr>
      <td>CSE 203</td>
      <td>{{$result->LG_CSE203}}</td>
      <td>{{$result->GP_CSE203}}</td>
    </tr>

    <tr>
      <td>MATH 201</td>
      <td>{{$result->LG_MATH201}}</td>
      <td>{{$result->GP_MATH201}}</td>
    </tr>

    <tr>
      <td>CHEM 201</td>
      <td>{{$result->LG_CHEM201}}</td>
      <td>{{$result->GP_CHEM201}}</td>
    </tr>

    <tr>
      <td>CHEM 202</td>
      <td>{{$result->LG_CHEM202}}</td>
      <td>{{$result->GP_CHEM202}}</td>
    </tr>

    <tr>
      <td>ENG 201</td>
      <td>{{$result->LG_ENG201}}</td>
      <td>{{$result->GP_ENG201}}</td>
    </tr>

    <tr>
      <td>ENG 202</td>
      <td>{{$result->LG_ENG202}}</td>
      <td>{{$result->GP_ENG202}}</td>
    </tr>

    <tr>
      <td>SS 201</td>
      <td>{{$result->LG_SS201}}</td>
      <td>{{$result->GP_SS201}}</td>
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
<p class="text-center"><strong>CGPA: <b class="btn btn-danger">{{$result->CGPA}}</b></strong></p>






@endsection