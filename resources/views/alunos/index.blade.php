@extends('layouts.app')
@section('content')

<div class="container">
    <h2>Lista de Alunos</h2>

    <a href="{{ route('alunos.create') }}" class="btn btn-primary mb-3">
        Novo Aluno
    </a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach($alunos as $aluno)
                <tr>
                    <td>{{ $aluno->id }}</td>
                    <td>{{ $aluno->nome }}</td>
                    <td>{{ $aluno->email }}</td>
                    <td>{{ $aluno->telefone }}</td>

                    <td>
                        <a href="{{ route('alunos.edit', $aluno->id) }}"
                           class="btn btn-warning btn-sm">
                           Editar
                        </a>

                        <form action="{{ route('alunos.destroy', $aluno->id) }}"
                              method="POST"
                              style="display:inline;">
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="btn btn-danger btn-sm">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>

@endsection