@extends('navbar')
    @section('conteudo')
<div>
    <div class="container">
        <div class="input-group input-group-lg m-4">
            <span class="input-group-text" id="inputGroup-sizing-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
            </span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Prucure por um titulo...">
        </div>
    </div>
    <div class="row m-1">
        <h5>Você procurou por: <span class="badge bg-secondary"> Artigo de Teste</span></h5>
    </div>
    <div class="container-fluid">

        
        <div class="container-fluid text-center">
        <table class="table table-responsive">
    <thead class="table-dark">
        <tr>
        <th scope="col-1">id</th>
        <th scope="col-5">Titulo</th>
        <th scope="col-5">Autor</th>
        <th scope="col-1">Data de Criação</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        </tr>
    </tbody>
    </table>
        </div>
</div>
</div>
@endsection
