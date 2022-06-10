@Extends('main')

@section('title')

@section('content')

<h2 class="text-center mt-3 cor">Seja bem vindo!</h2>

<main role="main" class="principal">
    <div class="album py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" src="../public/assets/img/riomar.webp" alt="Loja RioMar" data-holder-rendered="true">
                        <div class="card-body">
                            <h5 class="card-text text-light font-weight-bold">Loja Shopping RioMar</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('lojas') }}"><button type="button" class="btn btn-sm btn-outline-warning">Ver lojas</button></a>
                                </div>
                                <small class="text-muted"></small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" src="../public/assets/img/carrefourtorre.webp" alt="Loja Carrefour Torre" data-holder-rendered="true">
                        <div class="card-body">
                            <h5 class="card-text text-light font-weight-bold">Loja Carrefour da Torre</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('lojas') }}"><button type="button" class="btn btn-sm btn-outline-warning">Ver lojas</button></a>
                                </div>
                                <small class="text-muted"></small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" src="../public/assets/img/tacaruna.webp" alt="Loja Tacaruna" data-holder-rendered="true">
                        <div class="card-body">
                            <h5 class="card-text text-light font-weight-bold">Loja Shopping Tacaruna</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('lojas') }}"><button type="button" class="btn btn-sm btn-outline-warning">Ver lojas</button></a>
                                </div>
                                <small class="text-muted"></small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" src="../public/assets/img/espinheiro.webp" alt="loja_espinheiro" data-holder-rendered="true">
                        <div class="card-body">
                            <h5 class="card-text text-light font-weight-bold">Loja bairro Espinheiro</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('lojas') }}"><button type="button" class="btn btn-sm btn-outline-warning">Ver lojas</button></a>
                                </div>
                                <small class="text-muted"></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" src="../public/assets/img/pet1.webp" alt="Imagem pet Jasmim" data-holder-rendered="true">
                        <div class="card-body">
                            <h5 class="card-text text-light font-weight-bold">Jasmim</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('clientes') }}"><button type="button" class="btn btn-sm btn-outline-warning">Ver clientes</button></a>
                                </div>
                                <small class="text-muted"></small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" src="../public/assets/img/pet2.webp"alt="Imagem pet Mimi" data-holder-rendered="true">
                        <div class="card-body">
                            <h5 class="card-text text-light font-weight-bold">Zipi</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <a href="{{ route('clientes') }}"><button type="button" class="btn btn-sm btn-outline-warning">Ver clientes</button></a>
                                </div>
                                <small class="text-muted"></small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" src="../public/assets/img/pet3.webp"alt="Imagem pet Ramires" data-holder-rendered="true">
                        <div class="card-body">
                            <h5 class="card-text text-light font-weight-bold">Ramires</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <a href="{{ route('clientes') }}"><button type="button" class="btn btn-sm btn-outline-warning">Ver clientes</button></a>
                                </div>
                                <small class="text-muted"></small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" src="../public/assets/img/pet4.webp"alt="Imagem pet Ramires" data-holder-rendered="true">
                        <div class="card-body">
                            <h5 class="card-text text-light font-weight-bold">Mimi</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <a href="{{ route('clientes') }}"><button type="button" class="btn btn-sm btn-outline-warning">Ver clientes</button></a>
                                </div>
                                <small class="text-muted"></small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" src="../public/assets/img/salao.svg" alt="Imagem salão estética" data-holder-rendered="true">
                        <div class="card-body">
                            <h5 class="card-text text-light font-weight-bold">Salão estético</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('servicos') }}"><button type="button" class="btn btn-sm btn-outline-warning">Ver serviços</button></a>
                                </div>
                                <small class="text-muted"></small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" src="../public/assets/img/boutique.svg" alt="Imagem boutique" data-holder-rendered="true">
                        <div class="card-body">
                            <h5 class="card-text text-light font-weight-bold">Boutique</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <a href="{{ route('servicos') }}"><button type="button" class="btn btn-sm btn-outline-warning">Ver serviços</button></a>
                                </div>
                                <small class="text-muted"></small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" src="../public/assets/img/farmacia1.svg" alt="Imagem farmácia" data-holder-rendered="true">
                        <div class="card-body">
                            <h5 class="card-text text-light font-weight-bold">Farmácia</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <a href="{{ route('servicos') }}"><button type="button" class="btn btn-sm btn-outline-warning">Ver serviços</button></a>
                                </div>
                                <small class="text-muted"></small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" src="../public/assets/img/vet.svg" alt="imagem_veterinário" data-holder-rendered="true">
                        <div class="card-body">
                            <h5 class="card-text text-light font-weight-bold">Farmácia</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <a href="{{ route('servicos') }}"><button type="button" class="btn btn-sm btn-outline-warning">Ver serviços</button></a>
                                </div>
                                <small class="text-muted"></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

@endsection