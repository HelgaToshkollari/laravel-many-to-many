@extends('layouts.app')

@section("content")
<div class="container py-4">
  <div class="row py-2">
    <div class="col d-flex justify-content-end">
      <div>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-outline-dark rounded-pill ">Add new Project</a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th>Id</th>
                <th>Cover</th>
                <th>Title</th>
                <th>Description</th>
                <th></th>

              </tr>
            </thead>
            <tbody>
              @foreach ($projects as $project)
                <tr>
                  <td>{{ $project->id }}</td>
                  <td><img src="{{ $project->cover_img }}" alt="" style="width: 100px"></td>
                  <td>{{ $project->title }}</td>
                  <td>{{ $project->description}}</td>
                  <td>
                    <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-outline-success">Edit</a>
                    <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-outline-dark">Show more</a>
                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="delete-form d-inline-block">
                      @csrf()
                      @method('delete')
                      <button class="btn btn btn-outline-danger">
                        Delete
                      </button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table> 
        </div>
      </div>
    </div>
  </div>
</div>

@endsection