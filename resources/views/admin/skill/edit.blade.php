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
            <h3>Edit Skill</h3>
            <hr>
        </div>

    <div class="container w-50">
        <form action="{{route('skill.update',$skills->id)}}" method="POST" enctype="multipart/form-data" >
            @csrf

            <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputTitle">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputTitle"  value="{{$skills->name}}" >
                </div>
                <div class="form-group">
                    <label for="exampleInputTitle">Value</label>
                    <input type="number" name="value" class="form-control" id="exampleInputTitle"  value="{{$skills->value}}">
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">update</button>
            </div>
        </form>
    </div>

    <br><br><br>
@endsection
