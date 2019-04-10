@extends('pages.admin.master')

@section('details')


<div class="row">
    <div class="col-md-6">
     <form method="POST" action="/noticeaction" enctype="multipart/form-data">
       {{ csrf_field() }}
       <p class="text-center"><strong>Add Notice</strong></p>
  <div class="form-group">
    <label for="details">Details</label>
    <textarea type="text" class="form-control" name="details" id="details" placeholder="details"></textarea>
  </div>
          <div class="form-group">
              <button type="submit" id="loginSubmit" class="btn btn-success loginFormElement">Submit</button>
          </div>
      </form>
    </div>
</div>


@endsection
