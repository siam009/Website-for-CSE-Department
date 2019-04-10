@extends('partials.master')
@section('afterNav')

<div class="pl-5 pr-5">
  <div class="row bg-info">
    @foreach($gallary as $gallary)
     <div class="col-lg-3 col-md-4 col-sm-6">
      <a href="{{asset('image/gallary/'.$gallary->img)}}" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="{{asset($gallary->img)}}" alt="" style="height:210px; width:280px">
      </a>
    </div>
   <!-- <div class="col-lg-3 col-md-4 col-sm-6">
      <a href="{{asset('image/gallalry/'.$gallary->img)}}" class="thumbnail" data-size="1600*1607">
        <img src="{{asset('image/gallary/'.$gallary->img)}}" alt="">
      </a>
    </div> -->
    @endforeach
  </div>
</div>

@endsection
