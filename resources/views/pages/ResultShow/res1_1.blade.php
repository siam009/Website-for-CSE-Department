@extends('partials.master')

@section('afterNav')



<div class="pt-4"></div>
<div class="row">
	<div class=" col-md-3 col-sm-2 col-lg-4 col-xl-4 col-xs-1"></div>
		<div class=" col-md-6 col-sm-8 col-lg-5 col-xl-4 col-xs-10">

<table class=" table table-responsive text-center table-hover bg-dark text-info">
	
	<div class="container-fluid">
	<thead>
	
  <tr>
    <th scope="col">Course_ID</th>
    <th scope="col">LG</th>
    <th scope="col">GP</th>
  </tr>
</thead>
<tbody>
   
    @foreach ($result as $result)
    <tr>
      
      <td>CSE 101</td>
      <td>{{$result->LG_CSE101}}</td>
      <td>{{$result->GP_CSE101}}</td>
    </tr>

    <tr>
      <td>CSE 102</td>
      <td>{{$result->LG_CSE102}}</td>
      <td>{{$result->GP_CSE102}}</td>
    </tr>

    <tr>
      <td>EEE 105</td>
      <td>{{$result->LG_EEE105}}</td>
      <td>{{$result->GP_EEE105}}</td>
    </tr>

    <tr>
      <td>EEE 106</td>
      <td>{{$result->LG_EEE106}}</td>
      <td>{{$result->GP_EEE106}}</td>
    </tr>

    <tr>
      <td>ME 100</td>
      <td>{{$result->LG_ME100}}</td>
      <td>{{$result->GP_ME100}}</td>
    </tr>

    <tr>
      <td>ME 101</td>
      <td>{{$result->LG_ME101}}</td>
      <td>{{$result->GP_ME101}}</td>
    </tr>

    <tr>
      <td>ME 102</td>
      <td>{{$result->LG_ME102}}</td>
      <td>{{$result->GP_ME102}}</td>
    </tr>

    <tr>
      <td>MATH 101</td>
      <td>{{$result->LG_MATH101}}</td>
      <td>{{$result->GP_MATH101}}</td>
    </tr>

    <tr>
      <td>PHY 101</td>
      <td>{{$result->LG_PHY101}}</td>
      <td>{{$result->GP_PHY101}}</td>
    </tr>

    <tr>
      <td>PHY 102</td>
      <td>{{$result->LG_PHY102}}</td>
      <td>{{$result->GP_PHY102}}</td>
    </tr>

    <tr>
      <td>SS 101</td>
      <td>{{$result->LG_SS101}}</td>
      <td>{{$result->GP_SS101}}</td>
    </tr>

    @endforeach

</tbody>
</div>
</table>
</div>
<div class=" col-md-3 col-sm-2 col-lg-3 col-xl-4 col-xs-1"></div>
</div>
<p class="text-center muted"><strong>GPA: <b class="btn btn-primary">{{$result->GPA}}</b></strong></p>
<p class="text-center muted"><strong>CGPA: <b class="btn btn-danger">{{$result->CGPA}}</b></strong></p>






@endsection