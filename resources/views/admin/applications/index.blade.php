@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')

    <div class="card">
        <div class="card-header">
             Applications
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Job Title</th>
                    <th scope="col">LinkedIn Url</th>
                    <th scope="col">Resume</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($viewData["applications"] as $application)
                    <tr>
                        <td>{{ $application->getId() }}</td>
                        <td>{{ $application->getUser()->getName() }}</td>
                        <td>{{ $application->getUser()->getEmail() }}</td>
                        <td>{{ $application->getJobOpening()->getJobTitle() }}</td>
                        <td>{{ $application->getLinkedInUrl() }}</td>
                        <td>{{ $application->getResume() }}</td>
                        <td>{{ $application->getCreatedAt() }}</td>
                        <td>{{ $application->getUpdatedAt() }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

