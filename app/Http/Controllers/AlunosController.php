<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use App\Models\Livros;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function create()
    {
        return view('create');
    }
    public function store(Request $dadosAlunos)
    {   
     
        $create = Alunos::create([
            'nome' => $dadosAlunos->nome,
            'dataNasc' => $dadosAlunos->data
        ]);
        $create->livro()->create([
            'titulo' => $dadosAlunos->titulo,
            'ano' => $dadosAlunos->ano,
        ]);



        return to_route('alunos.index');
    }
    public function index()
    {
        $dadosAlunosList = Alunos::get();
        return view('index', compact('dadosAlunosList'));
    }
    public function edit($id)
    {
        $dadoAluno = Alunos::find($id);

        return view('edit', compact('dadoAluno'));
    }
    public function update(Request $request, $id)
    {
        $dadosUp = Alunos::find($id);
        $dadosUp->update([
            'nome' => $request->nome,
            'dataNasc' => $request->data
        ]);
        return to_route('alunos.index');
    }
    public function destroy(Request $request, $id)
    {
        $delete = Alunos::find($id);
        $delete->delete($request->all());
        return to_route('alunos.index');
    }
}
