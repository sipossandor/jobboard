@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
    <div class="row">
        @foreach ($viewData["jobopenings"] as $jobopenings)
            <div class="col-md-4 col-lg-3 mb-2">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="{{ route('job_openings.show', ['id'=> $jobopenings->getId()]) }}"
                           class="btn bg-primary text-white">{{ $jobopenings->getJobTitle() }}</a>
                        <p>{{ $jobopenings->getCity() }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
