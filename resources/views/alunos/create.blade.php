@extends('layouts.app')
@section('content')

<div class="container">
    <h2>Cadastrar Aluno</h2>

    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nome</label>
            <input type="text"
                   name="nome"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email"
                   name="email"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>Telefone</label>
            <input type="text"
                   name="telefone"
                   class="form-control"
                   required>
        </div>

        <button type="submit" class="btn btn-success">
            Salvar
        </button>

        <a href="{{ route('alunos.index') }}"
           class="btn btn-secondary">
           Voltar
        </a>
    </form>
</div>

@endsection