<?php
namespace App\Http\Controllers;
use App\Models\Curso;
use Illuminate\Http\Request;
class CursoController extends Controller

{
    // LISTAGEM
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }
    public function create()
    {
        return view('cursos.create');
    }

    //SALVAR
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:255'
        ]);
        Curso::create([
            'nome' => $request->nome
        ]);
        return redirect('/cursos')
            ->with('success', 'Curso cadastrado com sucesso!');
    }

    // FORMULÁRIO DE EDIÇÃO
    public function edit($id)
    {
        $curso = Curso::findOrFail($id);
        return view('cursos.edit', compact('curso'));
    }

    // ATUALIZAR
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|max:255'
        ]);
        $curso = Curso::findOrFail($id);
        $curso->update([
            'nome' => $request->nome
        ]);
        return redirect('/cursos')
            ->with('success', 'Curso atualizado com sucesso!');
    }

    // EXCLUIR
    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();
        return redirect('/cursos')
            ->with('success', 'Curso excluído com sucesso!');
    }
}