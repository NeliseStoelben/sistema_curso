<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Cadastrar Curso</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/cursos" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">
                Nome do Curso
            </label>
            <input type="text"
                   name="nome"
                   class="form-control"
                   value="{{ old('nome') }}">
        </div>

        <button type="submit" class="btn btn-success">
            Salvar
        </button>

        <a href="/cursos" class="btn btn-secondary">
            Voltar
        </a>
    </form>
</div>
</body>
</html>