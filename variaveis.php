<?php

	$urlSite = 'https://www.mottorecife.com/';
	$urlBaseSemBarra = "https://www.mottorecife.com";
	$urlBaseSmart = "https://app.smart.youdigital.com.br/"; 

	// SEO
	$tituloPage = "Motto Recife by Hilton";
	$subTitulo = "O PRIMEIRO HOTEL DA REDE HILTON WORLDWIDE NO NORDESTE DO BRASIL";

	$codigoImovel = "64994"; //ID EMPREENDIMENTO
	$token = "dI2dlTNC9WP50KZU7T6jI1SMxZFTDQgFhwjoRe5g"; // TOKEM ANUCIANTE
	$idLandpage = "4190";  //ID ACAO PADRÃO
	$idEmpresaDestino = "5878"; // ID empresa que vai receber o lead
	$whatsAppFone = "5581994327030";

	$colorPrimaria = "#1D3B2B";
	$colorSecundaria = "#E1F3EF";
	$colorTerciaria = "#735F3F";
	$colorFonte = "white";

	// Nﾃグ ESQUECE DE CONFIGURAR O ARQUIVO .htaccess

	$tokenAcessoCookie = "8uAbBcq8VhfEr23VS6hU4TDIS15iOhI8Lu7YQxx2ydJrPP5qqjDDl9NFrMth";
	include "includes/funcoes-integrador.php";	
	$objJsonEmpresa = obterEmpresa($urlBaseSmart, $token);
	
	if(isset($objJsonEmpresa->empresa)){
		$empresa = $objJsonEmpresa->empresa;
		
		if(isset($empresa->logomarca) && $empresa->logomarca != ""){
			$urlLogomarca = $urlBaseSmart."arquivos/smart/".($empresa->id)."/logomarca/".($empresa->logomarca);
		}else{
			$urlLogomarca = $urlBaseSmart."arquivos/smart/1/logomarca/Logomarca.png";
		}
	}else{
		$empresa = null;
	}
?>