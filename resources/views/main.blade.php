<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="author" content="José Carlos">
        <meta name="keywords" content="Pet shop, CãoQRi, Veterinário, Salão Estético">
        <meta name="description" content="Projeto integrador - Faculdade Senac Pernambuco">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- CSS -->
        <link rel="stylesheet" href="../public/assets/css/style.css">
        <!-- <link rel="shortcut icon" href="{{ asset('img/logo-CaoQri3.ico') }}"> -->
        <link rel="shortcut icon" href="../public/assets/img/logo-CaoQri3.ico" />
        <title>CãoQri</title>
        @yield('title')

    </head>
    <body class="color">

        <header>
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(0, 0, 0, 0.2);">
                <a href="{{ route('home') }}"><img src="../public/assets/img/logo-CaoQri1.svg" alt="Logomarca" width="150px" rel="noopener"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end border-light" id="navbarNavAltMarkup">
                    <div class="navbar-nav" id="margem">    
                        <a class="nav-item nav-link text-light h5" href="{{ route('home') }}" rel="noopener">Home</a>
                        <a class="nav-item nav-link text-light h5" href="{{ route('servicos') }}" rel="noopener">Serviços</a>
                        <a class="nav-item nav-link text-light h5" href="{{ route('clientes') }}" rel="noopener">Clientes</a>
                        <a class="nav-item nav-link text-light h5" href="{{ route('lojas') }}" rel="noopener">Lojas</a>
                        <a class="nav-item nav-link text-light h5" href="{{ route('contato') }}" rel="noopener">Contato</a>
                        <a class="nav-item nav-link text-light h5" href="{{ route('quemsomos') }}" rel="noopener">Quem somos</a>
                    </div>
                </div>
            </nav>
        </header>

        <img id="banner" src="../public/assets/img/banner1.png" alt="Banner principal" width="100%">

        @yield('content')

        <footer class="text-center text-lg-start pt-4" style="background-color: rgba(0, 0, 0, 0.2);">
            <div class="container p-4">
                <div class="row">
                    <div class="col-lg-4 col-md-4 mb-4 mb-md-0">
                        <h5 class="text-light">Redes Sociais</h5>
                        <ul class="list-unstyled">
                            <li><a href="https://www.facebook.com/caoqrioficial" class="text-dark" target="_blank"><img src="../public/assets/img/facebook.png" width="50px" alt="logo_facebook"></a></li>
                            <li><a href="https://www.instagram.com/caoqrioficial/" class="text-dark" target="_blank"><img src="../public/assets/img/instagram.png" width="45px" alt="logo_instagram"></a></li>    
                        </ul>
                    </div>
                
                    <div class="col-lg-4 col-md-4 mb-4 mb-md-0">
                        <h5 class="text-light">Parceiros</h5>
                        <ul class="list-unstyled">
                            <li><a href="#!" class="text-dark"><img src="../public/assets/img/parceiro2.png" width="45px" alt="logo_parceiro2"></a></li><p></p>
                            <li><a href="#!" class="text-dark"><img src="../public/assets/img/parceiro3.png" width="45px" alt="logo_parceiro3"></a></li><p></p>    
                            <li><a href="#!" class="text-dark"><img src="../public/assets/img/parceiro4.png" width="45px" alt="logo_parceiro4"></a></li>
                        </ul>
                    </div>
            
                    <div class="col-lg-4 col-md-4 mb-4 mb-md-0">
                        <h5 class="mb-0 text-light">Endereço Matriz</h5>
                        <ul class="list-unstyled">
                            <li><p></p></li>
                            <li>
                                <p class="text-light">
                                    Rua do Espinheiro, 000 Espinheiro<br> 
                                    CEP 00000-000 <br>Tel: 555-5555 
                                </p>
                            </li>    
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <p class="text-light">© 2020 Copyright:</p>
            </div>

        </footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>