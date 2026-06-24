@extends('layouts.app')

@section('title', 'Cadastrar Matrícula')

@section('content')
<h1 class="h3 mb-4">Cadastrar Matrícula</h1>

<form action="{{ route('matriculas.store') }}" method="POST">
    @csrf

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="mb-3">
        <label class="form-label">Aluno</label>
        <select name="aluno_id" class="form-select" required>
            <option value="">Selecione um aluno</option>
            @foreach($alunos as $aluno)
                <option value="{{ $aluno->id }}" {{ old('aluno_id') == $aluno->id ? 'selected' : '' }}>
                    {{ $aluno->nome }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Curso</label>
        <select name="curso_id" class="form-select" required>
            <option value="">Selecione um curso</option>
            @foreach($cursos as $curso)
                <option value="{{ $curso->id }}" {{ old('curso_id') == $curso->id ? 'selected' : '' }}>
                    {{ $curso->nome }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Data da Matrícula</label>
        <input type="date" name="data_matricula" class="form-control" value="{{ old('data_matricula') }}" required>
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ route('matriculas.index') }}" class="btn btn-secondary">Voltar</a>
</form>
@endsection
