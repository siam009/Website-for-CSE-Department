@extends('partials.master')


@section('afterNav')

 

<div class="pt-4"></div>
<div class="pt-4"></div>
<div class="pt-4"></div>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
 <div class="container">
    <form class="form-horizontal" action="{{route('post_research_news')}}" method="post" style="width:400px;">
      @csrf

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
    
        <div class="row">
        <div class="col">
      <button type="submit" class="btn btn-primary">Add</button>
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