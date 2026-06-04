@extends('layouts.app')
@section('content')

<div class="container">
    <h2>Cadastrar Curso</h2>

    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nome do Curso</label>
            <input type="text"
                   name="nome"
                   class="form-control"
                   required>
        </div>

        <button type="submit" class="btn btn-success">
            Salvar
        </button>

        <a href="{{ route('cursos.index') }}"
           class="btn btn-secondary">
           Voltar
        </a>
    </form>
</div>

@endsection