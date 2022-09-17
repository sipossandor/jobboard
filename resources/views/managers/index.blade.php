@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
    <div class="row">
        @foreach ($viewData["manager"] as $manager)
            <div class="col-md-4 col-lg-3 mb-2">
                <div class="card">
                    <img src="{{ asset('/storage/'.$manager->getPhoto()) }}" class="card-img-top img-card">
                    <div class="card-body text-center">
                        <h5 class="card-title">
                            {{ $manager->getName() }}
                        </h5>
                        <!-- <a href="{{ route('managers.index', ['id'=> $manager->getId()]) }}"
                           class="btn bg-primary text-white">{{ $manager->getName() }}</a> -->
                        <p>{{ $manager->getPost() }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
