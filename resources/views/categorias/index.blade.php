@extends('layouts.app')

@section('title', 'Categorias')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0">Lista de Categorias</h1>

    <a href="{{ route('categorias.create') }}" class="btn btn-primary">
        Nova Categoria
    </a>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-striped mb-0" style="border-color: #dee2e6;">
        <thead class="table-light" style="background-color: #f8f9fa;">
            <tr>
                <th style="border-color: #dee2e6;">ID</th>
                <th style="border-color: #dee2e6;">Nome</th>
                <th style="border-color: #dee2e6;">Descrição</th>
                <th style="width: 200px; border-color: #dee2e6;">Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>{{ $categoria->nome }}</td>
                    <td>{{ Str::limit($categoria->descricao, 80) }}</td>
                    <td class="text-nowrap">
                        <a href="{{ route('categorias.edit', $categoria->id) }}"
                           class="btn btn-warning btn-sm">
                            Editar
                        </a>

                        <form action="{{ route('categorias.destroy', $categoria->id) }}"
                              method="POST"
                              class="d-inline">
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Deseja excluir esta categoria?')">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted">
                        Nenhuma categoria cadastrada.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
