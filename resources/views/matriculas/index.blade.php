@extends('layouts.app')

@section('title', 'Matrículas')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0">Lista de Matrículas</h1>

    <a href="{{ route('matriculas.create') }}" class="btn btn-primary">
        Nova Matrícula
    </a>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-striped mb-0" style="border-color: #dee2e6;">
        <thead class="table-light" style="background-color: #f8f9fa;">
            <tr>
                <th style="border-color: #dee2e6;">ID</th>
                <th style="border-color: #dee2e6;">Aluno</th>
                <th style="border-color: #dee2e6;">Curso</th>
                <th style="border-color: #dee2e6;">Data da Matrícula</th>
                <th style="width: 200px; border-color: #dee2e6;">Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($matriculas as $matricula)
                <tr>
                    <td>{{ $matricula->id }}</td>
                    <td>{{ $matricula->aluno->nome ?? '—' }}</td>
                    <td>{{ $matricula->curso->nome ?? '—' }}</td>
                    <td>{{ $matricula->data_matricula }}</td>
                    <td class="text-nowrap">
                        <a href="{{ route('matriculas.edit', $matricula->id) }}" class="btn btn-warning btn-sm">
                            Editar
                        </a>
                        <form action="{{ route('matriculas.destroy', $matricula->id) }}" method="POST" class="d-inline">
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
                    <td colspan="5" class="text-center text-muted">
                        Nenhuma matrícula cadastrada.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
