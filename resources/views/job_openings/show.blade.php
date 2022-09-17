@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $viewData["jobopenings"]->getJobTitle() }}
                    </h5>
                    <p class="card-text"><b>Country:</b> {{ $viewData["jobopenings"]->getCountry() }}</p>
                    <p class="card-text"><b>City:</b> {{ $viewData["jobopenings"]->getCity() }}</p>
                    <p class="card-text"><b>Department:</b> {{ $viewData["jobopenings"]->getDepartment() }}</p>
                    <p class="card-text"><b>Language required:</b> {{ $viewData["jobopenings"]->getLanguageRequired() }}</p>
                    <p class="card-text"><b>Job description:</b> {{ $viewData["jobopenings"]->getJobDescription() }}</p>
                    <p class="card-text"><b>Requirements:</b> {{ $viewData["jobopenings"]->getRequirements() }}</p>
                    <p class="card-text"><b>Salary:</b>{{ $viewData["jobopenings"]->getSalary() }}</p>
                    <p class="card-text"><b>Starting date:</b> {{ $viewData["jobopenings"]->getStartingDate() }}</p>
                    <!-- <p class="card-text"><small class="text-muted">Apply</small></p> -->
                    <button type="button" class="btn btn-primary">Apply</button>
                </div>
            </div>
        </div>
    </div>
@endsection
