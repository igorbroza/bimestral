<?php

namespace App\Http\Controllers;

use App\Models\{Disciplina,Curso};
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function index()
    {
         
        $dados = Disciplina::all();
        return view('disciplinas.index', compact('dados'));
    }

    public function create() {

        $cursos = Curso::all();
        return view('disciplinas.create', compact('cursos'));
    }

   public function store(Request $request) {
        
        $regras = [
            'nome' => 'required|max:100|min:10',
            'curso_id' => 'required',
            'carga' => 'required|max:10|min:1',
        ];

        $msg = [
            "required" => "O preenchimento do campo [:attribute] é obrigatório!",
            "max" => "O campo [:attribute] possui tamanho máximo de [:max] caracteres!",
            "min" => "O campo [:attribute] possui tamanho mínimo de [:min] caracteres!"
        ];

        $request->validate($regras, $msg);

        Disciplina::create([
            "nome" => $request->nome,
            "curso_id" => $request->curso_id,
            "carga" => $request->carga,
        ]);

        return redirect()->route('disciplinas.index');
    }

    public function show($id){
    }

    public function edit($id) {

        $dados = Disciplina::find($id);

        if(!isset($dados)) {return "<h1>ID: $id não encontrado!</h1>"; }

        $cursos = Curso::all();

        return view('disciplinas.edit', compact(['dados', 'cursos']));         
    }

    public function update(Request $request, $id) {
        
        $regras = [
            'nome' => 'required|max:100|min:10',
            'curso_id' => 'required',
            'carga' => 'required|max:10|min:1',
        ];

        $msg = [
            "required" => "O preenchimento do campo [:attribute] é obrigatório!",
            "max" => "O campo [:attribute] possui tamanho máximo de [:max] caracteres!",
            "min" => "O campo [:attribute] possui tamanho mínimo de [:min] caracteres!"
        ];

        $request->validate($regras, $msg);

        $obj = Disciplina::find($id);
        
        if(!isset($obj)) {return "<h1>ID: $id não encontrado!</h1>"; }
    
        $obj->fill([
            "id" => $id,
            "nome" => $request->nome,
            "curso_id" => $request->curso_id,
            "carga" => $request->carga,
        ]);

        $obj->save();

        return redirect()->route('disciplinas.index');
    }

    public function destroy($id) {
        
        $obj = Disciplina::find($id);

        if(!isset($obj)) {return "<h1>ID: $id não encontrado!</h1>"; }

        $obj->destroy();

        return redirect()->route('disciplinas.index');
    }
}
