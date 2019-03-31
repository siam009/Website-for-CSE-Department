@extends('partials.master')


 @section('afterNav')
 <div class="container">

  <div class="row">
    @foreach($teacher as $teacher)
    <div class="col-lg-3 col-md-4 col-xs-6 " style="background: black">
        <div class="card-deck">
          <div class="card">
              <img class="round  img-fluid thumb" src="{{asset('image/Teacher/'.$teacher->img)}}" style="height: 250px;width: 300px">
              <div class="container">
                <h6><b>{{$teacher->name}}</b></h6>
                <h6><small><strong>{{$teacher->designation}}</strong></small></h6>
                <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#information{{$teacher->id}}">Contact Details</button>
                <div id="information{{$teacher->id}}" class="collapse">
                  <p style="text-align:justify"><strong>Email:{{$teacher->email}}</strong></p>
                  <p style="text-align:justify"><strong>Cell:{{$teacher->contact_number}}</strong></p>
                </div>
              </div>
        </div>
      </div>


  </div>
  @endforeach



</div>

</div>

@endsection
