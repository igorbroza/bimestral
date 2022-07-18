<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ['titulo' => "Eixos", 'rota' => "eixos.create"])
<!-- Preenche o conteúdo da seção "titulo" -->
@section('titulo') Eixos @endsection
<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')

    <div class="row">
        <div class="col">
            
            <!-- Utiliza o componente "datalist" criado -->
            <x-eixDatalist 
                :header="['ID', 'NOME', 'ACOES']" 
                :data="$dados"
                :hide="[true, false, true, false]" 
            />

        </div>
    </div>
@endsection