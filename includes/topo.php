<!-- Cookies -->
<div class="alert text-center cookiealert" role="alert">
    <b>Você gosta de cookies?</b> &#x1F36A; Usamos cookies para garantir que você tenha a melhor experiência em nosso site. <a class="fonte" href="https://deixacommarta.com.br/privacidade.php" target="_blank">Saber mais</a>

    <button type="button" class="fonte-bg btn btn-sm acceptcookies">
        Eu aceito
    </button>
</div>

<!-- COOKIES Style e JS Link -->
<script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">

<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top">
  <div class="container-fluid">
    <a class="py-2" href="#" aria-label="Product">
      <img src="<?php echo $urlBase.'imagens/logo.webp'; ?>" width="150" alt="Logo">
    </a>
    <button class="m-2 btn text-light shadow-none hover-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bi bi-list text-light"></i>MENU</button>
  </div>
</nav>

<!-- Topo -->
<main class="background">
    
<!-- Menu Lateral Direito -->
<div class="bg-primaria offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <img id="offcanvasRightLabel" src="<?php echo $urlBase.'imagens/logo.webp'; ?>" width="150" alt="Logo">
    <button type="button" class="btn shadow-none hover-btn" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg text-light fs-5"></i></button>
  </div>
  <div class="offcanvas-body">
      <a class="btn cor-fonte shadow-none hover-btn" href="#home" role="button">HOME</a><br>
      <a class="btn cor-fonte shadow-none hover-btn" href="#vantagens" role="button">VANTAGENS</a><br>
      <a class="btn cor-fonte shadow-none hover-btn" href="#carouselExampleIndicators" role="button">GALERIA</a><br>
      <a class="btn cor-fonte shadow-none hover-btn" href="#diferenciais" role="button">DIFERENCIAIS</a><br>
      <a class="btn cor-fonte shadow-none hover-btn" href="#localizacao" role="button">LOCALIZAÇÃO</a><br>
      <a class="btn cor-fonte shadow-none hover-btn" href="#depoimentos" role="button">DEPOIMENTOS</a><br>
      <a class="btn cor-fonte shadow-none hover-btn" href="#documentos" role="button">DOCUMENTOS</a><br>
      <a class="btn cor-fonte shadow-none hover-btn" target="_blank" href="https://mottorecife.com/institucional" role="button">INSTITUCIONAL <i class="bi bi-arrow-right-short"></i></a>
  </div>
</div>

<!-- Texto Inicial -->
<div id="home" class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="text-center text-lg-center">
        <h1 class="display-4 fw-bold lh-1 mb-3 text-light mt-5 color-0">SEJA SÓCIO INVESTIDOR DO PRIMEIRO HOTEL HILTON DO NORDESTE.</h1>
      </div>
      </div>
      
      
<!-- Form -->
      <div class="d-flex flex-sm-row flex-column align-items-center justify-content-around form-p">
          <div class="m-5">
            <h3 class="color-1 text-left cor-1 fw-bold">INVISTA EM UM EMPREENDIMENTO<br> DA MARCA HOTELEIRA MAIS VALIOSA DO MUNDO.</h3>
            <h4 class="color-2 text-left fs-6">Cadastre-se e garanta vantagens exclusivas.</h4>
          </div>
        <div>
        <form method="post" action="#" id="box-form-cont" name="formContato" class="p-4 p-md-5">
        <input type="hidden" name="url_origem" value="<?php echo $urlSite; ?>" />
				<input type="hidden" name="id_empresa" value="<?php echo $idEmpresaDestino; ?>" />
				<input type="hidden" name="id_empreendimento" value="<?php echo $codigoImovel; ?>" />
				<input type="hidden" name="tipo_origem" value="3" />
				<input type="hidden" name="id_outra_origem" value="5" />
				<!--Internet-->
				<input type="hidden" name="id_detalhe_outra_origem" value="<?php echo $idOrigem; ?>" />
				<!--SITE DA EMPRESA-->
				<input type="hidden" name="tipo_de_interesse" value="0" />
				<input type="hidden" name="idAcao" value="<?php echo $idAcao; ?>" />
				<input type="hidden" name="mensagem" id="mensagem" value="Quero ter mais informações." />

        <div class="form-floating mb-3">
            <input type="text" name="nome_contato" id="contatoNome" required class="bg-primaria form-control shadow-none" <?php if(isset($_COOKIE['nomeContato'])) { ?>value="<?php echo $_COOKIE['nomeContato']; ?>"<?php } ?> style="color: white;" placeholder="Nome">
            <label class="cor-fonte" for="name">Nome</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="email" id="contatoEmail" required class="bg-primaria form-control shadow-none" <?php if(isset($_COOKIE['emailContato'])) { ?>value="<?php echo $_COOKIE['emailContato']; ?>"<?php } ?> pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" style="color: white;" placeholder="nome@exemplo.com">
            <label class="cor-fonte" for="email">E-mail</label>
          </div>
          <div class="form-floating mb-3">
            <input type="tel" name="telefone" id="contatoTelefone" required class="bg-primaria telefone form-control shadow-none" <?php if(isset($_COOKIE['telefoneContato'])) { ?>value="<?php echo $_COOKIE['telefoneContato']; ?>"<?php } ?> style="color: white;" placeholder="(00)0000-0000">
            <label class="cor-fonte" for="fone">Telefone</label>
          </div>
          <button class="color-3 w-100 btn fw-bold shadow-none hover-btn" type="submit" name="submit">QUERO MAIS INFORMAÇÕES</button>
        </form>
      </div>
    </div>
  </div>
  
  
