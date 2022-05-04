@extends('layouts.main')

@section('title', 'Editando:'. $event->titulo)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{ $event->titulo }}</h1>
    <form action="/eventos/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" id="image" name="image" class="from-control-file">
            <img src="/img/eventos/{{ $event->image }}" alt="{{ $event->titulo }}" class="image-preview">
        </div>
        <div class="form group">
            <label for="titulo">Evento:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nome do evento" value="{{ $event->titulo }}">
        </div>
        <div class="form group">
            <label for="date">Data do evento:</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $event->date->format('Y-m-d') }}">
        </div>
        <div class="form group">
            <label for="titulo">Cidade:</label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade do evento" value="{{ $event->cidade }}">
        </div>
        <div class="form group">
            <label for="titulo">Descrição:</label>
            <textarea name="descricao" id="descricao" class="form-control" placeholder="O que vai acontecer noo evento ?">{{ $event->descricao }}</textarea>
        </div>
        <div class="form group">
            <label for="titulo">O evento é privado?:</label>
            <select name="privado" id="privado" class="form-control">
                <option value="0">Não</option>
                <option value="1" {{ $event->privado == 1 ? "selected='selected'": "" }}>Sim</option>
            </select>
        </div>
        <div class="form group">
            <label for="titulo">Adicione itens de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Luzes">Luzes
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Palco">Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Musicos">Musicos
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Bebidas">Bebidas
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Som">Som
            </div>

        </div>

        <br>
        <input type="submit" class="btn btn-primary" value="Editar Evento">
    </form>
</div>
@endsection
