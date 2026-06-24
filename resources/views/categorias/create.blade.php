@extends('layouts.app')

@section('title', 'Cadastrar Categoria')

@section('content')
<h1 class="h3 mb-4">Cadastrar Categoria</h1>

<form action="{{ route('categorias.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Nome da Categoria</label>
        <input type="text"
               name="nome"
               value="{{ old('nome') }}"
               class="form-control"
               required>
    </div>

    <div class="mb-3">
        <label class="form-label">Descrição</label>
        <textarea name="descricao"
                  class="form-control"
                  rows="4"
                  required>{{ old('descricao') }}</textarea>
    </div>

    <button type="submit" class="btn btn-success">
        Salvar
    </button>

    <a href="{{ route('categorias.index') }}" class="btn btn-secondary">
        Voltar
    </a>
</form>
@endsection
