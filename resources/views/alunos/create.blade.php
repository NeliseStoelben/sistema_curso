@extends('layouts.app')

@section('title', 'Cadastrar Aluno')

@section('content')
<h1 class="h3 mb-4">Cadastrar Aluno</h1>

<form action="{{ route('alunos.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text"
               name="nome"
               value="{{ old('nome') }}"
               class="form-control"
               required>
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email"
               name="email"
               value="{{ old('email') }}"
               class="form-control"
               required>
    </div>

    <div class="mb-3">
        <label class="form-label">Telefone</label>
        <input type="text"
               name="telefone"
               value="{{ old('telefone') }}"
               class="form-control"
               required>
    </div>

    <button type="submit" class="btn btn-success">
        Salvar
    </button>

    <a href="{{ route('alunos.index') }}" class="btn btn-secondary">
        Voltar
    </a>
</form>
@endsection