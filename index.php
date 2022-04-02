<?php
header('Access-Control-Allow-Origin: *');
header("Cache-Control: max-age=31536000");
?>
	<!DOCTYPE html>
	<link rel="canonical" href="https://www.mottorecife.com/" />
<html itemscope="" itemtype="http://schema.org/Organization" class="no-js zsg-theme-modernized null" lang="pt"
    xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml"
    xmlns:product="http://ogp.me/ns/product#">
<meta name="author" content="Marta Inteligência Imobiliária" />
<meta name="description"
    content="MOTTO é uma marca lifestyle conectada com cada cidade e sua cultura. Invista no Motto by Hilton Recife Antigo, o empreendimento com o mais elevado padrão de hospedagem que é a cara do Recife do Futuro." />
<meta property="og:title" content="Motto Recife by Hilton">
<meta property="og:site_name" content="Motto Recife by Hilton">
<meta property="og:url" content="https://www.mottorecife.com/">
<meta property="og:description"
    content="MOTTO é uma marca lifestyle conectada com cada cidade e sua cultura. Invista no Motto by Hilton Recife Antigo, o empreendimento com o mais elevado padrão de hospedagem que é a cara do Recife do Futuro.">
<meta property="og:type" content="Product">
<meta property="og:image" content="https://www.mottorecife.com/imagens/logo.webp">
<link rel="shortcut icon" href="favicon.webp" />

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "Motto Recife by Hilton",
    "description": "MOTTO é uma marca lifestyle conectada com cada cidade e sua cultura. Invista no Motto by Hilton Recife Antigo, o empreendimento com o mais elevado padrão de hospedagem que é a cara do Recife do Futuro.",
    "url": "https://www.mottorecife.com",
    "logo": "https://www.mottorecife.com/imagens/logo.webp"
}
</script>
	<head>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome-ie7.min.css" rel="stylesheet">
   
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
		<?php
include "variaveis.php";

$idAcao = $_GET['id_acao'];

if ($idAcao == "" || $idAcao == null) {
    $idAcao = $idLandpage;
}

$idOrigem = $_GET['id_origem'];

