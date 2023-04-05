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
            <h3>Edit experience</h3>
            <hr>
        </div>

    <div class="container w-50">
        <form action="{{route('experience.update',$experiences->id)}}" method="POST" enctype="multipart/form-data" >
            @csrf

            <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputTitle">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputTitle"  value="{{$experiences->name}}" >
                </div>
                <div class="form-group">
                    <label for="exampleInputTitle">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputTitle"  value="{{$experiences->title}}" >
                </div>
                <div class="form-group">
                    <label for="exampleInputTitle">company</label>
                    <input type="text" name="company" class="form-control" id="exampleInputTitle"  value="{{$experiences->company}}" >
                </div>

               <div>
                    <label for="exampleInputTitle">start</label>
                    <input type="text" name="start" class="form-control" id="exampleInputTitle"  value="{{$experiences->start}}" >
                </div>
                <div class="form-group">
                    <label for="exampleInputTitle">end</label>
                    <input type="text" name="end" class="form-control" id="exampleInputTitle"  value="{{$experiences->end}}">
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">update</button>
            </div>
        </form>
    </div>

    <br><br><br>
@endsection
