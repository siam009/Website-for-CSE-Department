@extends('partials.master')


@section('afterNav')

 

 <form class="form-horizontal" action="{{route('showResult')}}" method="get">
  
  <div class="form-group">
    <label for="registration_no">Registration No.</label>
    <input type="text" class="form-control" name="registration_no" id="registration_no" placeholder="Registration_no">
  </div>
  <div class="form-group">
    <label for="year">Select Year</label>
    <select class="form-control" id="year" name="year">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select>
  </div>
  <div class="form-group">
    <label for="semester">Select Semester</label>
    <select  class="form-control" id="semester name="semester>
      <option>1</option>
      <option>2</option>
    </select>
  </div>


</form>


@endsection