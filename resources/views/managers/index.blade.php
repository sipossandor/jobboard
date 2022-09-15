@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
    <div class="row">
        @foreach ($viewData["managers"] as $managers)
            <div class="col-md-4 col-lg-3 mb-2">
                <div class="card">
                    <img src="{{ asset('/storage/'.$managers->getPhoto()) }}" class="card-img-top img-card">
                    <div class="card-body text-center">
                        <a href="{{ route('managers.index', ['id'=> $managers->getId()]) }}"
                           class="btn bg-primary text-white">{{ $managers->getName() }}</a>
                        <p>{{ $managers->getPost() }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
