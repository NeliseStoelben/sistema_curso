@extends('layouts.app')

@section('title', 'Cadastrar Curso')

@section('content')
<h1 class="h3 mb-4">Cadastrar Curso</h1>

<form action="{{ route('cursos.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Nome do Curso</label>
        <input type="text"
               name="nome"
               class="form-control"
               required>
    </div>

    <button type="submit" class="btn btn-success">
        Salvar
    </button>

    <a href="{{ route('cursos.index') }}" class="btn btn-secondary">
        Voltar
    </a>
</form>
@endsection
