@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center py-4">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            {{ __('You are logged in!') }}
        </div>
      </div>
    </div>
  </div>
  @if (Auth::user()->role === 'admin')
  <div class="row justify-content-center py-4">
        <div class="col-md-8">
          <div class="card mt-4">
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ruolo</th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                    <tr>
                      <td>{{ $user->id }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->role }}</td>
                      <td>{{ $user->email }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
  </div>
    
    <div class="row justify-content-center py-4">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">Types</div>
              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Id</th>
                        <th>Name</th>
                        <th></th>
                      </tr>
                    </thead>
                  <tbody>
                    @foreach ($types as $type)
                    <tr>
                      <td>{{$type->id}}</td>
                      <td>{{$type->name}}</td>
                      <td>
                        <a href="{{ route('admin.types.edit', $type->id) }}" class="btn btn-outline-success">Edit</a>
                        <a href="{{ route('admin.types.show', $type->id) }}" class="btn btn-outline-dark">Show more</a>
                        <form action="{{ route('admin.types.destroy', $type->id) }}" method="POST" class="delete-form d-inline-block">
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
    <div class="row justify-content-center py-4">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Technology</div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>Id</th>
                    <th>Name</th>
                    <th></th>
                  </tr>
                </thead>
              <tbody>
                @foreach ($technologies as $technology)
                <tr>
                  <td>{{$technology->id}}</td>
                  <td>{{$technology->name}}</td>
                  <td>
                    <a href="{{ route('admin.technologies.edit', $technology->id) }}" class="btn btn-outline-success">Edit</a>
                    <a href="{{ route('admin.technologies.show', $technology->id) }}" class="btn btn-outline-dark">Show more</a>
                    <form action="{{ route('admin.technologies.destroy', $technology->id) }}" method="POST" class="delete-form d-inline-block">
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
    <div class="row justify-content-center py-4">
          <div class="col-md-9">
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
  @endif
    
      
</div>
@endsection
