@extends('pages.admin.master')

@section('details')


<div class="row">
    <div class="col-md-6">
     <form method="POST" action="/othersaction" enctype="multipart/form-data">
       {{ csrf_field() }}
       <p class="text-center"><strong>Add Others News</strong></p>

       <div class="form-group">
        <label for="title">Title</label>
        <input type="string" class="form-control" name="title" id="title" placeholder="Image Title">
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea type="text" class="form-control" name="description" id="description" placeholder="Description"></textarea>
      </div>
      <div class="form-group">
          <label class="control-label">Image</label>
          <input class="filestyle" data-icon="false" name="img" type="file">
      </div>
      <div class="form-group">
          <button type="submit" id="loginSubmit" class="btn btn-success loginFormElement">Submit</button>
      </div>

      </form>
    </div>
</div>


@endsection
