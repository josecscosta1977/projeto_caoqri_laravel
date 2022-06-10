@Extends('main')

@section('title')

@section('content')

<h2 class="text-center mt-3 cor" cor>Contato</h2>

<main class="principal container mt-4">
    
    <div class="row">
        <div class="col-md-6 centered">
            <form class="text-light" action="{{ route('inserir') }}" style="border: 1px solid white;padding:30px;border-radius: 5px;" method="post">
                @csrf

                <div class="form-group">
                    <label for="">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>

                <div class="form-group">
                    <label for="">Cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade">
                </div>

                <div class="form-group">
                    <label for="">Estado</label>
                    <input type="text" class="form-control" id="estado" name="estado">
                </div>

                <div class="form-group">
                    <label for="">Telefone</label>
                    <input type="numeric" class="form-control" id="telefone" name="telefone">
                </div>

                <div class="form-group">
                    <label for="">Mensagem</label>
                    <textarea rows="4" cols="50" id="mensagem" name="mensagem" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-success text-light">Enviar</button>
            </form> 
        </div>
    </div>
    
    <div class="row mt-3">
        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="../public/assets/img/veterinario-quemsomos.webp" alt="imagem_serviços_veterinário" data-holder-rendered="true">
            </div>
        </div>

        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="../public/assets/img/farmacia-quemsomos.webp" alt="imagem_serviços_veterinário" data-holder-rendered="true">
            </div>
        </div>

        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="../public/assets/img/boutique-quemsomos.webp" alt="imagem_serviços_boutique" data-holder-rendered="true">
            </div>
        </div>

        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="../public/assets/img/foto1.webp" alt="imagem_serviços_veterinário" data-holder-rendered="true">
            </div>
        </div>
    </div>

</main>

@endsection