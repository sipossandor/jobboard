@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')

    <!-- <button type="button" class="btn btn-primary" href="{{ url('/admin/job_openings') }}">Back</button> -->
    <div style="margin-bottom: 2%;">
        <a href="{{ url('/admin/job_openings') }}" class="btn btn-xs btn-info pull-right">Back</a>
    </div>

    <div class="card mb-4">

        <div class="card-header">
            Edit Job Openings
        </div>

        <div class="card-body">
            @if($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif

                <form method="POST" action="{{ route('admin.job_openings.update', ['id'=> $viewData['job_opening']->getId()]) }}"
                  enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Country:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="country" value="{{ $viewData['job_opening']->getCountry() }}" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">City:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="city" value="{{ $viewData['job_opening']->getCity() }}" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Department:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="department" value="{{ $viewData['job_opening']->getDepartment() }}" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                </div>
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Language Required:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="language_required" value="{{ $viewData['job_opening']->getLanguageRequired() }}" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Job Title: </label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="job_title" value="{{ $viewData['job_opening']->getJobTitle() }}" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Salary:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="salary" value="{{ $viewData['job_opening']->getSalary() }}" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Starting Date</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="starting_date" value="{{ $viewData['job_opening']->getStartingDate() }}" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            &nbsp;
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Job Description</label>
                        <textarea class="form-control" name="job_description" rows="3">{{ $viewData['job_opening']->getJobDescription() }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Requirements</label>
                        <textarea class="form-control" name="requirements" rows="3">{{ $viewData['job_opening']->getRequirements() }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
        </div>
    </div>
@endsection
