<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f4f6f8;
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <main class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h1 class="h3 mb-3">Bem-vindo ao Sistema de Cursos</h1>
                        <p class="text-muted">Projeto acadêmico para gerenciamento de cursos, alunos, categorias e matrículas.</p>
                        <div class="mt-4">
                            <a href="{{ route('login') }}" class="btn btn-primary me-2">Entrar</a>
                            <a href="{{ route('register') }}" class="btn btn-outline-secondary">Cadastrar usuário</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
