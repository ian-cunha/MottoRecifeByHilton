<?php
header('Access-Control-Allow-Origin: *');
header("Cache-Control: max-age=31536000");
?>
<!DOCTYPE html>
<html amp itemscope="" itemtype="http://schema.org/Organization" class="no-js zsg-theme-modernized null" lang="pt" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:product="http://ogp.me/ns/product#">
	<head>
	    <link rel="canonical" href="https://www.mottorecife.com/" />
	    <meta name="author" content="Marta Inteligência Imobiliária" />
	    <meta name="description" content="MOTTO é uma marca lifestyle conectada com cada cidade e sua cultura. Invista no Motto by Hilton Recife Antigo, o empreendimento com o mais elevado padrão de hospedagem que é a cara do Recife do Futuro." />
	    <meta property="og:title" content="Motto Recife by Hilton">
	    <meta property="og:site_name" content="Motto Recife by Hilton">
	    <meta property="og:url" content="https://www.mottorecife.com/">
	    <meta property="og:description" content="MOTTO é uma marca lifestyle conectada com cada cidade e sua cultura. Invista no Motto by Hilton Recife Antigo, o empreendimento com o mais elevado padrão de hospedagem que é a cara do Recife do Futuro.">
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

?>

	    <title><?php echo $tituloPage; ?></title>
	    <meta name="keywords" content="empreendimento, investimento, imóvel, comprar, casa, terreno, loteamento, condomínio, apartamento, marta inteligencia imobiliaria, smart imobiliario" />
	    <meta name="title" content="<?php echo $tituloPage; ?>" />
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	    <meta name="viewport" content="width=device-width,initial-scale=1">
	    <meta itemprop="description" content=" <?php echo $empreendimento->diferenciais; ?>" />
	    <meta itemprop="image" content="<?php echo $empreendimento->urlFotoDestaque; ?>"></meta>
	    <meta http-equiv="Cache-control" content="public">
	    <?php include "analytics-header.php"; ?>

	<!-- AMP -->
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
	<script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.2.js"></script>
	<script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>
	
	<!-- jQuery 3.2.1 -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Cookie Alert -->
    <script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">
    <!-- Input Mask -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>

</head>

<body>
	<?php include "css/style.php"; ?>
	<?php include "analytics-body.php"; ?>
	<a href="#" data-bs-toggle="modal" data-bs-target="#whatsappform" class="whatsapp-button"><i class="bi bi-whatsapp"></i></a>
	<?php include "includes/topo.php"; ?>
</body>

<!-- Smart Functions -->
<script async src="<?php echo $urlSite; ?>js/smart-functions.js"></script>
    
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