<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Define uma seção "titulo" -->
        <title>Escola - @yield('titulo')</title>
        
        <!-- Bootstrap 5 / CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>
        <nav class="navbar sticky-top navbar-expand-md navbar-light bg-secondary">
            <div class="container-fluid">
                <a href="{{route('index')}}" class="navbar-brand ms-sm-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                 </svg>
                        <span class="ms-3 fs-5">Escola</span>
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#itens">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-menu-button-wide" viewBox="0 0 16 16">
                        <path d="M0 1.5A1.5 1.5 0 0 1 1.5 0h13A1.5 1.5 0 0 1 16 1.5v2A1.5 1.5 0 0 1 14.5 5h-13A1.5 1.5 0 0 1 0 3.5v-2zM1.5 1a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-13z"/>
                        <path d="M2 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm10.823.323-.396-.396A.25.25 0 0 1 12.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2H1zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2h14zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </button>
                <div class="collapse navbar-collapse" id="itens">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown ps-2">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
                                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                                </svg>
                                <span class="ps-1 text-white">Educacional</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('eixos.index')}}" class="dropdown-item">Eixos</a></li>
                                <li><a href="{{route('disciplinas.index')}}" class="dropdown-item">Disciplinas</a></li>
                                <li><a href="{{route('cursos.index')}}" class="dropdown-item">Curso</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown ps-2">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-easel" viewBox="0 0 16 16">
                                <path d="M8 0a.5.5 0 0 1 .473.337L9.046 2H14a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1.85l1.323 3.837a.5.5 0 1 1-.946.326L11.092 11H8.5v3a.5.5 0 0 1-1 0v-3H4.908l-1.435 4.163a.5.5 0 1 1-.946-.326L3.85 11H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4.954L7.527.337A.5.5 0 0 1 8 0zM2 3v7h12V3H2z"/>
                            </svg>
                                <span class="ps-1 text-white">Professores</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('docencias.index')}}" class="dropdown-item">Docencia</a></li>
                                <li><a href="{{route('professores.index')}}" class="dropdown-item">Professores</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container py-4">
            <div class="row">
                <div class="col">
                    <h3 class="display-7 text-secondary d-none d-md-block"><b>{{ $titulo }}</b></h3>
                </div>
                @if(isset($rota))
                    <div class="col d-flex justify-content-end">
                        <a href= "{{ route($rota) }}" class="btn btn-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                            </svg>
                        </a>
                    </div>
                @endif
            </div>
            <hr>
            @yield('conteudo')
        </div>
        <nav class="navbar fixed-bottom navbar-dark bg-secondary">
            <div class="container-fluid">
                <span class="text-white fw-light">&copy; Igor Broza Santos</span>
            </div>
        </nav>
    </body>

    <div class="modal fade" tabindex="-1" id="infoModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary">Mais Informações</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="infoModal" onclick="closeInfoModal()" aria-label="Close"></button>
                </div>
                <div class="modal-body text-secondary">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-block align-content-center" onclick="closeInfoModal()">
                        OK
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" tabindex="-1" id="removeModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-danger">Operação de Remoção</h5>
              <button type="button" class="btn-close" data-bs-dismiss="removeModal" onclick="closeRemoveModal()" aria-label="Close"></button>
            </div>
            <input type="hidden" id="id_remove">
            <div class="modal-body text-secondary">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-block align-content-center" onclick="closeRemoveModal()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                        <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
                    </svg>
                    &nbsp; Não
                </button>
              <button type="button" class="btn btn-danger" onclick="remove()">
                    Sim &nbsp;
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>
              </button>
            </div>
          </div>
        </div>
    </div>

    <!-- Bootstrap 5 / JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- JQuery / JS -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

    <script type="text/javascript">

        function showInfoModal() {
            $('#infoModal').modal().find('.modal-body').html("");
            for(let a=0; a< arguments.length; a++) {
                $('#infoModal').modal().find('.modal-body').append("<b>" + arguments[a] + "</b><br>");
            }
            $("#infoModal").modal('show');
        }

        function closeInfoModal() {
            $("#infoModal").modal('hide');
        }

        function showRemoveModal(id, nome) {
            $('#id_remove').val(id);
            $('#removeModal').modal().find('.modal-body').html("");
            $('#removeModal').modal().find('.modal-body').append("Deseja remover o registro <b class='text-danger'>'"+nome+"'</b> ?");
            $("#removeModal").modal('show');
        }

        function closeRemoveModal() {
            $("#removeModal").modal('hide');
        }

        function remove() {
            let id = $('#id_remove').val();
            let form = "form_" + $('#id_remove').val();
            document.getElementById(form).submit();
            $("#removeModal").modal('hide')
        }
    </script>

    @yield('script')
</html>