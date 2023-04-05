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
            <h3>Home Page</h3>
            <hr>
        </div>

        <div class="card-body">
            <table class="table text-center table-bordered table-striped custom-table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Value</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($skills as $skill)
                    <tr>
                        <td>{{ $skill->id }}</td>
                        <td>{{ $skill->name }}</td>
                        <td>%{{ $skill->value }}</td>
                        <td>
                            <a href="{{ route('skill.edit',$skill->id)}}"  class="btn btn-primary btn-min-width box-shadow-3 mr-1 mb-1 btn-sm">Edit</a>
                        </td>
                        <td>
                            <a href="{{ route('skill.delete',$skill->id)}}"
                               class="btn btn-danger btn-min-width box-shadow-3 mr-1 mb-1 btn-sm">delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
    <br>
    <h4 style="text-align: center" class="m-0">Add Skill</h4>
    <div class="container w-50">
        <form action="{{route('skill.store')}}" method="POST" enctype="multipart/form-data" >
            @csrf

                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputTitle">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputTitle" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTitle">Value</label>
                        <input type="number" name="value" class="form-control" id="exampleInputTitle" >
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
        </form>
    </div>

    <br><br><br>
@endsection