if ($idOrigem == "" || $idOrigem == null) {
    $idOrigem = 820;
}

	//Obtendo CookieURL
	$nomeCookieURL = null;
	if (isset($_GET['nome'])) { //Se o nome 
		if ($_GET['nome'] != '*|FNAME|*' && trim($_GET['nome']) != "") {
			$nomeCookieURL = $_GET['nome'];
		}
	}
	
	$emailCookieURL = null;
	if (isset($_GET['email'])) {
		if ($_GET['email'] != '*|EMAIL|*' && trim($_GET['email']) != "") {
			$emailCookieURL = $_GET['email'];
		}
	}
	
	$telefoneCookieURL = null;
	if (isset($_GET['telefone'])) {
		if ($_GET['telefone'] != '*|TELEFONE|*' && trim($_GET['telefone']) != "") {
			$telefoneCookieURL = $_GET['telefone'];
		}
	}

    //Obtendo CookieLocal
    $nomeCookieLocal = null;   
    if(isset($_COOKIE['nomeContato'])){ $nomeCookieLocal = $_COOKIE['nomeContato']; }
    $emailCookieLocal = null;   
    if(isset($_COOKIE['emailContato'])){ $emailCookieLocal = $_COOKIE['emailContato']; }
    $telefoneCookieLocal = null;    
    if(isset($_COOKIE['telefoneContato'])){ $telefoneCookieLocal = $_COOKIE['telefoneContato']; }


    include "includes/header.php";

  $textoPretensao = "";
  $textoPretensaoSinonimo = "";
  $textoTitulo = "";
  $aluguel = "Aluguel";
  $venda = "Venda";
  $temporada = "Temporada";
  $lancamento = "Lançamento";
  $alugar = "Alugar";
  $comprar = "Comprar";
  $novo = "Novo";
  $maisDetalhes = "Detalhes";
  $referencia = "Refer&etilde;ncia";

  $img1 = "";
  $img2 = "";
  $img3 = "";
  $imagemDestaque = "";         
  $quantidadeImagens = 0; 
  $nomeImagemDestaque = "";
  $temImagem = 0;
  $temCaracImovel = 0;
  $temCaracEmpreendimento = 0;
  $temTabela = 0;
  $temDocumento = 0;  

  if($nomeCookieURL != null) {
    $objJsonImovel = obterEmpreendimentoLead($urlBaseSmart, $token, $codigoImovel, $nomeContato, $emailContato, $telefoneContato, $urlOrigem, $idAcao);
  }else if($nomeCookieLocal != null) {
    $objJsonImovel = obterEmpreendimentoLead($urlBaseSmart, $token, $codigoImovel, $_COOKIE['nomeContato'], $_COOKIE['emailContato'], $_COOKIE['telefoneContato'], ($urlSite), $idAcao);
  }else{    
    $objJsonImovel = obterEmpreendimentoLead($urlBaseSmart, $token, $codigoImovel, null, null, null, $urlSite, $idAcao);
    //$objJsonImovel = obterImovelCookieNuv($urlBaseSmart, $token, $codigoImovel, null, null, null, ($urlSite.$token), $idEmpresaImovel);
  }
  //$objJsonImovel = obterImovel($urlBaseSmart, $token, $codigoImovel);

  if(isset($objJsonImovel->empreendimento)){

    $empreendimento = $objJsonImovel->empreendimento;

  }else{

    $empreendimento = null;

  }

  $quartoEmp = $empreendimento->quartoPersonalizado;
  $areaEmp = $empreendimento->areaPersonalizada;
  $vagaEmp = $empreendimento->vagaPersonalizada;

  $nomeImovel = $empreendimento->nome;  
  $qtdQuartos = $empreendimento->quartosMinimo; 
  $qtdSuites = $empreendimento->suitePersonalizado;
  $menorPreco = $empreendimento->menorPrecoTipo;

  if($fotosEmpreendimentoList->destaque = "1"){
    $fotoDestaque = $nome;
  }
  
  $tiposImovel = $empreendimento->tiposImovel;

  foreach($tiposImovel as $tipos){    
    $preco = $tipos->preco;   
  }

  $objJsonObra = obterObra($urlBaseSmart, $token, $codigoImovel);
  
  if(isset($objJsonObra->andamentoObra)){
    $obra = $objJsonObra->andamentoObra;
  }else{
    $obra = null;
  }

  $fotoImovelList = $empreendimento->fotosEmpreendimentoList;
  $marcoEstagioObra = $obra->marcoEstagioObraList;

  $caracteristicasImovel = $empreendimento->caracteristicasImovelList;
  $caracteristicasEmpreendimento = $empreendimento->caracteristicasEmpreendimentoList;
  $tabelasPreco = $empreendimento->tabelasPrecoList;
  $documentos = $empreendimento->documentosList;
  $videos = $empreendimento->videosList;
  $videos = $empreendimento->videos;

  if(sizeof($fotoImovelList) > 0){ $temImagem = 1; }  
  if(sizeof($caracteristicasImovel) > 0){ $temCaracImovel = 1; }  
  if(sizeof($caracteristicasEmpreendimento) > 0){ $temCaracEmpreendimento = 1; }  
  if(sizeof($tabelasPreco) > 0){ $temTabela = 1; }  
  if(sizeof($documentos) > 0){ $temDocumento = 1; }
  if(sizeof($videos) > 0){ $temVideo = 1; }
  $enderecoCompleto = $empreendimento->endereco.", " .$empreendimento->numero. " - " .($empreendimento->nomeBairro)." - ".($empreendimento->nomeCidade)." - ".($empreendimento->siglaEstado); 

  $urlFormIndicarImovel = $urlBaseSmart."/empreendimento/carregarFormularioIndicarEmpreendimento?idEmpreendimento=".($empreendimento->codigo)."&idE=".($empresa->id)."&origemIndicacao=".$urlSite;

?>
			<title>
				<?php echo $tituloPage; ?>
			</title>
			<meta name="keywords" content="<?php echo $empreendimento->nome . " - " . $empreendimento->nomeBairro . ", " . $empreendimento->nomeCidade; ?>, apartamento, imóvel, comprar, casa, terreno, loteamento, condomínio" />
			<meta name="title" content="<?php echo $tituloPage; ?>" />
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<style>
			<?php include "css/estilo.php";
			?>
			</style>
			<meta name="viewport" content="width=device-width,initial-scale=1">
			<meta itemprop="description" content=" <?php echo $empreendimento->diferenciais; ?>" />
			<meta itemprop="image" content="<?php echo $empreendimento->urlFotoDestaque; ?>"></meta>
			<meta http-equiv="Cache-control" content="public">
	</head>

	<body>
		<?php include "analytics-body.php"; ?>
		<a href="#" class="whatsapp-button formSemCookie"><i class="bi bi-whatsapp"></i></a>
        <div id="mascara"></div>
        <?php include "css/style.php"; ?>
		<?php include "includes/topo.php"; ?>
	</body>
	<script async src="<?php echo $urlSite; ?>js/smart-functions.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i&display=swap" rel="stylesheet">
	<script src="js/lazyload.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<script>
