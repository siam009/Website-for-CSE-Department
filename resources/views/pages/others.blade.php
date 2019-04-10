@extends('partials.master')


@section('afterNav')

<div class="container">
<div class="row container p-3" style="background: #82bfda">
  @foreach($others as $society)
  <div class="col-lg-5 col-md-10 col-sm-10 col-xs-10 mr-4 ml-4" style="background: #82bfda">


      <div class="card-deck">
        <div class="card">
      <img class="round  img-fluid thumb" src="{{asset($society->img)}}" style="height: 300px;width: 500px">
      <div class="container">
        <h6><b>{{$society->title}}</b></h6>
        <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#information{{$society->id}}">Read More</button>
        <div id="information{{$society->id}}" class="collapse">
            <p style="text-align:justify" > {{$society->description}} </p>
      </div>

      </div>
    </div>

      </div>
    </div>
    <div class="pl-3">

    </div>
@endforeach

</div>




</div>
</div>


<!-- <div class="row container-fluid">


	@foreach($others as $others)
   <div class="card ml-5   col-lg-4 col-md-4 col-xs-6 " style="width:40%">
      <img class="card-img-top" src="{{asset('image/'.$others->img)}}" alt="Car">
      <div class="card-body">
          <h4 class="card-title text-dark"><b>{{$others->title}}</b></h4>
          <p class="card-text" style="text-align: justify">{{$others->description}}</p>

      </div>
  </div>
	<div class="pl-5"> </div>
	@endforeach
</div> -->
  <div class="pb-5"></div>



@endsection
