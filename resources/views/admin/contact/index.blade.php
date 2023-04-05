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
            <h3>Contact Page</h3>
            <hr>
        </div>

        <div class="card-body">
            <table class="table text-center table-bordered table-striped custom-table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Description</th>
                    <th>phone</th>
                    <th>gmail</th>
                    <th>facebook</th>
                    <th>instagram</th>
                    <th>linkedin</th>
                    <th>github</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->description }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->gmail }}</td>
                        <td>{{ $contact->facebook }}</td>
                        <td>{{ $contact->instagram }}</td>
                        <td>{{ $contact->linkedin }}</td>
                        <td>{{ $contact->github }}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
    <br>
    <h4 style="text-align: center" class="m-0">Update Page</h4>
    <div class="container w-50">
        <form action="{{route('contact.update')}}" method="POST" enctype="multipart/form-data" >
            @csrf

                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputTitle">Description</label>
                        <textarea type="text" name="description" class="form-control" id="exampleInputTitle">{{ $contact->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTitle">phone</label>
                        <input type="number" name="phone" class="form-control" id="exampleInputTitle" value="{{ $contact->phone }}" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTitle">gmail</label>
                        <input type="text" name="gmail" class="form-control" id="exampleInputTitle" value="{{ $contact->gmail }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTitle">facebook</label>
                        <input type="text" name="facebook" class="form-control" id="exampleInputTitle" value="{{ $contact->facebook }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTitle">instagram</label>
                        <input type="text" name="instagram" class="form-control" id="exampleInputTitle" value="{{ $contact->instagram }}" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTitle">linkedin</label>
                        <input type="text" name="linkedin" class="form-control" id="exampleInputTitle" value="{{ $contact->linkedin }}" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTitle">github</label>
                        <input type="text" name="github" class="form-control" id="exampleInputTitle" value="{{ $contact->github }}" >
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">update</button>
                </div>
        </form>
    </div>

    <br><br><br>
@endsection
