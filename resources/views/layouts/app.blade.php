<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema de Cursos')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f4f6f8;
        }

        .app-shell {
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background: #182230;
            color: #fff;
        }

        .sidebar .nav-link {
            display: flex;
            align-items: center;
            gap: .5rem;
            padding: .45rem .75rem;
            font-size: 0.95rem;
            line-height: 1;
            white-space: nowrap;
            color: #d7dde5;
            border-radius: .375rem;
            margin-bottom: .25rem;
        }

        .sidebar .nav-link.active,
        .sidebar .nav-link:hover {
            background: #2563eb;
            color: #fff;
        }

        .content {
            min-width: 0;
        }

        @media (max-width: 767.98px) {
            .app-shell {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
            }
        }
    </style>
</head>
<body>
<div class="app-shell d-flex">
    <aside class="sidebar p-3">
        <div class="mb-4">
            <h1 class="h5 mb-1">Sistema de Cursos</h1>
            <div class="small text-white-50">{{ auth()->user()->name }}</div>
        </div>

        <nav class="nav flex-column">
            <a class="nav-link {{ request()->routeIs('cursos.*') ? 'active' : '' }}" href="{{ route('cursos.index') }}">
                Cursos
            </a>
            <a class="nav-link {{ request()->routeIs('alunos.*') ? 'active' : '' }}" href="{{ route('alunos.index') }}">
                Alunos
            </a>
            <a class="nav-link {{ request()->routeIs('categorias.*') ? 'active' : '' }}" href="{{ route('categorias.index') }}">
                Categorias
            </a>
            <a class="nav-link {{ request()->routeIs('matriculas.*') ? 'active' : '' }}" href="{{ route('matriculas.index') }}">
                Matrículas
            </a>
        </nav>

        <form action="{{ route('logout') }}" method="POST" class="mt-4">
            @csrf
            <button type="submit" class="btn btn-outline-light w-100">
                Sair
            </button>
        </form>
    </aside>

    <main class="content flex-grow-1 p-4">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>
</div>
</body>
</html>
