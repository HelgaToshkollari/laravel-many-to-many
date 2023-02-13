@extends('layouts.app')
@section("content")
<div class="container py-4">
    <h3 class="text-center">Add Type!</h3>

  <div class="row justify-content-center">
        <div class="col-sm-6">

            <form action="{{ route("admin.types.store") }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-4">
                    <label class="form-label" for="form6Example1">Name</label>
                    <input type="text" id="form6Example1" class="form-control" name="name"  />
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="{{ route("admin.types.index") }}" class="btn btn-dark btn-block mb-4">Cancel</a>
                        <button type="submit" class="btn btn-dark btn-block mb-4">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection