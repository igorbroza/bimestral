<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ['titulo' => "Cursos", 'rota' => "cursos.create"])
<!-- Preenche o conteúdo da seção "titulo" -->
@section('titulo') Cursos @endsection
<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')

    <div class="row">
        <div class="col">
            
            <!-- Utiliza o componente "datalist" criado -->
            <x-curDatalist 
                :header="['ID', 'NOME', 'SIGLA', 'TEMPO', 'ACOES']" 
                :data="$dados"
                :hide="[true, false, false, false, true]" 
            />

        </div>
    </div>
@endsection