@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')

    <div class="card mb-4">
        <div class="card-header">
            Add Member to the Management Board
        </div>
        <div class="card-body">
            @if($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form method="POST" action="{{ route('admin.managers.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Name:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="name" value="{{ old('name') }}" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Post:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="post" value="{{ old('post') }}" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Image:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input class="form-control" type="file" name="image"  value="{{ old('photo') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col">&nbsp;
                            &nbsp;
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Manage Board of Management
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Post</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($viewData["manager"] as $manager)
                    <tr>
                        <td>{{ $manager->getId() }}</td>
                        <td>{{ $manager->getName() }}</td>
                        <td>{{ $manager->getPost() }}</td>
                        <td>{{ $manager->getPhoto() }}</td>
                        <td>{{ $manager->getCreatedAt() }}</td>
                        <td>{{ $manager->getUpdatedAt() }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('admin.managers.edit', ['id'=> $manager->getId()])}}">
                                <i class="bi-pencil-fill"></i>
                            </a>
                        </td>
                        <td>
                            <form action="/admin/managers/{{$manager->getId()}}/delete" method="POST">
                                @csrf
                                <button class="btn btn-danger">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
