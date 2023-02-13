@extends('layouts.app')
@section("content")
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-6 d-flex justify-content-center py-4">
            <div class="card" style="width: 650px" >
                <div class="card-header">
                  Type
                </div>
                <div class="card-body d-flex justify-content-between">
                  <h5 class="card-title">{{ $technology->name }}</h5>
                  
                  <a href="{{ route('admin.technologies.index') }}" class="btn btn-info">Go back</a>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection