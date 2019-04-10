@extends('partials.master')


 @section('afterNav')
 <div class="container">

  <div class="row">
    @foreach($staff as $staff)
    <div class="col-lg-3 col-md-4 col-xs-6 " style="background: blue">
        <div class="card-deck">
          <div class="card">
              <img class="round  img-fluid thumb" src="{{asset($staff->img)}}" style="height: 250px;width: 300px">
              <div class="container">
                <h6><b>{{$staff->name}}</b></h6>
                <h6><small><strong>{{$staff->designation}}</strong></small></h6>
                <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#information{{$staff->id}}">Contact Details</button>
                <div id="information{{$staff->id}}" class="collapse">
                  <p style="text-align:justify"><strong>Email:{{$staff->email}}</strong></p>
                  <p style="text-align:justify"><strong>Cell:{{$staff->contact_number}}</strong></p>
                </div>
              </div>
        </div>
      </div>


  </div>
  @endforeach



</div>

</div>

@endsection
