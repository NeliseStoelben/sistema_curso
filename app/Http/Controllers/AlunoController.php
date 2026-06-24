<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    // LISTAGEM
    public function index()
    {
        $alunos = Aluno::all();
        return view('alunos.index', compact('alunos'));
    }

    // FORMULÁRIO DE CADASTRO
    public function create()
    {
        return view('alunos.create');
    }

    // SALVAR
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:255',
            'email' => 'required|email|unique:alunos,email',
            'telefone' => 'required|max:20'
        ]);

        Aluno::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone
        ]);

        return redirect()->route('alunos.index')
            ->with('success', 'Aluno cadastrado com sucesso!');
    }

    // FORMULÁRIO DE EDIÇÃO
    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.edit', compact('aluno'));
    }

    // ATUALIZAR
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|max:255',
            'email' => 'required|email|unique:alunos,email,' . $id,
            'telefone' => 'required|max:20'
        ]);

        $aluno = Aluno::findOrFail($id);

        $aluno->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone
        ]);

        return redirect()->route('alunos.index')
            ->with('success', 'Aluno atualizado com sucesso!');
    }

    // EXCLUIR
    public function destroy($id)
    {
        $aluno = Aluno::findOrFail($id);

        $aluno->delete();

        return redirect()->route('alunos.index')
            ->with('success', 'Aluno excluído com sucesso!');
    }
}