@extends('layouts.app')

@section('title', 'Editar Curso')

@section('content')
<h1 class="h3 mb-4">Editar Curso</h1>

<form action="{{ route('cursos.update', $curso->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Nome do Curso</label>
        <input type="text"
               name="nome"
               value="{{ $curso->nome }}"
               class="form-control"
               required>
    </div>

    <button type="submit" class="btn btn-primary">
        Atualizar
    </button>

    <a href="{{ route('cursos.index') }}" class="btn btn-secondary">
        Voltar
    </a>
</form>
@endsection
