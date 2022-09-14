@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('/img/'.$viewData["job_opening"]["image"]) }}" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $viewData["job_opening"]["title"] }} (${{ $viewData["job_opening"]["salary"] }})
                    </h5>
                    <p class="card-text">{{ $viewData["job_opening"]["description"] }}</p>
                    <p class="card-text"><small class="text-muted">Apply</small></p>
                </div>
            </div>
        </div>
    </div>
@endsection
