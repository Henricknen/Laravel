@extends('layouts.main')

@section('title', 'Cadastrar usuario')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastrar Participante</h1>
    <form action="/crud_usu" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form group">
            <label for="titulo">Imagem de participante:</label>
            <input type="file" class="form-control-file" id="image" name="image" >
        </div>
        <div class="form group">
            <label for="titulo">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="ex: luis henrique">
        </div>
        <div class="form group">
            <label for="titulo">Data de Nascimento:</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form group">
            <label for="titulo">Descrição:</label>
            <textarea name="descricao" id="descricao" class="form-control" placeholder="O que vai acontecer noo evento ?"></textarea>
        </div>
        <div class="form group">
            <label for="titulo">Cidade:</label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="ex: Pres Prudente">
        </div>
        <div class="form group">
            <label for="titulo">email-e:</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="ex: l.henrick@live.com">
        </div>

            <br>
            <input type="submit" class="btn btn-primary" value="Salvar">
        </form>

</div>
@endsection