jQuery("input.telefone")
        .mask("(99) 9999-9999?9")
        .focusout(function (event) {  
            var target, phone, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            phone = target.value.replace(/\D/g, '');
            element = $(target);  
            element.unmask();  
            if(phone.length > 10) {  
                element.mask("(99) 99999-999?9");  
            } else {  
                element.mask("(99) 9999-9999?9");  
            }  
        });
</script>

	
	<script type="text/javascript">

$(document).ready(function() {


	var topPag = $('#formBottom').offset().top;

	$('.saberMaisIn').click(function() {

	$('html, body').animate({
	    scrollTop: -topPag, // Separa condições.
	}, 300);

	});


	$(".formSemCookie").click(function(){
		var alturaTela = $(document).height();
		var larguraTela = $(window).width();

		$('#mascara').css({'width':larguraTela,'height':alturaTela});
		$('#mascara').fadeIn(300);	
		$('#mascara').fadeTo("slow");
		$('.centerFormWhats').fadeIn(300);	
	});


	$(".fecharJan, #mascara").click(function(){
		
		$('#mascara').fadeOut();	
		$('.centerFormWhats').fadeOut();	

	});

    $("#box-form-cont-bot").submit(function(e){
    
            e.preventDefault();

             $(".mensagemFormBot").fadeIn();

            var form = $(this);
            
            var msg = $("#mensagem").val();
            if(msg != null && msg != ""){
                var msgAux = "Formulário - Proposta\n\n";
                msgAux += msg;
                msg = msgAux;
            }
            $("#mensagem").val(msg);

            var url = "<?php echo $urlBaseSmart; ?>atendimento/cadastrarContatosOnline";
            var dados = form.serializeArray();//no lugar do "formulario" fica o id do seu formulario
              
            $.ajax({ url: url, type: "POST", data: dados, complete: function (jqxhr){
               //de acordo com o retorno encaminhar sua mensagem ou redirecionar 
               if(jqxhr.status === 200){



                    form.trigger("reset");
                    var cookieName = "_CookieSmartSites";
                    var cookieValue = [];
                    var nomeContatoVar = null;
                    var emailContatoVar = null;
                    var telefoneContatoVar = null;
                    
                    var i = 0;
                    for(i = 0; i < dados.length; i++){
                        if(dados[i].name == "nome_contato" && dados[i].value != ""){
                            nomeContatoVar = dados[i].value;
                            setCookie("nomeContato", nomeContatoVar, 365);
                        }else if(dados[i].name == "email" && dados[i].value != ""){
                            emailContatoVar = dados[i].value;
                            setCookie("emailContato", emailContatoVar, 365);
                        }else if(dados[i].name == "telefone" && dados[i].value != ""){
                            telefoneContatoVar = dados[i].value;
                            setCookie("telefoneContato", telefoneContatoVar, 365);
                        }
                    }
                        
                    if(
                        (nomeContatoVar !== null && nomeContatoVar !== undefined && nomeContatoVar != "") && 
                        (
                            (emailContatoVar !== null && emailContatoVar !== undefined && emailContatoVar != "") 
                            || 
                            (telefoneContatoVar !== null && telefoneContatoVar !== undefined && telefoneContatoVar != "")
                        )
                    ){
                        cookieValue.push({
                            nomeContato: nomeContatoVar,
                            emailContato: emailContatoVar,
                            telefoneContato: telefoneContatoVar
                        });
                        setCookieSmart(cookieName, cookieValue, "<?php echo $urlSite; ?>", "<?php echo $urlBaseSmart; ?>");
                    }


					window.location.href = "<?php echo $urlSite; ?>cadastro-lead.php";

               }else{ 
                    alert("Falha ao enviar o contato!"); //aqui você poderá redirecionar para sua página de aviso de erros ex: location.href = "http://www.seudominio.com/suapaginadeerro.html"; 
               } 
            }});
            return false;
        });


    $('.formComCookie').click(function(){

    	$('.btEnviarTopBotWhats').trigger('click');
    	

    });


    $("#box-form-cont-whats").submit(function(e){
				
			e.preventDefault();

            var form = $(this);
            
            var msg = $("#mensagem").val();
            if(msg != null && msg != ""){
                var msgAux = "Formulário - Proposta\n\n";
                msgAux += msg;
                msg = msgAux;
            }

            $("#mensagem").val(msg);

            var url = "<?php echo $urlBaseSmart; ?>atendimento/cadastrarContatosOnline";
            var dados = form.serializeArray();//no lugar do "formulario" fica o id do seu formulario
              
            $.ajax({ url: url, type: "POST", data: dados, complete: function (jqxhr){
               //de acordo com o retorno encaminhar sua mensagem ou redirecionar 
               if(jqxhr.status === 200){                    

             
                    form.trigger("reset");
                    var cookieName = "_CookieSmartSites";
                    var cookieValue = [];
                    var nomeContatoVar = null;
                    var emailContatoVar = null;
                    var telefoneContatoVar = null;
                    
                    var i = 0;
                    for(i = 0; i < dados.length; i++){
                        if(dados[i].name == "nome_contato" && dados[i].value != ""){
                            nomeContatoVar = dados[i].value;
                            setCookie("nomeContato", nomeContatoVar, 365);
                        }else if(dados[i].name == "email" && dados[i].value != ""){
                            emailContatoVar = dados[i].value;
                            setCookie("emailContato", emailContatoVar, 365);
                        }else if(dados[i].name == "telefone" && dados[i].value != ""){
                            telefoneContatoVar = dados[i].value;
                            setCookie("telefoneContato", telefoneContatoVar, 365);
                        }
                    }
                        
                    if(
                        (nomeContatoVar !== null && nomeContatoVar !== undefined && nomeContatoVar != "") && 
                        (
                            (emailContatoVar !== null && emailContatoVar !== undefined && emailContatoVar != "") 
                            || 
                            (telefoneContatoVar !== null && telefoneContatoVar !== undefined && telefoneContatoVar != "")
                        )
                    ){
                        cookieValue.push({
                            nomeContato: nomeContatoVar,
                            emailContato: emailContatoVar,
                            telefoneContato: telefoneContatoVar
                        });
                        setCookieSmart(cookieName, cookieValue, "<?php echo $urlSite; ?>", "<?php echo $urlBaseSmart; ?>");
                    }


				    window.location.href = "https://wa.me/<?php echo $whatsAppFone; ?>?text=Olá, visitei o site e estou interessado no empreendimento: <?php echo $urlSite; ?>.";


               }else{ 
                  	window.location.href = "https://wa.me/<?php echo $whatsAppFone; ?>?text=Olá, visitei o site e estou interessado no empreendimento: <?php echo $urlSite; ?>.";
               } 
            }});
            return false;
        });




        $("#box-form-cont").submit(function(e){
                e.preventDefault();


          		 $(".mensagemFormBot").fadeIn();
         

                var form = $(this);
                
                var msg = $("#mensagem").val();
                if(msg != null && msg != ""){
                    var msgAux = "Formulário - Proposta\n\n";
                    msgAux += msg;
                    msg = msgAux;
                }
                $("#mensagem").val(msg);

                var url = "<?php echo $urlBaseSmart; ?>atendimento/cadastrarContatosOnline";
                var dados = form.serializeArray();//no lugar do "formulario" fica o id do seu formulario
                  
                $.ajax({ url: url, type: "POST", data: dados, complete: function (jqxhr){
                   //de acordo com o retorno encaminhar sua mensagem ou redirecionar 
                   if(jqxhr.status === 200){
                        

	             
                        form.trigger("reset");
                        var cookieName = "_CookieSmartSites";
                        var cookieValue = [];
                        var nomeContatoVar = null;
                        var emailContatoVar = null;
                        var telefoneContatoVar = null;
                        
                        var i = 0;
                        for(i = 0; i < dados.length; i++){
                            if(dados[i].name == "nome_contato" && dados[i].value != ""){
                                nomeContatoVar = dados[i].value;
                                setCookie("nomeContato", nomeContatoVar, 365);
                            }else if(dados[i].name == "email" && dados[i].value != ""){
                                emailContatoVar = dados[i].value;
                                setCookie("emailContato", emailContatoVar, 365);
                            }else if(dados[i].name == "telefone" && dados[i].value != ""){
                                telefoneContatoVar = dados[i].value;
                                setCookie("telefoneContato", telefoneContatoVar, 365);
                            }
                        }
                            
                        if(
                            (nomeContatoVar !== null && nomeContatoVar !== undefined && nomeContatoVar != "") && 
                            (
                                (emailContatoVar !== null && emailContatoVar !== undefined && emailContatoVar != "") 
                                || 
                                (telefoneContatoVar !== null && telefoneContatoVar !== undefined && telefoneContatoVar != "")
                            )
                        ){
                            cookieValue.push({
                                nomeContato: nomeContatoVar,
                                emailContato: emailContatoVar,
                                telefoneContato: telefoneContatoVar
                            });
                            setCookieSmart(cookieName, cookieValue, "<?php echo $urlSite; ?>", "<?php echo $urlBaseSmart; ?>");
                        }


					    window.location.href = "<?php echo $urlSite; ?>cadastro-lead.php";


                   }else{ 
                        alert("Falha ao enviar o contato!"); //aqui você poderá redirecionar para sua página de aviso de erros ex: location.href = "http://www.seudominio.com/suapaginadeerro.html"; 
                   } 
                }});
                return false;
            });

});

 
</script>

	</html>