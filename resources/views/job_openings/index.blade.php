@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
    <div class="row">
        @foreach ($viewData["job_openings"] as $job_opening)
            <div class="col-md-4 col-lg-3 mb-2">
                <div class="card">
                    <img src="{{ asset('/img/'.$job_opening["image"]) }}" class="card-img-top img-card">
                    <div class="card-body text-center">

                        <a href="{{ route('job_openings.show', ['id'=> $job_opening["id"]]) }}"
                           class="btn bg-primary text-white">{{ $job_opening["title"] }}</a>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
