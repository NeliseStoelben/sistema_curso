@extends('layouts.app')

@section('title', 'Alunos')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0">Lista de Alunos</h1>

    <a href="{{ route('alunos.create') }}" class="btn btn-primary">
        Novo Aluno
    </a>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-striped mb-0" style="border-color: #dee2e6;">
        <thead class="table-light" style="background-color: #f8f9fa;">
            <tr>
                <th style="border-color: #dee2e6;">ID</th>
                <th style="border-color: #dee2e6;">Nome</th>
                <th style="border-color: #dee2e6;">Email</th>
                <th style="border-color: #dee2e6;">Telefone</th>
                <th style="width: 200px; border-color: #dee2e6;">Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($alunos as $aluno)
                <tr>
                    <td>{{ $aluno->id }}</td>
                    <td>{{ $aluno->nome }}</td>
                    <td>{{ $aluno->email }}</td>
                    <td>{{ $aluno->telefone }}</td>
                    <td class="text-nowrap">
                        <a href="{{ route('alunos.edit', $aluno->id) }}" class="btn btn-warning btn-sm">
                            Editar
                        </a>

                        <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Deseja excluir este aluno?')">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center text-muted">
                        Nenhum aluno cadastrado.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection