<?php

namespace App\Http\Controllers;

use App\Models\{Curso,Eixo};
use Illuminate\Http\Request;

class CursoController extends Controller
{   
    public function index()
    {
         
        $dados = Curso::all();
        return view('cursos.index', compact('dados'));
    }

    public function create() {

        $eixos = Eixo::all();
        return view('cursos.create', compact('eixos'));
    }

   public function store(Request $request) {
        
        $regras = [
            'nome' => 'required|max:50|min:10',
            'sigla' => 'required|max:8|min:2',
            'tempo' => 'required|max:2|min:1',
            'eixo_id' => 'required'

        ];

        $msg = [
            "required" => "O preenchimento do campo [:attribute] é obrigatório!",
            "max" => "O campo [:attribute] possui tamanho máximo de [:max] caracteres!",
            "min" => "O campo [:attribute] possui tamanho mínimo de [:min] caracteres!"
        ];

        $request->validate($regras, $msg);

        Curso::create([
            "nome" => $request->nome,
            "sigla" => $request->sigla,
            "tempo" => $request->tempo,
            "eixo_id" => $request->eixo_id,
        ]);

        return redirect()->route('cursos.index');
    }

    public function show($id) {
    }

    public function edit($id) {

        $dados = Curso::find($id);

        if(!isset($dados)) {return "<h1>ID: $id não encontrado!</h1>"; }

        $eixos = Eixo::all();

        return view('cursos.edit', compact(['dados', 'eixos']));         
    }

    public function update(Request $request, $id) {
        
        $regras = [
            'nome' => 'required|max:50|min:10',
            'sigla' => 'required|max:8|min:2',
            'tempo' => 'required|max:2|min:1',
            'eixo_id' => 'required'

        ];

        $msg = [
            "required" => "O preenchimento do campo [:attribute] é obrigatório!",
            "max" => "O campo [:attribute] possui tamanho máximo de [:max] caracteres!",
            "min" => "O campo [:attribute] possui tamanho mínimo de [:min] caracteres!"
        ];

        $request->validate($regras, $msg);

        $obj = Curso::find($id);
        
        if(!isset($obj)) {return "<h1>ID: $id não encontrado!</h1>"; }
    
        $obj->fill([
            "id" => $id,
            "nome" => $request->nome,
            "sigla" => $request->sigla,
            "tempo" => $request->tempo,
            "eixo_id" => $request->eixo_id,
        ]);

        $obj->save();

        return redirect()->route('cursos.index');
    }

    public function destroy($id) {
        
        $obj = Curso::find($id);

        if(!isset($obj)) {return "<h1>ID: $id não encontrado!</h1>"; }

        $obj->destroy();

        return redirect()->route('cursos.index');
    }
}
