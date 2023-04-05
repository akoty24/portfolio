@extends('layouts.admin')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h3>Projects Page</h3>
            <hr>
        </div>

        <div class="card-body">
            <table class="table text-center table-bordered table-striped custom-table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Tools</th>
                    <th>Link</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->name }}</td>
                        <td>
                            <img src="{{ asset('admin/img/project/' . $project->image) }}" class="cate-image" alt="img not found">
                        </td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->tools }}</td>
                        <td>{{ $project->link }}</td>
                        <td>
                            <a href="{{ route('project.edit',$project->id)}}"  class="btn btn-primary btn-min-width box-shadow-3 mr-1 mb-1 btn-sm">Edit</a>
                        </td>
                        <td>
                            <a href="{{ route('project.delete',$project->id)}}"
                               class="btn btn-danger btn-min-width box-shadow-3 mr-1 mb-1 btn-sm">delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
    <br>
    <h4 style="text-align: center" class="m-0">Add Project</h4>
    <div class="container w-50">
        <form action="{{route('project.store')}}" method="POST" enctype="multipart/form-data" >
            @csrf

                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputTitle">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputTitle" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTitle">image</label>
                        <input type="file" name="image" class="form-control" id="exampleInputTitle" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTitle">Description</label>
                        <textarea  name="description" class="form-control" id="exampleInputTitle" ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTitle">Tools</label>
                        <input type="text" name="tools" class="form-control" id="exampleInputTitle" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTitle">Link</label>
                        <input type="text" name="link" class="form-control" id="exampleInputTitle" >
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
        </form>
    </div>

    <br><br><br>
@endsection
