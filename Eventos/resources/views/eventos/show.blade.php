@extends('layouts.main')

@section('title', $event->titulo)

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/evento/{{ $event->image }}" class="image-fluid" alt="{{ $event->titulo }}"> <!-- puxa a imagem -->
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{$event->titulo}}</h1>
            <p class="event-cidade"><ion-icon name="location-outline"></ion-icon> {{ $event->cidade }} </p>
            <p class="event-participantes"><ion-icon name="people-outline"></ion-icon> X participantes</p>
            <p class="event-owner"><ion-icon name="star-outline"></ion-icon> Dono do evento </p>
            <a href="#" class="btn btn-primary" id="event-submit">Confirmar Presença</a>
            <h3>O evento conta com:</h3>
            <ul id="items-list">
                @foreach($event->items as $item)
                    <li><ion-icon name="play-outline"></ion-icon><span>{{ $item }}</span></li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-12" id="description-container">
            <h3>Sobre o Evento:</h3>
            <p class="event-description">{{ $event->descricao }}</p>
        </div>
    </div>
</div>

@endsection
