@extends('layouts.app')
@section('content')

<div class="container">
    <h2>Editar Aluno</h2>

    <form action="{{ route('alunos.update', $aluno->id) }}"
          method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nome</label>
            <input type="text"
                   name="nome"
                   value="{{ $aluno->nome }}"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email"
                   name="email"
                   value="{{ $aluno->email }}"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>Telefone</label>
            <input type="text"
                   name="telefone"
                   value="{{ $aluno->telefone }}"
                   class="form-control"
                   required>
        </div>

        <button type="submit" class="btn btn-primary">
            Atualizar
        </button>

        <a href="{{ route('alunos.index') }}"
           class="btn btn-secondary">
           Voltar
        </a>
    </form>

</div>

@endsection