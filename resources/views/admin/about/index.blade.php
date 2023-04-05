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
                    <th>Description</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($abouts as $about)
                    <tr>
                        <td>{{ $about->id }}</td>
                        <td>{{ $about->description }}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
    <br>
    <h4 style="text-align: center" class="m-0">Update Page</h4>
    <div class="container w-50">
        <form action="{{route('about.update')}}" method="POST" enctype="multipart/form-data" >
            @csrf

                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputTitle">Description</label>
                        <textarea type="text" name="description" class="form-control" id="exampleInputTitle">{{ $about->description }}</textarea>
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">update</button>
                </div>
        </form>
    </div>

    <br><br><br>
@endsection
