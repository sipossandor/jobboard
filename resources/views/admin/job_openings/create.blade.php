@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')

    <!-- <button type="button" class="btn btn-primary" href="{{ url('/admin/job_openings') }}">Back</button> -->
    <div style="margin-bottom: 2%;">
        <a href="{{ url('/admin/job_openings') }}" class="btn btn-xs btn-info pull-right">Back</a>
    </div>

    <div class="card mb-4">
    <div class="card-header">
        Create Job Openings
    </div>
    <div class="card-body">
        @if($errors->any())
            <ul class="alert alert-danger list-unstyled">
                @foreach($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        @endif

            <form method="POST" action="{{ route('admin.job_openings.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Country: </label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="country" value="{{ old('country') }}" class="form-control" type="text"
                                       class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">City:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="city" value="{{ old('city') }}" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Department:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="department" value="{{ old('department') }}" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Language Required:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="language_required" value="{{ old('language_required') }}" class="form-control"
                                       type="text">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Job Title: </label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="job_title" value="{{ old('job_title') }}" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Salary:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="salary" value="{{ old('salary') }}" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Starting Date:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="starting_date" value="{{ old('starting_date') }}" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        &nbsp;
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Job Description</label>
                    <textarea class="form-control" name="job_description" rows="3">{{ old('job_description') }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Requirements</label>
                    <textarea class="form-control" name="requirements" rows="3">{{ old('requirements') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

    </div>
</div>
@endsection
