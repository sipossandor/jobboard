@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')

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
            <form method="POST" action="{{ route('admin.job_openings.store') }}">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Title:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="name" value="{{ old('title') }}" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Salary:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="price" value="{{ old('salary') }}" type="number" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="description" rows="3">{{ old('description') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Manage Job Openings
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Country</th>
                    <th scope="col">City</th>
                    <th scope="col">Department</th>
                    <th scope="col">Language Required</th>
                    <th scope="col">Job Title</th>
                    <th scope="col">Job Description</th>
                    <th scope="col">Requirements</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Starting Date</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($viewData["job_openings"] as $job_opening)
                    <tr>
                        <td>{{ $job_opening->getId() }}</td>
                        <td>{{ $job_opening->getCountry() }}</td>
                        <td>{{ $job_opening->getCity() }}</td>
                        <td>{{ $job_opening->getDepartment() }}</td>
                        <td>{{ $job_opening->getLanguageRequired() }}</td>
                        <td>{{ $job_opening->getJobTitle() }}</td>
                        <td>{{ $job_opening->getJobDescription() }}</td>
                        <td>{{ $job_opening->getRequirements() }}</td>
                        <td>{{ $job_opening->getSalary() }}</td>
                        <td>{{ $job_opening->getStartingDate() }}</td>
                        <td>{{ $job_opening->getCreatedAt() }}</td>
                        <td>{{ $job_opening->getUpdatedAt() }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
