@extends('pages.admin.master')

@section('details')


<div class="row">
    <div class="col-md-6">
     <form method="POST" action="/societyaction" enctype="multipart/form-data">
       {{ csrf_field() }}
           <div class="form-group">
               <label for="productname" class="loginFormElement">Name:</label>
               <input class="form-control" id="productname" name="name" type="name">
           </div>
           <div class="form-group">
               <label for="productname" class="loginFormElement">Batch:</label>
               <input class="form-control" id="productname" name="batch" type="batch">
           </div>
           <div class="form-group">
               <label for="productprice" class="loginFormElement">Designation</label>
               <input class="form-control" id="productprice" name="designation" type="designation">
           </div>
           <div class="form-group">
               <label for="productprice" class="loginFormElement">Phone</label>
               <input class="form-control" id="productprice" name="contact_number" type="phone">
           </div>
           <div class="form-group">
               <label for="productprice" class="loginFormElement">Email</label>
               <input class="form-control" id="productprice" name="email" type="email">
           </div>
          <div class="form-group">
              <label class="control-label">Image of him/her</label>
              <input class="filestyle" data-icon="false" name="img" type="file">
          </div>
          <div class="form-group">
              <button type="submit" id="loginSubmit" class="btn btn-success loginFormElement">Add member</button>
          </div>
      </form>
    </div>
</div>


@endsection
