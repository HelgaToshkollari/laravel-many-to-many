@extends('layouts.app')
@section('content')
<div class="container py-4">
  <h1>Add Project!</h1>

  @if ($errors->any())
   <div class="alert alert-danger">
     I dati inseriti non sono validi:

     <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
     </ul>
   </div>
  @endif

  <form action="{{ route("admin.projects.store") }}" method="POST" >
    @csrf
    
    <div class="form-group mb-4">
        <label class="form-label" for="form6Example1">Title</label>
      <input type="text" id="form6Example1" class="form-control" name="title"  />
    </div>
     
    
    <div class="form-group mb-4">
      <label class="form-label" for="form6Example3">Image URL</label>
      <input type="text" id="form6Example3" class="form-control"name="cover_img" />
    </div>
    
    <div class="form-group mb-4">
      <label class="form-label" for="form6Example3">Description</label>
      <input type="text" id="form6Example3" class="form-control"name="description" />
    </div>

    <div class="form-group mb-4">
      <label class="form-label">Type</label>
      <select class="form-select" name="type_id">
          @foreach ($types as $type)
              <option value="{{$type->id}}">{{$type->name}}</option>
          @endforeach
      </select>
    </div>

    <div class="form-group mb-4">
      <label class="form-label">Technology</label>
      @foreach ($technologies as $technology)

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
        <label class="form-check-label" for="inlineCheckbox1">1</label>
      </div>
        
      @endforeach


    </div>

   
  
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
      </div>
    </div>
    
  </form>
</div>
@endsection