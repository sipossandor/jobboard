@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

    <div style="margin-bottom: 2%;">
        <a href="{{ url('/') }}" class="btn btn-xs btn-info pull-right">Back</a>
    </div>

    <div class="card mb-4">

        <div class="card-header">
            My Profile
        </div>

        <div class="card-body">
            @if($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Registered</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $viewData['user']->getCreatedAt() }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <form method="POST" action="{{ route('user.update', ['id'=> $viewData['user']->getId()]) }}"
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Name:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="name" value="{{ $viewData['user']->getName() }}" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Email:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="email" value="{{ $viewData['user']->getEmail() }}" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <td>If you would like to delete yourself from our database:</td>
                            <td>
                                <form action="{{ route('user.delete', $viewData['user']->getId())}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete My Profile</button>
                                </form>
                            </td>
                        </tr>
                        </thead>
                    </table>
                </div>

        </div>
    </div>

@endsection
