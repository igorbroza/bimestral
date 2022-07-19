<?php

namespace App\Http\Controllers;

use App\Models\{Professore,Eixo};
use Illuminate\Http\Request;

class ProfessoreController extends Controller
{
    public function index()
    {
         
        $dados = Professore::all();
        return view('professores.index', compact('dados'));
    }

    public function create() {

        $eixos = Eixo::all();
        return view('professores.create', compact('eixos'));
    }

   public function store(Request $request) {
        
        $regras = [
            'nome' => 'required|max:100|min:10',
            'email' => 'required|max:250|min:15|unique:professores',
            'siape' => 'required|max:10|min:8|unique:professores',
            'radio' => 'required',
            'eixo_id' => 'required'
        ];

        $msg = [
            "required" => "O preenchimento do campo [:attribute] é obrigatório!",
            "max" => "O campo [:attribute] possui tamanho máximo de [:max] caracteres!",
            "min" => "O campo [:attribute] possui tamanho mínimo de [:min] caracteres!",
            "unique" => "Já existe um endereço cadastrado com esse [:attribute]!"
        ];

        $request->validate($regras, $msg);
    
        Professore::create([
            "nome" => $request->nome,
            "sigla" => $request->sigla,
            "tempo" => $request->tempo,
            "ativo" => $request->radio,
            "eixo_id" => $request->eixo_id,
        ]);

        return redirect()->route('professores.index');
    }

    public function show($id) {

        return view('professores.show', compact('dados'));
    }

    public function edit($id) {

        $dados = Professore::find($id);

        if(!isset($dados)) {return "<h1>ID: $id não encontrado!</h1>"; }

        $eixos = Eixo::all();

        return view('professores.edit', compact(['dados', 'eixos']));         
    }

    public function update(Request $request, $id) {
        
        $regras = [
            'nome' => 'required|max:100|min:10',
            'email' => 'required|max:250|min:15|unique:professores',
            'siape' => 'required|max:2|min:1|unique:professores',
            'eixo_id' => 'required'
        ];

        $msg = [
            "required" => "O preenchimento do campo [:attribute] é obrigatório!",
            "max" => "O campo [:attribute] possui tamanho máximo de [:max] caracteres!",
            "min" => "O campo [:attribute] possui tamanho mínimo de [:min] caracteres!",
            "unique" => "Já existe um endereço cadastrado com esse [:attribute]!"
        ];

        $request->validate($regras, $msg);

        $obj = Professore::find($id);
        
        if(!isset($obj)) {return "<h1>ID: $id não encontrado!</h1>"; }
    
        $obj->fill([
            "id" => $id,
            "nome" => $request->nome,
            "sigla" => $request->sigla,
            "tempo" => $request->tempo,
            "ativo" => $request->radio,
            "eixo_id" => $request->eixo_id,
        ]);

        $obj->save();

        return redirect()->route('professores.index');
    }

    public function destroy($id) {
        
        $obj = Professore::find($id);

        if(!isset($obj)) {return "<h1>ID: $id não encontrado!</h1>"; }

        $obj->destroy();

        return redirect()->route('professores.index');
    }
}
