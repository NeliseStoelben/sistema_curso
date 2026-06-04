@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Lista de Matrículas</h1>

    <a href="{{ route('matriculas.create') }}" class="btn btn-primary mb-3">
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
                        <a href="{{ route('matriculas.edit', $matricula->id) }}" class="btn btn-warning btn-sm">
                            Editar
                        </a>
                        <form action="{{ route('matriculas.destroy', $matricula->id) }}" method="POST" style="display:inline;">
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
                    <td colspan="5">Nenhuma matrícula cadastrada.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
