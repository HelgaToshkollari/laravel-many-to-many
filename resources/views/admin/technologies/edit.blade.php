@extends('layouts.app')
@section("content")
<div class="container py-4">
    <h3 class="text-center">Add Type!</h3>

  <div class="row justify-content-center">
        <div class="col-sm-6">

            <form action="{{ route("admin.technologies.update", $type->id) }}" method="POST" >
                @csrf
                @method("PUT")
                <div class="form-group mb-4">
                    <label class="form-label" for="form6Example1">Name</label>
                    <input type="text" id="form6Example1" class="form-control" name="name"  value="{{$technology->name}}"/>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="{{ route("admin.technologies.index") }}" class="btn btn-dark btn-block mb-4">Cancel</a>
                        <button type="submit" class="btn btn-dark btn-block mb-4">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection