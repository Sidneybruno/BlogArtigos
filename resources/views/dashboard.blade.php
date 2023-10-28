@extends('navbarMinhaConta')
    @section('conteudo')

    <script>
        $(document).ready(function () {
            $(".remover").click(function (e) { 
                e.preventDefault();
                let id = (this).val(); 
                alert(id);
                $.ajax({
                    type: "Delete",
                    url: "/remover/"+ id,
                    dataType: "JSON",
                    success: function (response) {
                        $.alert({
                            columnClass: 'col-md-4 col-md-offset-4',
                            type: 'green',
                            theme: 'modern',
                            title:  `Postagem deletada`,
                            content: ` `,
                        });
                    }
                });
            });
        });
    </script>
        <div class="container m-4">
            <h3>Bem Vindo {{ Auth::user()->name }}</h3>
        </div>
        <div class="container col-lg-12 m-4">
            <h5>Veja e edite seu perfil. <br> Crie e edite as suas postagens, tudo em só um lugar.</h5>
        </div>
        <hr style="margin-right: 1rem; margin-left: 2rem;">
        <div class="row">
            <div class="col-lg-5 m-4">
                <div class="container border shadow py-2 rounded">
                    <h4> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-globe2" viewBox="0 0 16 16">
                            <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
                        </svg>
                        Tire as ideias da cabeça, mostre para o mundo
                    </h4>
                        <p>Crie uma postagem agora mesmo, rapido e facil</p>
                        <div class="d-grid gap-2">
                            <a class="btn btn-dark" href="/criar" type="button">Nova postagem</a>
                        </div>
                </div>
            </div>
            <div class="col-lg-5 m-4">
                <div class="container border shadow py-2 rounded">
                    <h4> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
                        <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z"/>
                        <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z"/>
                    </svg>
                        Edite as configurações do seu perfil
                    </h4>
                    <p>Nome de usuario, nova senha, email, tudo que precise sobre</p>
                    <div class="d-grid gap-2">
                        <a class="btn btn-dark" type="button" href="{{ route('profile.edit') }}">{{ __('Meu perfil') }}</a>
                    </div>
                </div>
            </div>
        </div>
        <h5 class="m-4">Minhas postagens</h5>
        <div class="container-fluid text-center">
            <table class="table table-responsive">
                <thead class="table bg-dark text-white">
                    <tr>
                        <th scope="col-1">id</th>
                        <th scope="col-5">Titulo</th>
                        <th scope="col-4">Autor</th>
                        <th scope="col-1">Data de Criação</th>
                        <th scope="col-1">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @if($postagens)
                        @foreach ($postagens as $postagem)
                            <tr>
                                <th scope="row">{{$postagem->id}}</th>
                                <td class="text-primary">{{$postagem->titulo}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$postagem->created_at}}</td>
                                <td><a class="btn btn-sm btn-danger remover" value="{{$postagem->id}}" type="button">Remover</a>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    
        
        
    @endsection

