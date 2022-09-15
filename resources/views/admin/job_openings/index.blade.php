@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')

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