<!-- Vantagens -->
<div id="vantagens" class="container col-xl-10 col-xxl-8 px-4 py-5 diferenciais">
    <div class="row align-items-center py-5">
    <h2 class="mb-3 cor-primaria">CONHEÇA AS VANTAGENS DE SER SÓCIO<br> DO 1º HOTEL HILTON DO NORDESTE</h2>
    <p class="cor-primaria">
✓ Investimento na <b>marca hoteleira mais valiosa do mundo.</b><br>
✓ Negócio estruturado, com <b>várias fontes de receita. (hospedagem, serviços do pub e do café).</b><br>
✓ Apartamento do hotel escriturado <b>em seu nome.</b><br>
✓ Apartamento e áreas comuns entregues <b>mobiliados e equipados.</b><br>
✓ Taxa de adesão, capital de giro inicial e capital para cobrir os custos pré-operacionais <b>já inclusos no valor do investimento.</b><br>
✓ <b>Gestão profissional do investimento.</b><br>
✓ <b>Participação no resultado geral do hotel todo mês</b>, mesmo se a sua unidade não for utilizada no período.<br>
✓ A operação contará com um <b>fundo destinado à manutenção e atualizações</b> constantes.<br>
✓ Investimento em regime de condomínio, com <b> hotel de padrão internacional a preço de custo.</b></p>
    </div>
</div>

  <!-- Galeria -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Slide 10"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="10" aria-label="Slide 11"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="11" aria-label="Slide 12"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="12" aria-label="Slide 13"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="13" aria-label="Slide 14"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="14" aria-label="Slide 15"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="15" aria-label="Slide 16"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="16" aria-label="Slide 17"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="17" aria-label="Slide 18"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="18" aria-label="Slide 19"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="19" aria-label="Slide 20"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagens/fotos/01.webp" class="lazyload d-block w-100" alt="foto">
    </div>
    <div class="carousel-item">
      <img src="imagens/fotos/02.webp" class="lazyload d-block w-100" alt="foto">
    </div>
    <div class="carousel-item">
      <img src="imagens/fotos/03.webp" class="lazyload d-block w-100" alt="foto">
    </div>
    <div class="carousel-item">
      <img src="imagens/fotos/04.webp" class="lazyload d-block w-100" alt="foto">
    </div>
    <div class="carousel-item">
      <img src="imagens/fotos/05.webp" class="lazyload d-block w-100" alt="foto">
    </div>
    <div class="carousel-item">
      <img src="imagens/fotos/06.webp" class="lazyload d-block w-100" alt="foto">
    </div>
    <div class="carousel-item">
      <img src="imagens/fotos/07.webp" class="lazyload d-block w-100" alt="foto">
    </div>
    <div class="carousel-item">
      <img src="imagens/fotos/08.webp" class="lazyload d-block w-100" alt="foto">
    </div>
    <div class="carousel-item">
      <img src="imagens/fotos/09.webp" class="lazyload d-block w-100" alt="foto">
    </div>
    <div class="carousel-item">
      <img src="imagens/fotos/10.webp" class="lazyload d-block w-100" alt="foto">
    </div>
    <div class="carousel-item">
      <img src="imagens/fotos/11.webp" class="lazyload d-block w-100" alt="foto">
    </div>
    <div class="carousel-item">
      <img src="imagens/fotos/12.webp" class="lazyload d-block w-100" alt="foto">
    </div>
    <div class="carousel-item">
      <img src="imagens/fotos/13.webp" class="lazyload d-block w-100" alt="foto">
    </div>
    <div class="carousel-item">
      <img src="imagens/fotos/14.webp" class="lazyload d-block w-100" alt="foto">
    </div>
    <div class="carousel-item">
      <img src="imagens/fotos/15.webp" class="lazyload d-block w-100" alt="foto">
    </div>
    <div class="carousel-item">
      <img src="imagens/fotos/16.webp" class="lazyload d-block w-100" alt="foto">
    </div>
    <div class="carousel-item">
      <img src="imagens/fotos/17.webp" class="lazyload d-block w-100" alt="foto">
    </div>
    <div class="carousel-item">
      <img src="imagens/fotos/18.webp" class="lazyload d-block w-100" alt="foto">
    </div>
    <div class="carousel-item">
      <img src="imagens/fotos/19.webp" class="lazyload d-block w-100" alt="foto">
    </div>
    <div class="carousel-item">
      <img src="imagens/fotos/20.webp" class="lazyload d-block w-100" alt="foto">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </button>
