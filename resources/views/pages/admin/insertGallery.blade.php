@extends('pages.admin.master')

@section('details')


<div class="row">
    <div class="col-md-6">
     <form method="POST" action="/galleryaction" enctype="multipart/form-data">
       {{ csrf_field() }}

          <div class="form-group">
              <label class="control-label">Image</label>
              <input class="filestyle" data-icon="false" name="img" type="file">
          </div>
          <div class="form-group">
              <button type="submit" id="loginSubmit" class="btn btn-success loginFormElement">Upload</button>
          </div>
      </form>
    </div>
</div>


@endsection
