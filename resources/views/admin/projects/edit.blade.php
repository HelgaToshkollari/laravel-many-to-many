@extends('layouts.app')
@section('content')
<div class="container py-4">
  <h1>Edit Project!</h1>

  <form action="{{ route("admin.projects.update", $project->id )}}" method="POST">
    @csrf
    @method("PUT")
    
      
    <div class="form-group mb-4">
        <label class="form-label" for="form6Example1">Title</label>
      <input type="text" id="form6Example1" class="form-control" name="title" value="{{$project->title}}" />
    </div>
     
    
    <div class="form-group mb-4">
      <label class="form-label" for="form6Example3">Image URL</label>
      <input type="text" id="form6Example3" class="form-control"name="cover_img" value="{{$project->cover_img}}"/>
    </div>
    
    <div class="form-group mb-4">
      <label class="form-label" for="form6Example3">Description</label>
      <input type="text" id="form6Example3" class="form-control"name="description" value="{{$project->description }}" />
    </div>  

    <div class="form-group mb-4">
        <label class="form-label">Type</label>
        <select class="form-select" name="type_id" value="{{$project->type }}">
            @foreach ($types as $type)
                <option value="{{$type->id}}">{{$type->name}}</option>
            @endforeach
        </select>
    </div>
    
  
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
      </div>
    </div>
    
  </form>
</div>
@endsection