</div>

<!-- Conteúdo -->
<div id="diferenciais" class="container col-xl-10 col-xxl-8 px-4 py-5 diferenciais">
<h2 class="cor-primaria mb-3 mt-5">O PRIMEIRO HOTEL DA REDE HILTON WORLDWIDE<br> NO NORDESTE DO BRASIL</h2>
<p class="cor-terciaria">Especialmente desenvolvida para as principais metrópoles ao redor do mundo, com muita tecnologia embarcada, <b>MOTTO é uma marca lifestyle</b> conectada com cada cidade e sua cultura. Invista no Motto by Hilton Recife Antigo, o empreendimento com o mais elevado padrão de hospedagem que é a cara do <b>Recife do Futuro.</b></p>
<div class="row align-items-center g-lg-5 py-5">
    <div class="grid-font">
      <div class="dif-icon"><div><img class="img-icon" alt="icon-1" width="80" src="imagens/icones/room-130w.webp"></div> 132 quartos </div>
      <div class="dif-icon"><div><img class="img-icon" alt="icon-1" width="80" src="imagens/icones/location-pin-111w.webp"></div> No coração do Recife Antigo </div>
      <div class="dif-icon"><div><img class="img-icon" alt="icon-1" width="80" src="imagens/icones/work-from-home-136w.webp"></div> Café Boutique com Espaço Coworking </div>
      <div class="dif-icon"><div><img class="img-icon" alt="icon-1" width="80" src="imagens/icones/rooftop-130w.webp"></div> Rooftop Pub </div>
      <div class="dif-icon"><div><img class="img-icon" alt="icon-1" width="80" src="imagens/icones/booking-132w.webp"></div> Check-in e Check-out por celular </div>
      <div class="dif-icon"><div><img class="img-icon" alt="icon-1" width="80" src="imagens/icones/key-card-130w.webp"></div> Chave Digital </div>
      <div class="dif-icon"><div><img class="img-icon" alt="icon-1" width="80" src="imagens/icones/booking+(1)-133w.webp"></div> Controle de ambiente pelo App Hilton Honors </div>
	</div>
  </div>
</div>

<!-- Localização -->
<div id="localizacao" class="mapa">
    <img src="<?php echo $urlBase.'imagens/loc-1.webp'; ?>" width="100%" alt="localizacao">
</div>

<!-- Depoimentos -->
<div id="depoimentos" class="container col-xl-10 col-xxl-8 px-4 py-5 depoimentos">
    <h2 class="mb-3 cor-primaria">DEPOIMENTOS</h2>
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="00" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="01" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="02" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="03" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <iframe class="d-block w-100" width="854" height="480" src="https://www.youtube.com/embed/f6zfxRzlaPI" title="DEPOIMENTO" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-white bg-primaria mb-0">DEPOIMENTO - Danilo Canuto</h5>
        <p class="text-white bg-terciaria">Danilo Canuto, presidente da Revpar Incorporações, fala sobre a sofisticação, tecnologia e valorização que o Motto Recife vai trazer para a cidade.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <iframe class="d-block w-100" width="854" height="480" src="https://www.youtube.com/embed/tZMzzgLVQio" title="DEPOIMENTO" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-white bg-primaria mb-0">DEPOIMENTO - Juliano Dubeux</h5>
        <p class="text-white bg-terciaria">O arquiteto Juliano Dubeux fala sobre o projeto que une tecnologia e valores da personalidade pernambucana</p>
      </div>
    </div>
    <div class="carousel-item">
      <iframe class="d-block w-100" width="854" height="480" src="https://www.youtube.com/embed/EUZU-cxmDo0" title="DEPOIMENTO" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-white bg-primaria mb-0">DEPOIMENTO - João Domingos</h5>
        <p class="text-white bg-terciaria">João Domingos, da Muv Empreendimentos, fala sobre o lugar estratégico no qual o Motto by Hilton Recife será construído.</p>
      </div>
    </div>
        <div class="carousel-item">
      <iframe class="d-block w-100" width="854" height="480" src="https://www.youtube.com/embed/GpEcgpmjb1s" title="DEPOIMENTO" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-white bg-primaria mb-0">DEPOIMENTO - Rafael Souto Maior</h5>
        <p class="text-white bg-terciaria">O arquiteto Rafael Souto Maior, da Metro Arquitetura, fala sobre o desafio de fundir o local e o internacional no projeto.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Próximo</span>
  </button>
