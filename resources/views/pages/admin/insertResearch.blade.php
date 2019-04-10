@extends('pages.admin.master')

@section('details')


<div class="row">
    <div class="col-md-6">
     <form method="POST" action="/researchaction" enctype="multipart/form-data">
       {{ csrf_field() }}
       <p class="text-center"><strong>Add Research News</strong></p>
  <div class="form-group">
    <label for="authors">Authors</label>
    <input type="string" class="form-control" name="authors" id="authors" placeholder="authors">
  </div>

   <div class="form-group">
    <label for="publication_link">Publication Link</label>
    <input type="string" class="form-control" name="publication_link" id="publication_link" placeholder="Publication Link">
  </div>

     <div class="form-group">
    <label for="linkName">Link Name</label>
    <input type="string" class="form-control" name="linkName" id="linkName" placeholder="Link Name">
  </div>
          <div class="form-group">
              <button type="submit" id="loginSubmit" class="btn btn-success loginFormElement">Submit</button>
          </div>
      </form>
    </div>
</div>


@endsection
