@extends('layouts.main')

@section('title', 'Cadastrar usuario')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastrar usuario</h1>
    <form action="/eventos" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form group">
            <label for="image">FOTO:</label>
            <input type="file" id="image" name="image" class="from-control-file">
        </div>
        <div class="form group">
            <label for="titulo">Nome do Usuario:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="ex: luis henrique">
        </div>
        <div class="form group">
            <label for="titulo">Data de Nascimento:</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form group">
            <label for="titulo">Cidade:</label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="ex: Pres Prudente">
        </div>
        <div class="form group">
            <label for="titulo">email-e:</label>
            <input type="text" name="descricao" id="descricao" class="form-control" placeholder="ex: l.henrick@live.com">
        </div>
        <div class="form group">
            <label for="titulo">Vai participar do evento?:</label>
            <select name="privado" id="privado" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form group">
            <label for="titulo">O que espera do evento:</label>
            <div class="form-group">
                <input type="checkbox" name="items" value="Luzes">Se diverti
            </div>
            <div class="form-group">
                <input type="checkbox" name="items" value="Palco">Se diverti Muito
            </div>

            <br>
            <input type="submit" class="btn btn-primary" value="Salvar Usuario">
        </form>

</div>
@endsection
