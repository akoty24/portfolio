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
            <h3>experience Project</h3>
            <hr>
        </div>

    <div class="container w-50">
        <form action="{{route('project.update',$projects->id)}}" method="POST" enctype="multipart/form-data" >
            @csrf

            <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputTitle">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputTitle"  value="{{$projects->name}}" >
                </div>
                <div class="form-group">
                    <label for="exampleInputTitle">image</label>
                    <input type="file" name="image" class="form-control" id="exampleInputTitle"  value="{{$projects->image}}" >
                </div>
                <div class="form-group">
                    <label for="exampleInputTitle">description</label>
                    <textarea  name="description" class="form-control" id="exampleInputTitle" >{{$projects->description}}</textarea>
                </div>  <div class="form-group">
                    <label for="exampleInputTitle">tools</label>
                    <input type="text" name="tools" class="form-control" id="exampleInputTitle"  value="{{$projects->tools}}" >
                </div>
                <div class="form-group">
                    <label for="exampleInputTitle">link</label>
                    <input type="text" name="link" class="form-control" id="exampleInputTitle"  value="{{$projects->link}}">
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">update</button>
            </div>
        </form>
    </div>

    <br><br><br>
@endsection
