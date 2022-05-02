@extends('layouts.main')

@section('title', 'home')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="procurar...">
    </form>
</div>

<div id="events-container" class="col-md-12">
    @if($search)
    <h2>Buscando por: {{ $search }} </h2>
    @else
    <p class="subtitle">Veja os Eventos seguintes</p>
    @endif

    <div id="cards-container" class="row">
        @foreach ($events as $event)

        <div class="card col-md-3">
            <img src="/img/evento/{{ $event->image }}" alt="{{ $event->titulo }}">
            <div class="card-body">
                <p class="card-date">{{ date('d//m/Y', strtotime($event->date)) }}</p>
                <h5 class="card-title">{{ $event->titulo }}</h5>
                <p class="card-participantes">X participantes</p>
                <a href="/eventos/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
        @if(count($events) == 0 && $search)
            <p>Não foi possivel encontrar nenhum evento com {{ $search }}! <a href="/">Ver todos...</a></p>
        @elseif(count($events) == 0)
            <p>Não ha eventos disponiveis</p>
        @endif
    </div>
</div>
@endsection
