@extends('layouts.app')
@section('content')
<div class="contaner p-4">
    <div class="row justify-content-center py-2">
        <div class="col-sm-6 d-flex justify-content-end">
          <div>
            <a href="{{ route('admin.technologies.create') }}" class="btn btn-outline-dark rounded-pill ">Add new technologie</a>
          </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-sm-6">

            <div class="card">
                <div class="card-header">technologies</div>
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
@endsection