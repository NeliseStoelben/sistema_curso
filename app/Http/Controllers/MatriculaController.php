<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    public function index()
    {
        $matriculas = Matricula::all();
        return view('matriculas.index', compact('matriculas'));
    }

    public function create()
    {
        $alunos = Aluno::all();
        $cursos = Curso::all();
        return view('matriculas.create', compact('alunos', 'cursos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'aluno_id' => 'required|exists:alunos,id',
            'curso_id' => 'required|exists:cursos,id',
            'data_matricula' => 'required|date',
        ]);

        Matricula::create([
            'aluno_id' => $request->aluno_id,
            'curso_id' => $request->curso_id,
            'data_matricula' => $request->data_matricula,
        ]);

        return redirect()->route('matriculas.index');
    }

    public function edit($id)
    {
        $matricula = Matricula::findOrFail($id);
        $alunos = Aluno::all();
        $cursos = Curso::all();
        return view('matriculas.edit', compact('matricula', 'alunos', 'cursos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'aluno_id' => 'required|exists:alunos,id',
            'curso_id' => 'required|exists:cursos,id',
            'data_matricula' => 'required|date',
        ]);

        $matricula = Matricula::findOrFail($id);
        $matricula->update([
            'aluno_id' => $request->aluno_id,
            'curso_id' => $request->curso_id,
            'data_matricula' => $request->data_matricula,
        ]);

        return redirect()->route('matriculas.index');
    }

    public function destroy($id)
    {
        $matricula = Matricula::findOrFail($id);
        $matricula->delete();
        return redirect()->route('matriculas.index');
    }
}
