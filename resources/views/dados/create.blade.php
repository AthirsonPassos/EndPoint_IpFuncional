@extends('layout')

@section('cabecalho')
    Cadastrar Curriculo
@endsection

@section('conteudo')

@if ($errors->any())
      <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
       </div>
@endif

    <form action="{{ route('adicionar_cadastro') }}" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            @csrf
            <label for="nome" class="">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">

            <label for="email" class="">E-mail</label>
            <input type="text" class="form-control" name="email" id="email">

            <label for="telefone" class="">Telefone</label>
            <input type="text" class="form-control" name="telefone" id="telefone">

            <label for="endereco" class="">Endereço</label>
            <input type="text" class="form-control" name="endereco" id="endereco">

            <label for="curriculo" class="mt-3">Currículo</label>
            <input type="file" name="curriculo" id="curriculo">


</div>

<button class="btn btn-primary">Adicionar</button>
</form>
@endsection
