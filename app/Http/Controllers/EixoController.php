<?php

namespace App\Http\Controllers;

use App\Models\Eixo;
use Illuminate\Http\Request;

class EixoController extends Controller{
    
    public function index() {
        
        $dados = Eixo::all();
        return view('eixos.index', compact('dados'));
    }

    public function create() {

        return view('eixos.create');
    }

   public function store(Request $request) {
        
        $regras = [
            'nome' => 'required|max:50|min:10'
        ];

        $msg = [
            "required" => "O preenchimento do campo [:attribute] é obrigatório!",
            "max" => "O campo [:attribute] possui tamanho máximo de [:max] caracteres!",
            "min" => "O campo [:attribute] possui tamanho mínimo de [:min] caracteres!"
        ];

        $request->validate($regras, $msg);

        Eixo::create([
            "nome" => $request->nome,
        ]);

        return redirect()->route('eixos.index');
    }

    public function show($id) {
    }

    public function edit($id) {

        $dados = Eixo::find($id);

        if(!isset($dados)) {return "<h1>ID: $id não encontrado!</h1>"; }

        return view('eixos.edit', compact('dados'));        
    }

    public function update(Request $request, $id) {
        
        $regras = [
            'nome' => 'required|max:50|min:10'
        ];

        $msg = [
            "required" => "O preenchimento do campo [:attribute] é obrigatório!",
            "max" => "O campo [:attribute] possui tamanho máximo de [:max] caracteres!",
            "min" => "O campo [:attribute] possui tamanho mínimo de [:min] caracteres!"
        ];

        $request->validate($regras, $msg);

        $obj = Eixo::find($id);
        
        if(!isset($obj)) {return "<h1>ID: $id não encontrado!</h1>"; }
    
        $obj->fill([
            "id" => $id,
            "nome" => $request->nome,
        ]);

        $obj->save();

        return redirect()->route('eixos.index');
    }

    public function destroy($id) {
        
        $obj = Eixo::find($id);

        if(!isset($obj)) {return "<h1>ID: $id não encontrado!</h1>"; }

        $obj->destroy();

        return redirect()->route('eixos.index');
    }
}
