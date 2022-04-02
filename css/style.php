<style>
@media screen and (max-width: 600px) {
  #linha-horizontal {
  width: 300px;
  margin: auto;
  border: 1px solid white;
  text-align:center;
  margin-top:10px;
  margin-bottom:10px;
}
}

.hover-btn:hover {
    background-color: <?php echo $colorTerciaria ?> !important;
    color: <?php echo $colorFonte ?> !important;
    font-weight: bold;
}

.texto-ul {
	padding-left: 50px;
}

@media screen and (max-width: 600px) {
	.texto-ul {
		padding-left: 30px;
	}
}

.diferenciais {
	margin: auto;
	text-align: center;
	background-color:<?php echo $colorFonte ?>;
	min-width: 100%;
    min-height: 100%;
}

@media screen and (max-width: 600px) {
    .diferenciais {
	margin: auto;
	text-align: center;
	background-color:<?php echo $colorFonte ?>;
	min-width: 100%;
    min-height: 100%;
    }
}

.material-x {
    background-color: <?php echo $colorTerciaria ?>;
    margin: 100px;
}

bg-1 {
    background-color: white;
}

.mapa {
	margin: auto;
	text-align: center;
}

.depoimentos {
	margin: auto;
	text-align: center;
	background-color:<?php echo $colorFonte ?>;
	min-width: 100%;
    min-height: 100%;
}

.cor-1 {
	color: #7a4b33;
}

.cor-wpp {
	color: #075E54;
}

.bg-wpp {
	background-color: #075E54;
}

.bg-wpp:hover {
	background-color: #25D366;
}

.bg-2 {
	background-color: #c6947c;
}

.bg-2:hover {
	background-color: #7a4b33;
}

button.btn {
	border: 0px solid transparent;
}

.navbar {
	background-color: <?php echo $colorPrimaria ?> !important;
}

.form-p {
    background-color: <?php echo $colorPrimaria ?> !important;
}

.cor-primaria {
    color: <?php echo $colorPrimaria ?> !important;
}

.bg-primaria {
    background-color: <?php echo $colorPrimaria ?> !important;
}

.cor-terciaria {
    color:<?php echo $colorTerciaria ?> !important;
}

.bg-terciaria {
    background-color:<?php echo $colorTerciaria ?> !important;
}

.cor-fonte {
    color:<?php echo $colorFonte ?> !important;
}

@media screen and (max-width: 600px) {
    .color-0 {
        font-size: 2em;
    }
}

.color-1 {
    color:<?php echo $colorFonte ?>;
    font-size: 1.5em;
}
@media screen and (max-width: 600px) {
    .color-1 {
        color:<?php echo $colorFonte ?>;
        text-align: center;
        font-size: 1.2em;
    }
}

.color-2 {
    color:<?php echo $colorFonte ?>;
}

@media screen and (max-width: 600px) {
    .color-2 {
        color:<?php echo $colorFonte ?>;
        text-align: center;
    }
}

.color-3 {
    background-color:<?php echo $colorFonte ?>;
}

.color-3:hover {
    background-color:<?php echo $colorSecundaria ?>;
}

.fonte {
    color: white;
}

.fonte-bg {
    background-color: white;
}

.background {
	background-image: url("imagens/banner.webp");
	background-attachment: fixed;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}

.background-2 {
	background-color: black;
	margin-top: 50px;
	opacity: 0.8;
}

.background-footer {
	background-color: white;
}

.hover-doc:hover {
    color: white;
}

.logoMarta {
	width: 100px;
}

.footer-div {
	padding: 20px;
	margin: auto;
	text-align: center;
}

.parte-2 {
	padding-left: 80px;
}

@media screen and (max-width: 600px) {
	.parte-2 {
		padding-left: 0px;
	}
}

.loader,
.loader:after {
	border-radius: 50%;
	width: 10em;
	height: 10em;
}

.loader {
	margin: 300px auto;
	font-size: 10px;
	position: relative;
	text-indent: -9999em;
	border-top: 1.1em solid rgba(255, 255, 255, 0.2);
	border-right: 1.1em solid rgba(255, 255, 255, 0.2);
	border-bottom: 1.1em solid rgba(255, 255, 255, 0.2);
	border-left: 1.1em solid #ffffff;
	-webkit-transform: translateZ(0);
	-ms-transform: translateZ(0);
	transform: translateZ(0);
	-webkit-animation: load8 1.1s infinite linear;
	animation: load8 1.1s infinite linear;
}

