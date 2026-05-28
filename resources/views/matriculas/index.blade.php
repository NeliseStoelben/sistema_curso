<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriculas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container mt-5">
    <h1 class="mb-4">Lista de Matrículas</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="/matriculas/create" class="btn btn-primary mb-3">
        Nova Matrícula
    </a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Aluno</th>
                <th>Curso</th>
                <th>Data da Matrícula</th>
                <th width="200">Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($matriculas as $matricula)
                <tr>
                    <td>{{ $matricula->id }}</td>
                    <td>{{ $matricula->aluno->nome ?? '—' }}</td>
                    <td>{{ $matricula->curso->nome ?? '—' }}</td>
                    <td>{{ $matricula->data_matricula }}</td>
                    <td>
                        <a href="/matriculas/{{ $matricula->id }}/edit" class="btn btn-warning btn-sm">
                            Editar
                        </a>
                        <form action="/matriculas/{{ $matricula->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Deseja excluir esta matrícula?')">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">
                        Nenhuma matrícula cadastrada.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
</body>
</html>
