@extends('layouts.main')

@section('title', 'home')

@section('content')

@foreach ($events as $event)
    <p>{{ $event->titulo }} -- {{ $event->descricao }} -- {{ $event->cidade }}</p>
@endforeach

@endsection
