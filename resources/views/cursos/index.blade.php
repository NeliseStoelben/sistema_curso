<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container mt-5">
    <h1 class="mb-4">Lista de Cursos</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="/cursos/create" class="btn btn-primary mb-3">
        Novo Curso
    </a>

    <table class="table table-bordered table-striped">

        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th width="200">Ações</th>
            </tr>
        </thead>

        <tbody>

            @forelse($cursos as $curso)
                <tr>
                    <td>{{ $curso->id }}</td>
                    <td>{{ $curso->nome }}</td>
                    <td>
                        <a href="/cursos/{{ $curso->id }}/edit"
                           class="btn btn-warning btn-sm">
                            Editar
                        </a>
                        <form action="/cursos/{{ $curso->id }}"
                              method="POST"
                              style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Deseja excluir este curso?')">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            @empty            
                <tr>
                    <td colspan="3">
                        Nenhum curso cadastrado.
                    </td>
                </tr>
            @endforelse

        </tbody>

    </table>

</div>
</body>
</html>