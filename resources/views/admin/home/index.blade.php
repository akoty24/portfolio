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
                    <th>Title</th>
                    <th>Image</th>
                    <th>CV</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($homes as $home)
                    <tr>
                        <td>{{ $home->id }}</td>
                        <td>{{ $home->name }}</td>
                        <td>{{ $home->title }}</td>
                        <td>
                            <img src="{{ asset('admin/img/home/' . $home->image) }}" class="cate-image" alt="img not found">
                        </td>
                        <td>{{ $home->cv }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
    <br>
    <h4 style="text-align: center" class="m-0">Update Page</h4>
    <div class="container w-50">
        <form action="{{route('home.update')}}" method="POST" enctype="multipart/form-data" >
            @csrf

                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputTitle">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputTitle" value="{{ $home->name }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTitle">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputTitle" value="{{ $home->title }}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile"> Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="exampleInputFile" value="{{$home->image}}">
                                <label class="custom-file-label" for="exampleInputFile"></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile"> CV</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="cv" class="custom-file-input" id="exampleInputFile" value="{{ $home->cv}}">
                                <label class="custom-file-label" for="exampleInputFile"></label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">update</button>
                </div>
        </form>
    </div>

    <br><br><br>
@endsection
