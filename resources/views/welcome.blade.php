<!DOCTYPE html>
 @extends('navbar')
    @section('conteudo')
        <style>
        
        @media (max-width: 1366px) {
            .card-large-screen{
                width: 16rem;
                margin-left:1rem;
            }
            .container-card-destaque{
                margin-left: 10rem;
            }
            .cardArtigo{
                max-width: 940px;
            }
        }
        @media (min-width: 1801px) {
            .card-large-screen{
                width: 30rem;
                margin-left:3rem;
            }
            .cardArtigo{
                max-width: 1900px;
            }
        }
        </style>

        <div class="container">
            <img alt="Lista Instaset" class="text-center mx-auto my-4" height="138px; " id="Header1_headerimg" src="http://4.bp.blogspot.com/-_cWo_SzcQjI/WCdQlU4p6LI/AAAAAAAABdQ/aP1-vEajWHclxLkiqtweFd6ynh-7hJlMACK4B/s1600/instaset.png" style="display: block" width="372px;">
        </div>
        <div class="container-fluid container-card-destaque">
            <div class="row">
                <div class="card card-large-screen" >
                    <img src="https://1.bp.blogspot.com/-wnV4ZvWjJaQ/VupiUH0Il2I/AAAAAAAADYs/rwc4kAnERYgXU8EXqsQGrH5-_o8a3_28w/s1600/business-839788_960_720.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text">
                        <a href="#">
                            <h6>Titulo da noticia</h6>
                        </a>
                        <p>Noticia de teste, apenas para fins ilustrativos</p>
                    </p>
                    </div>
                </div>
                <div class="card card-large-screen" >
                    <img src="https://1.bp.blogspot.com/-wnV4ZvWjJaQ/VupiUH0Il2I/AAAAAAAADYs/rwc4kAnERYgXU8EXqsQGrH5-_o8a3_28w/s1600/business-839788_960_720.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text">
                        <a href="#">
                            <h6>Titulo da noticia</h6>
                        </a>
                        <p>Noticia de teste, apenas para fins ilustrativos</p>
                    </p>
                    </div>
                </div>
                <div class="card card-large-screen" >
                    <img src="https://1.bp.blogspot.com/-wnV4ZvWjJaQ/VupiUH0Il2I/AAAAAAAADYs/rwc4kAnERYgXU8EXqsQGrH5-_o8a3_28w/s1600/business-839788_960_720.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text">
                        <a href="#">
                            <h6>Titulo da noticia</h6>
                        </a>
                        <p>Noticia de teste, apenas para fins ilustrativos</p>
                    </p>
                    </div>
                </div>
                <div class="card card-large-screen" >
                    <img src="https://1.bp.blogspot.com/-wnV4ZvWjJaQ/VupiUH0Il2I/AAAAAAAADYs/rwc4kAnERYgXU8EXqsQGrH5-_o8a3_28w/s1600/business-839788_960_720.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text">
                        <a href="#">
                            <h6>Titulo da noticia</h6>
                        </a>
                        <p>Noticia de teste, apenas para fins ilustrativos</p>
                    </p>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="container-fluid">
            <div class="row ">
                <div class="col mt-4" style="max-width: 1900px; margin-left:0.5rem;">
                    <div class="row bg-dark border rounded">
                        <span class="text-white">Novos assuntos</span>
                    </div>
                    <div class="row m-4">
                        <div class="card mb-3 card-artigo">
                            <div class="row g-0">
                                <div class="col-md-4">
                                <img src="https://picsum.photos/400/300" class="img-fluid rounded-start m-1" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Postagem 1</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 card-artigo">
                            <div class="row g-0">
                                <div class="col-md-4">
                                <img src="https://picsum.photos/400/300" class="img-fluid rounded-start m-1" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Postagem 1</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 card-artigo">
                            <div class="row g-0">
                                <div class="col-md-4">
                                <img src="https://picsum.photos/400/300" class="img-fluid rounded-start m-1" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Postagem 1</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 card-artigo">
                            <div class="row g-0">
                                <div class="col-md-4">
                                <img src="https://picsum.photos/400/300" class="img-fluid rounded-start m-1" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Postagem 1</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 card-artigo">
                            <div class="row g-0">
                                <div class="col-md-4">
                                <img src="https://picsum.photos/400/300" class="img-fluid rounded-start m-1" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Postagem 1</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 " style="max-width: 300px; margin-left:1%;">
                    <div class="row">
                        <span class="text-white ml-2 bg-dark mt-4">Autores</span>
                    </div>
                    <div class="row">
                        
                    </div>
                    
                </div>
            </div>
        </div>
    @endsection

