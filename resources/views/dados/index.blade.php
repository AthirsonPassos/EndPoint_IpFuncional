@extends('layout')

@section('cabecalho')
    Séries
@endsection

@section('conteudo')
    <a href="/dados/criar" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach($dados as $dado)
            <li class="list-group-item"><?= $dado; ?></li>
        @endforeach
    </ul>
@endsection
