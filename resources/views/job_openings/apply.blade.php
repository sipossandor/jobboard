@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

    <div style="margin-bottom: 2%;">
        <a href="{{ route('job_openings.show', ['id'=> $viewData["jobopenings"]->getId()]) }}" class="btn btn-xs btn-info pull-right">Back</a>
    </div>

    <div class="card mb-4">

        <div class="card-header">
            Apply for the Job
        </div>

        <div class="card-body">

            @if($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST"
                  action="{{ route('applications.store') }}"
                  enctype="multipart/form-data">
                @csrf

                <!-- Hidden form data -->
                <input name="user_id" value="{{ $viewData['user']->getId() }}" type="hidden" class="form-control">
                <input name="job_id" value="{{ $viewData['jobopenings']->getId() }}" type="hidden" class="form-control">
                <input name="job_title" value="{{ $viewData['jobopenings']->getJobTitle() }}" type="hidden" class="form-control">
                <input name="user_name" value="{{ $viewData['user']->getName() }}" type="hidden" class="form-control">

                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">LinkedIn URL:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="linkedin_url" value="{{ old('linkedin_url') }}" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Resume:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input class="form-control" type="file" name="resume">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

@endsection
