@extends('layouts.app')

@section('title', 'Editar Aluno')

@section('content')
<h1 class="h3 mb-4">Editar Aluno</h1>

<form action="{{ route('alunos.update', $aluno->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text"
               name="nome"
               value="{{ old('nome', $aluno->nome) }}"
               class="form-control"
               required>
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email"
               name="email"
               value="{{ old('email', $aluno->email) }}"
               class="form-control"
               required>
    </div>

    <div class="mb-3">
        <label class="form-label">Telefone</label>
        <input type="text"
               name="telefone"
               value="{{ old('telefone', $aluno->telefone) }}"
               class="form-control"
               required>
    </div>

    <button type="submit" class="btn btn-primary">
        Atualizar
    </button>

    <a href="{{ route('alunos.index') }}" class="btn btn-secondary">
        Voltar
    </a>
</form>
@endsection