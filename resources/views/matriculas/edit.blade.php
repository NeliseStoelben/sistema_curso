<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Matrícula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Editar Matrícula</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/matriculas/{{ $matricula->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Aluno</label>
            <select name="aluno_id" class="form-select">
                <option value="">Selecione um aluno</option>
                @foreach($alunos as $aluno)
                    <option value="{{ $aluno->id }}" {{ old('aluno_id', $matricula->aluno_id) == $aluno->id ? 'selected' : '' }}>
                        {{ $aluno->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Curso</label>
            <select name="curso_id" class="form-select">
                <option value="">Selecione um curso</option>
                @foreach($cursos as $curso)
                    <option value="{{ $curso->id }}" {{ old('curso_id', $matricula->curso_id) == $curso->id ? 'selected' : '' }}>
                        {{ $curso->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Data da Matrícula</label>
            <input type="date" name="data_matricula" class="form-control" value="{{ old('data_matricula', $matricula->data_matricula) }}">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="/matriculas" class="btn btn-secondary">Voltar</a>
    </form>
</div>
</body>
</html>
