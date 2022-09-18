@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
    <div class="row">
        <div class="col-lg-12 ms-auto">
            <p class="lead">{{ $viewData["description"] }}</p>
        </div>
    </div>
    <div>Our values:</div>
    <div class="row">
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('/img/professional.jpg') }}" class="rounded img-card-value">
            <h5 class="card-title text-center text-primary text-uppercase">Professional</h5>
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('/img/stable.jpg') }}" class="rounded img-card-value">
            <h5 class="card-title text-center text-primary text-uppercase">Stable</h5>
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('/img/diverse.jpg') }}" class="rounded img-card-value">
            <h5 class="card-title text-center text-primary text-uppercase">Diverse</h5>
        </div>
    </div>
@endsection
