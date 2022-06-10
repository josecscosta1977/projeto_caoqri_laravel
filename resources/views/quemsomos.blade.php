@Extends('main')

@section('title')

@section('content')

<h2 class="text-center mt-3 cor">Quem somos</h2>

<main class="principal container">
    
    <div id="mensagem" class="text-center mt-4 pt-4">
		<img id="logo" src="../public/assets/img/logo-CaoQri1.svg" alt="Logomarca" width="150px">
		<div id="text-div" class="p-3 mb-3" style="margin: auto;">
			<p class="text-light text-justify">Da paixão por animais, nasce em 2000 a CÃO Q RI, com o intuito de oferecer serviços e produtos que proporcionassem o bem-estar tanto dos clientes, como dos pets.
			Investindo na altíssima qualidade dos produtos oferecidos, 
		    na excelência dos serviços prestados e adicionando um atendimento diferenciado, 
			a CÃO Q RI hoje está presente em 12 operações no Nordeste, e em processo de expansão. 
			Reconhecida pelo público como referência no segmento, na marca de seus 15 anos a 
			CÃO Q RI se moderniza e busca inovar com uma variedade de mais de 5 mil itens nas 
			suas lojas.</p>
		</div>
	</div>

    <div class="row">
        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="../public/assets/img/foto1.webp" alt="imagem_serviços_veterinário" data-holder-rendered="true">
            </div>
        </div>

        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="../public/assets/img/foto2.webp" alt="imagem_serviços_veterinário" data-holder-rendered="true">
            </div>
        </div>

        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="../public/assets/img/foto3.webp" alt="imagem_serviços_boutique" data-holder-rendered="true">
            </div>
        </div>

        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="../public/assets/img/foto4.webp" alt="imagem_serviços_veterinário" data-holder-rendered="true">
            </div>
        </div>
    </div>

</main>

@endsection