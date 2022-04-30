@extends('layouts.main')

@section('title', 'home')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="procurar...">
    </form>
</div>

<div id="events-container" class="col-md-12">
    <h2>Proximos Eventos</h2>
    <p class="subtitle">Veja os Eventos seguintes</p>

    <div id="cards-container" class="row">
        @foreach ($events as $event)

        <div class="card col-md-3">
            <img src="/img/festa.webp" alt="{{ $event->titulo }}">
            <div class="card-body">
                <p class="card-date">29/04/2022</p>
                <h5 class="card-title">{{ $event->titulo }}</h5>
                <p class="card-participantes">X participantes</p>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>

        @endforeach
    </div>
</div>
@endsection
