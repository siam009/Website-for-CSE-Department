@extends('partials.master')
 

 @section('afterNav')
 <div class="container">

  <div class="row">
    @foreach($society as $society)
    <div class="col-lg-3 col-md-4 col-xs-6 " style="background: #82bfda">
        
        
        <div class="card-deck">
          <div class="card">
        <img class="round  img-fluid thumb" src="{{asset('image/society/'.$society->img)}}" style="height: 250px;width: 300px">
        <div class="container">
          <h6><b>{{$society->name}}</b></h6>
          <h6><small><strong>{{$society->designation}}</strong></small></h6>
          <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#information{{$society->id}}">Read More</button>
          <div id="information{{$society->id}}" class="collapse">
          
          <p style="text-align:justify"><strong>Email:{{$society->email}}</strong></p>
          <p style="text-align:justify"><strong>Cell:{{$society->contact_number}}</strong></p>
      

        </div>
      </div>
     
        </div>
      </div>
    

  </div>
  @endforeach

  

</div>

</div>

@endsection


