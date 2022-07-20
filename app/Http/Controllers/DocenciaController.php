<?php

namespace App\Http\Controllers;

use App\Models\{Curso,Docencia,Disciplina,Professore};
use Illuminate\Http\Request;

class DocenciaController extends Controller
{

    public function index()
    {

        $cursos  = Curso::with(['eixo']);

        $disciplinas = Disciplina::with(['curso'])
            ->orderBy('curso_id')->orderBy('id')->get();

        $professores = Professore::orderBy('id')->get();

        return view('docencias.index', compact(['professores', 'disciplinas', 'cursos']));
    }

    public function create(Request $request)
    {
    }

    public function store(Request $request)
    {

        $rules = [
            'professore_id' => 'required',
        ];
        $msgs = [
            "required" => "O preenchimento do campo [:attribute] é obrigatório!",
            "max" => "O campo [:attribute] possui tamanho máximo de [:max] caracteres!",
            "min" => "O campo [:attribute] possui tamanho mínimo de [:min] caracteres!",
        ];

        $request->validate($rules, $msgs);

        $ids_prof = $request->professore_id;
        $disciplina = $request->disciplina;

        $doc = new Docencia();

        
            $doc->professore_id = $ids_profs;
            $doc->disciplina_id = $disciplina;
            $doc->save();
        

        return redirect()->route('docencias.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }
    
    public function destroy($id)
    {
        //
    }
}
