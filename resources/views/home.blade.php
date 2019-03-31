

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="container">
            <div class="card ml-4">
                <!--<div class="card-header bg-dark">Dashboard</div> -->

               <!-- <div class="card-body bg-primary">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!--You are logged in!-->
                <!--</div> -->

            </div>
          </div>
        </div>
    </div>
</div>

<div class="pt-4"></div>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
 <div class="container">
    <form class="form-horizontal" action="{{route('showResult')}}" method="get" style="width:400px;">

      <p class="text-center"><strong>Result</strong></p>
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
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>
<div class="col-3"></div>
</div>



@endsection