@-webkit-keyframes load8 {
	0% {
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
	}
	100% {
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg);
	}
}

@keyframes load8 {
	0% {
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
	}
	100% {
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg);
	}
}

#loadingDiv {
	position: absolute;
	;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: rgb(122, 75, 51);
	background: linear-gradient(90deg, rgba(122, 75, 51, 1) 0%, rgba(198, 148, 124, 1) 100%);
}

.grid-dif {
	box-sizing: border-box;
	background-color: black;
	background-size: cover;
	background-repeat: no-repeat;
	padding-top: 50px;
	padding-bottom: 50px;
	padding-top: 130px;
	padding-bottom: 50px;
}

.grid-font {
	margin: auto;
	padding: 5px;
	display: grid;
	grid-template-columns: repeat(4, 1fr);
	justify-items: center;
}

@media screen and (max-width: 600px) {
	.grid-font {
		margin: auto;
		padding: 5px;
		display: grid;
		grid-template-columns: repeat(2, 1fr);
		justify-items: center;
		align-items: center;
	}
}

.img-icon {
	margin: 8px;
}

@media screen and (max-width: 768px) {
	div.caracteristicas {
		padding-top: 20px;
		width: 100%;
	}
}

@media screen and (min-width: 601px) {
	h3.textodif {
		font-family: Montserrat;
		font-style: normal;
		font-weight: 600;
		font-size: 20px;
		line-height: 116.69%;
		text-align: center;
		color: white;
		margin-bottom: 30px;
		margin-top: 30px;
	}
}

@media screen and (max-width: 1280px) {
	h3.textodif {
		font-family: Montserrat;
		font-style: normal;
		font-weight: 600;
		font-size: 18px;
		line-height: 116.69%;
		text-align: center;
		color: white;
		margin-bottom: 20px;
		margin-top: 30px;
		padding: 14px;
	}
}

.botao-cont {
	padding: 15px;
	background: #075571;
	color: #c2a178;
	font-weight: 600;
	font-size: 17px;
	font-family: Montserrat;
	font-style: normal;
	box-sizing: border-box;
	border-radius: 20px;
}

@media screen and (max-width: 600px) {
	.botao-cont {
		padding: 15px;
		background: #075571;
		color: #c2a178;
		font-weight: 600;
		font-size: 15px;
		font-family: Montserrat;
		font-style: normal;
		box-sizing: border-box;
		border-radius: 20px;
	}
}

.botao-cont:hover {
	padding: 15px;
	background: #c2a178;
	color: #075571;
}

.grid-dif {
	box-sizing: border-box;
	background-image: url('imagens/difbann.webp');
	background-size: cover;
	background-repeat: no-repeat;
	padding-top: 50px;
	padding-bottom: 50px;
	padding-top: 130px;
	padding-bottom: 50px;
}

.dif-icon {
	padding: 10px;
	color: <?php echo $colorPrimaria ?>;
	font-family: Montserrat;
	font-weight: 500;
	font-style: normal;
	font-size: 0.9em;
	text-align: center;
}

@media screen and (max-width: 768px) {
	.dif-icon {
		padding: 10px;
		color: <?php echo $colorPrimaria ?>;
		font-family: Montserrat;
		font-weight: 500;
		font-style: normal;
		font-size: 0.8em;
		text-align: center;
	}
}

.img-icon {
	margin: 8px;
}

.whatsapp-button {
	position: fixed;
	bottom: 15px;
	right: 15px;
	z-index: 99;
	background-color: #25d366;
	border-radius: 50px;
	color: #ffffff;
	text-decoration: none;
	width: 50px;
	height: 50px;
	font-size: 30px;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	-webkit-box-shadow: 0px 0px 25px -6px rgba(0, 0, 0, 1);
	-moz-box-shadow: 0px 0px 25px -6px rgba(0, 0, 0, 1);
	box-shadow: 0px 0px 25px -6px rgba(0, 0, 0, 1);
	animation: effect 5s infinite ease-in;
}

.whatsapp-button:hover {
	background-color: white;
	color: #25d366;
}

#mascara{
    width:100%;
    background:rgba(0,0,0,.8);
    position:fixed;
    display:none;
    z-index:100;
    left:0;
    top:0
}
</style>