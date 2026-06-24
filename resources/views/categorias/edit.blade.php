@extends('layouts.app')

@section('title', 'Editar Categoria')

@section('content')
<h1 class="h3 mb-4">Editar Categoria</h1>

<form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Nome da Categoria</label>
        <input type="text"
               name="nome"
               value="{{ old('nome', $categoria->nome) }}"
               class="form-control"
               required>
    </div>

    <div class="mb-3">
        <label class="form-label">Descrição</label>
        <textarea name="descricao"
                  class="form-control"
                  rows="4"
                  required>{{ old('descricao', $categoria->descricao) }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">
        Atualizar
    </button>

    <a href="{{ route('categorias.index') }}" class="btn btn-secondary">
        Voltar
    </a>
</form>
@endsection
