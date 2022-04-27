@extends('layouts.main')

@section('title', 'produtos')

@section('content')
<h1>Produtossss</h1>
@if($busca != '')
    <p>Voce esta buscando por: {{ $busca }}</p>
@endif
<a href="/">Home</a>
@endsection