</div>
</div>

</main>

<footer id="documentos" class="background-footer">
  <div class="container footer-div">
      <a class="btn bg-primaria cor-fonte hover-doc shadow-none hover-btn" target="_blank" href="https://www.mottorecife.com/downloads/" role="button"><i class="bi bi-file-arrow-down"></i> Documentos</a>
    <div class="row">
      <div class="w-100 p-3">
          <img class="logoMarta" src="<?php echo $urlSite; ?>imagens/muv.webp" alt="Logo">
          <a target="_blank" href="https://www.revpar.com.br"><img class="logoMarta" src="<?php echo $urlSite; ?>imagens/revpar.webp" alt="Logo"></a>
          </div>
      <p class="text-dark">A presente oferta trata de investimento em valor mobiliário, e não apenas da aquisição de um imóvel. Antes de aceitar a oferta, leia com atenção o prospecto, em especial a seção FATORES DE RISCO, e o ESTUDO DE VIABILIDADE ECONÔMICA E FINANCEIRA do empreendimento hoteleiro.</p>
      <div>
          <a target="_blank" href="https://deixacommarta.com.br"><img class="logoMarta" src="<?php echo $urlSite; ?>imagens/logoMarta.webp" alt="Marta Logo"></a>
          <p class="text-dark fw-light texto-centro">Marta é uma aceleradora de vendas transacionais, 100% digital, que usa inteligência de dados para fazer o encontro de lançamentos do mercado com seus perfis ideais de compradores.</p>
      </div>
    </div>
  </div>
</footer>

<!-- Form Whatsapp -->
<div class="centerFormWhats">
	<div class="geralFormWhats" style="margin-top:100px;">
		<div class="formTopLeadBottomWhats" style="background-color:white;border-radius:10px;" id="formBottom">
			<div class="fecharJan" style="width:25px;padding:5px;margin:10px;"> <a href="javascript:void(0);"><i class="cor-wpp bi bi-x-circle-fill"></i></a> </div>
			<div class="mensagemFormBotWhats">Carregando...</div>
			<form method="post" action="#" id="box-form-cont-whats" name="formContato" class=" p-md-5 border rounded-3 bg-light p-4">
				<h3 class="text-center fs-2 cor-wpp"><i class="bi bi-whatsapp"></i> FALE CONOSCO</h3>
				<h4 class="text-center fs-6">Preencha os dados para conversar:</h4>
          
        <input type="hidden" name="url_origem" value="<?php echo $urlSite; ?>" />
				<input type="hidden" name="id_empresa" value="<?php echo $idEmpresaDestino; ?>" />
				<input type="hidden" name="id_empreendimento" value="<?php echo $codigoImovel; ?>" />
				<input type="hidden" name="tipo_origem" value="3" />
				<input type="hidden" name="id_outra_origem" value="5" />
				<!--Internet-->
				<input type="hidden" name="id_detalhe_outra_origem" value="<?php echo $idOrigem; ?>" />
				<!--SITE DA EMPRESA-->
				<input type="hidden" name="tipo_de_interesse" value="0" />
				<input type="hidden" name="idAcao" value="<?php echo $idAcao; ?>" />
				<input type="hidden" name="mensagem" id="mensagem" value="Quero ter mais informações." />

        <div class="form-floating mb-3">
            <input type="text" name="nome_contato" id="contatoNome" required class="form-control shadow-none" <?php if(isset($_COOKIE['nomeContato'])) { ?>value="<?php echo $_COOKIE['nomeContato']; ?>"<?php } ?> placeholder="Nome">
            <label for="name">Nome</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="email" id="contatoEmail" required class="form-control shadow-none" <?php if(isset($_COOKIE['emailContato'])) { ?>value="<?php echo $_COOKIE['emailContato']; ?>"<?php } ?> pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="nome@exemplo.com">
            <label for="email">E-mail</label>
          </div>
          <div class="form-floating mb-3">
            <input type="tel" name="telefone" id="contatoTelefone" required class="telefone form-control shadow-none" <?php if(isset($_COOKIE['telefoneContato'])) { ?>value="<?php echo $_COOKIE['telefoneContato']; ?>"<?php } ?> placeholder="(00)0000-0000">
            <label for="fone">Telefone</label>
          </div>
          <button class="w-100 btn btn-lg btn-dark bg-wpp" type="submit" name="submit">Falar agora <i class="bi bi-chat-dots"></i></button>
          <hr class="my-4">
          <small class="text-muted"><i class="bi bi-lock"></i> Garantimos a privacidade de seus dados</small>
        </form>
        </div>
<!-- end formTopLeadBottom -->
</div>
<!-- end geralFormBottomIn -->
</div>
<!-- end centerFormWhats -->
</div>
<!--END Whatsapp -->