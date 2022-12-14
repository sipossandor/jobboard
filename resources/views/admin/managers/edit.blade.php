@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')

    <!-- <button type="button" class="btn btn-primary" href="{{ url('/admin/managers') }}">Back</button> -->
    <div style="margin-bottom: 2%;">
        <a href="{{ url('/admin/managers') }}" class="btn btn-xs btn-info pull-right">Back</a>
    </div>

    <div class="card mb-4">

        <div class="card-header">
            Edit Manager
        </div>

        <div class="card-body">
            @if($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('admin.managers.update', ['id'=> $viewData['manager']->getId()]) }}"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Name:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="name" value="{{ $viewData['manager']->getName() }}" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Post:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="post" value="{{ $viewData['manager']->getPost() }}" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Photo:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input  name="image" type="file" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
@endsection
