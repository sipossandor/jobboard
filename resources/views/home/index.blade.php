@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 me-auto">
                <p class="lead">{{ $viewData["author"] }}</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5> Intézmény: </h5>
                <p> BMSZC Bláthy Ottó Titusz Informatikai Technikum </p>
                <h5> Projekt: </h5>
                <p> Vizsgaremek </p>
                <h5> Konzulens: </h5>
                <p> Harangozó Zsolt </p>
                <h5>Tanulók: </h5>
                <p> Zatykó Nóra, Sipos Sándor </p>
                <h5> Alkalmazás: </h5>
                <p> Karrieroldal </p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('/img/bmszc_logo.png') }}" class="rounded img-card-value">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('/img/blathy_logo.png') }}" class="rounded img-card-value">
            </div>
        </div>
    </div>

@endsection
