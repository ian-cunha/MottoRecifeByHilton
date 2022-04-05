<!-- Cookies -->
<div class="alert text-center cookiealert" role="alert">
    <b>Você gosta de cookies?</b> &#x1F36A; Usamos cookies para garantir que você tenha a melhor experiência em nosso site. <a class="fonte" href="https://deixacommarta.com.br/privacidade.php" target="_blank">Saber mais</a>

    <button type="button" class="fonte-bg btn btn-sm acceptcookies">
        Eu aceito
    </button>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top">
  <div class="container-fluid">
    <a class="py-2" href="#" aria-label="Product">
      <img src="<?php echo $urlBase.'imagens/logo.webp'; ?>" width="150" alt="Logo">
    </a>
    <button class="m-2 btn text-light shadow-none hover-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bi bi-list text-light"></i>MENU</button>
  </div>
</nav>

<!-- Whatsapp Form -->
<div class="modal fade" id="whatsappform" tabindex="-1" aria-labelledby="whatsappform" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
			<form method="post" action="#" id="box-form-cont-whats" name="formContato" class="p-md-5 border rounded-3 bg-light p-4">
			    <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
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
            <label for="contatoNome">Nome</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="email" id="contatoEmail" required class="form-control shadow-none" <?php if(isset($_COOKIE['emailContato'])) { ?>value="<?php echo $_COOKIE['emailContato']; ?>"<?php } ?> pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="nome@exemplo.com">
            <label for="contatoEmail">E-mail</label>
          </div>
          <div class="form-floating mb-3">
            <input type="tel" name="telefone" id="contatoTelefone" required class="telefone form-control shadow-none" <?php if(isset($_COOKIE['telefoneContato'])) { ?>value="<?php echo $_COOKIE['telefoneContato']; ?>"<?php } ?> placeholder="(00)0000-0000" maxlength="15">
            <label for="contatoTelefone">Telefone</label>
          </div>
          <button class="w-100 btn btn-lg btn-dark bg-wpp" type="submit" name="submit">Falar agora <i class="bi bi-chat-dots"></i></button>
          <hr class="my-4">
          <small class="text-muted"><i class="bi bi-lock"></i> Garantimos a privacidade de seus dados</small>
        </form>
    </div>
  </div>
</div>

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
      <a class="btn cor-fonte shadow-none hover-btn" href="#galeria" role="button">GALERIA</a><br>
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
            <label class="cor-fonte" for="contatoNome">Nome</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="email" id="contatoEmail" required class="bg-primaria form-control shadow-none" <?php if(isset($_COOKIE['emailContato'])) { ?>value="<?php echo $_COOKIE['emailContato']; ?>"<?php } ?> pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" style="color: white;" placeholder="nome@exemplo.com">
            <label class="cor-fonte" for="contatoEmail">E-mail</label>
          </div>
          <div class="form-floating mb-3">
            <input type="tel" name="telefone" id="contatoTelefone" required class="telefone bg-primaria form-control shadow-none" <?php if(isset($_COOKIE['telefoneContato'])) { ?>value="<?php echo $_COOKIE['telefoneContato']; ?>"<?php } ?> style="color: white;" placeholder="(00)0000-0000" maxlength="15">
            <label for="contatoTelefone" class="cor-fonte">Telefone</label>
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
  <div id="galeria" class="galeria">
  <amp-carousel type="slides"
  width="450"
  height="300"
  layout="responsive"
  controls
  loop
  autoplay
  delay="3000"  data-next-button-aria-label="Go to next slide"
  data-previous-button-aria-label="Go to previous slide"
  role="region"
  aria-label="Looping carousel">
  <amp-img src="imagens/fotos/01.webp"
    width="100%"
    height="300"></amp-img>
  <amp-img src="imagens/fotos/02.webp"
    width="100%"
    height="300"></amp-img>
  <amp-img src="imagens/fotos/03.webp"
    width="100%"
    height="300"></amp-img>
  <amp-img src="imagens/fotos/04.webp"
    width="100%"
    height="300"></amp-img>
  <amp-img src="imagens/fotos/05.webp"
    width="100%"
    height="300"></amp-img>
  <amp-img src="imagens/fotos/06.webp"
    width="100%"
    height="300"></amp-img>
  <amp-img src="imagens/fotos/07.webp"
    width="100%"
    height="300"></amp-img>
  <amp-img src="imagens/fotos/08.webp"
    width="100%"
    height="300"></amp-img>
</amp-carousel>
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
    
  <amp-carousel type="slides"
  width="450"
  height="300"
  layout="responsive"
  controls
  delay="3000"  data-next-button-aria-label="Go to next slide"
  data-previous-button-aria-label="Go to previous slide"
  role="region"
  aria-label="Looping carousel">
  <amp-youtube width="450" height="300" layout="responsive" data-videoid="f6zfxRzlaPI"></amp-youtube>
  <amp-youtube width="450" height="300" layout="responsive" data-videoid="tZMzzgLVQio"></amp-youtube>
  <amp-youtube width="450" height="300" layout="responsive" data-videoid="EUZU-cxmDo0"></amp-youtube>
  <amp-youtube width="450" height="300" layout="responsive" data-videoid="GpEcgpmjb1s"></amp-youtube>
</amp-carousel>

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