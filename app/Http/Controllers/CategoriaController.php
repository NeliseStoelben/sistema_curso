<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();

        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:255',
            'descricao' => 'required',
        ]);

        Categoria::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
        ]);

        return redirect('/categorias')
            ->with('success', 'Categoria cadastrada com sucesso!');
    }

    public function edit($id)
    {
        $categoria = Categoria::findOrFail($id);

        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|max:255',
            'descricao' => 'required',
        ]);

        $categoria = Categoria::findOrFail($id);
        $categoria->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
        ]);

        return redirect('/categorias')
            ->with('success', 'Categoria atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();

        return redirect('/categorias')
            ->with('success', 'Categoria excluída com sucesso!');
    }
}
