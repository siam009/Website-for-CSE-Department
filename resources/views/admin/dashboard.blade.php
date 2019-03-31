@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header"><strong>Admin's</strong> Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Welcome   <strong>{{ Auth::user()->name}}</strong></p>
                    <p>Your joined  : {{ Auth::user()->created_at->diffForHumans() }} </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection