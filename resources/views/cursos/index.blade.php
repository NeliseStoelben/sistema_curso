@extends('layouts.app')

@section('title', 'Cursos')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0">Lista de Cursos</h1>

    <a href="{{ route('cursos.create') }}" class="btn btn-primary">
        Novo Curso
    </a>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-striped mb-0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th style="width: 200px;">Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($cursos as $curso)
                <tr>
                    <td>{{ $curso->id }}</td>
                    <td>{{ $curso->nome }}</td>
                    <td class="text-nowrap">
                        <a href="{{ route('cursos.edit', $curso->id) }}"
                           class="btn btn-warning btn-sm">
                            Editar
                        </a>

                        <form action="{{ route('cursos.destroy', $curso->id) }}"
                              method="POST"
                              class="d-inline">
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
                    <td colspan="3" class="text-center text-muted">
                        Nenhum curso cadastrado.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
