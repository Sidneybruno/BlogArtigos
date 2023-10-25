<!DOCTYPE html>
<html>
<head>

<body>
    <header>
    <html lang="pt-br">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Minha conta</title>
            <!-- Boostrap 5 -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
            
            <!--jquery confir alert -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

            <!-- jquery -->
            <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <style>
        
        @media (max-width: 1336px) {
            .botoesLogin {
                margin-left: 50rem;
                margin-top: 0.1rem;
            }
            .botaoCriarConta{
                margin-top: 0.1rem;
            }
        }
        @media (min-width: 1801px) {
            .font-menu{
                font-size: 21px;
            }
            .botoesLogin {
                font-size: 21px;
                margin-left: 117rem;
                margin-top: -50px;
            }
            .botaoCriarConta{
                font-size: 21px;
                margin-top: -50px;
                margin-left: 125rem;
            }
            
        }
    </style>
    </header>
    
    <main>
    <div style="zoom: 90%;">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            
                <div class="row align-items-center">
                    <div class="container col-md-12">
                    <ul class="nav font-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="/img/download.png" alt="" width="30" height="24" class="d-inline-block align-text">
                                Tblog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/procurar">Procurar postagens</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/criar">criar postagem</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile.edit') }}">{{ __('Profile') }}</a>
                        </li>
                        <li  class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Logout') }}
                                </button>
                            </form>
                        </li>
                    </ul> 
                </div>
                </div>
            
        </div>  
    </nav>
        @yield('conteudo') 
    </main>
    
    <footer>
        
    </footer>
</div>
</html>
