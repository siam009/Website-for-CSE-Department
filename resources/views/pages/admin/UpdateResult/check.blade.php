@extends('partials.master')


@section('afterNav')

 

<div class="pt-4"></div>
<div class="pt-4"></div>
<div class="pt-4"></div>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
 <div class="container">
    <form class="form-horizontal" action="{{route('checkUpdate')}}" method="get" style="width:400px;">

      <p class="text-center"><strong>Update Result</strong></p>
      <div class="form-group">
        <label for="Registration_no">Registration No.</label>
        <input type="string" class="form-control" name="Registration_no" id="Registration_no" placeholder="Registration_no">
      </div>
      <div class="form-group">
        <label for="year">Select Year</label>
        <select class="form-control" type="number"  id="year" name="year">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
        </select>
      </div>
      <div class="form-group">
        <label for="semester">Select Semester</label>
        <select  class="form-control" name="semester" type="number" id="semester">
          <option>1</option>
          <option>2</option>
        </select>
      </div>
      <div class="row">
      	<div class="col">
      <button type="submit" class="btn btn-primary">Update</button>
      </div>
      <div class="col">
      	<a href="{{route('admin.dashboard')}}"><button type="button" class="btn btn-outline-primary">AdminHome</button></a>
      	
      </div>
      </div>

    </form>
</div>
</div>
<div class="col-3"></div>
</div>


@endsection