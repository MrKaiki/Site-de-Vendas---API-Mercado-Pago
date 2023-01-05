<?php
include('app/php/conexao.php');
session_start();
?>



<!DOCTYPE html>
<html lang="pt-br" class="no-js">
	

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="UTF-8">

	<title>MrKaiki Scirpting - MTA</title>
		
	<link rel="shortcut icon" href="assets/img/favicon.ico">		
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		
	<link rel="stylesheet" href="assets/css/linearicons.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">					
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="app/css/style.css">
  
	</head>
	<body>
		<header id="header" id="home">
			<div class="container">
		    	<div class="row align-items-center justify-content-between d-flex">
			    	<div id="logo">
							<a href="#"><img src="assets/img/logo.png" alt="" title="" /></a>
			      	</div>
			      	<nav id="nav-menu-container">
			        	<ul class="nav-menu">
					  		<li class="menu-active"><a href="#">ínicio</a></li>
								<li class="menu-active menu-has-children"><a href="loja/index.php">Loja</a>
									<ul>
										  <li><a href="loja/index.php">Pronto a entrega</a></li>
									</ul>
								  </li>
					  		</li>
							  <li><a href="https://discord.gg/YPAF48ZRgV">Discord</a></li>
							  <li><a href="termos/termos.php">Termos</a></li>
							  <li class="menu-active menu-has-children"><a href="">Minha Conta</a>
								<ul>
								  <li><a href="clientarea/logarTeste.php">Logar-se</a></li>
								  <li><a href="clientarea/register.php">Registrar-se</a></li>
								</ul>
							</li>			
			      	</nav>	    		
		    	</div>
		    </div>
		</header>

		<section class="banner-area" id="home">	
			<div class="container">
				<div class="row fullscreen d-flex align-items-center justify-content-center">																		
					
					<div class="banner-content col-lg-10"  style="margin-bottom: -25%;">
						<h2 class="texto-cor text-uppercase">Seja Bem Vindo</h2>							
						<h2 class="texto-cor text-uppercase">Qualidade em cada pedido!</h2>
					</div>	
					<br>
					<div class="banner-content col-lg-3">			
						<h5 class="text-white text-uppercase">Deseja comprar produtos em nossa loja virtual?</h5>
						<br>
						<a href="loja/index.php" class="primary-btn text-uppercase">IR PARA LOJA</a>
					</div>																
				</div>
			</div>
		</section>
			
		<section class="service-area section-gap" id="vantagens">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-md-8 pb-40 header-text">
						<h1>Quem somos?</h1>
						<p>
							Somos uma loja focada em resources para MTA:SA 
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-service">
							<h4><span class="lnr lnr-cog"></span>O que vendemos</h4>
							<p>
								Vendemos varidades de resources para MTA e Cursos .LUA etc... Ex:Custom, Loja De Carros, Hud, Painel De Login, Agencia De Empregos!
							</p>							
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-service">
							<h4><span class="lnr lnr-pencil"></span>Termos</h4>
							<p>
								Após comprar um resource do site, o cliente está ciente de que
								está comprando no estado em que ele se encontra. Caso o cliente queira
								alguma alteração, ele será cobrado pela loja. Essa alteração fica a
								critério da loja se vai fazer ou não. O cliente não será cobrado se a
								alteração for recusada pela loja.. 
							</p>								
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-service">
							<h4><span class="lnr lnr-phone"></span>Suporte</h4>
							<p>
								Atendimento personalizado, suporte via facebook e whatsapp e gmail e discord, pontualidade é o nosso diferenciail!    mrkaikiscriptingmta@contato.com.br
							</p>								
						</div>
					</div>					
				</div>
			</div>	
		</section>

		<section class="avaliações">
			<div class="container text-center">
				<p class="title">Nossa equipe!</p>
				  <p class="stitle">Aqui está a nossa equipe que faz a loja acontecer!</p>
				  <div class="row">
					  <div class="card">
						<img src="https://media.discordapp.net/attachments/950842187837485077/1025572208300523621/perfil_white.png?width=566&height=566">
						<p class="name">Kaiki</p>
						<p class="tags"><span class="badge bg-primary">Fundador</span> <span class="badge bg-primary">Desenvolvedor</span></p>
					  
					</div>
					  <div class="card">
						<img src="https://media.discordapp.net/attachments/950842187837485077/1025572208300523621/perfil_white.png?width=566&height=566">
						<p class="name">Capone</p>
						<p class="tags"><span class="badge .text-dark">Fundador</span> <span class="badge bg-light">Desenvolvedor</span></p>
					  
					</div>
				  </div>
				  
			</div>
		  </section>

		  <section class="avaliar">
			<div class="container text-center">
				<p class="title">Nossas Avaliações!</p>
			</div>
		  </section>

		  <section class="counter">
			<div class="container">
			  <div class="row">
				<div class="col-md-4 text-center">
				  <p class="title">Clientes</p>
				  <p class="numbers">+<span class="number">120</span></p>
				</div>
				<div class="col-md-4 text-center">
				  <p class="title">Produtos</p>
				  <p class="numbers">+<span class="number">10</span></p>
				</div>
				<div class="col-md-4 text-center">
				  <p class="title">Avaliações</p>
				  <p class="numbers">+<span class="number">10</span></p>
				</div>
			  </div>
			</div>
		  </section>
		
		<div class="container">
			<footer class="py-3 my-4">
			  <ul class="nav justify-content-center border-bottom pb-3 mb-3">
				<li class="nav-item"><a href="#home" class="nav-link px-2 text-muted">Inicio</a></li>
				<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Produtos</a></li>
				<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Termos</a></li>
				<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Discord</a></li>
			  </ul>
			  <p class="text-center text-muted">&copy; 2022 Meta Codes - MTA:SA</p>
			</footer>
		</div>
		
		<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
		<script src="../cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="assets/js/vendor/bootstrap.min.js"></script>			
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="assets/js/easing.min.js"></script>			
		<script src="assets/js/hoverIntent.js"></script>
		<script src="assets/js/superfish.min.js"></script>	
		<script src="assets/js/jquery.ajaxchimp.min.js"></script>
		<script src="assets/js/jquery.magnific-popup.min.js"></script>	
		<script src="assets/js/owl.carousel.min.js"></script>			
		<script src="assets/js/jquery.sticky.js"></script>
		<script src="assets/js/jquery.nice-select.min.js"></script>			
		<script src="assets/js/parallax.min.js"></script>	
		<script src="assets/js/mail-script.js"></script>	
		<script src="assets/js/main.js"></script>			
		
				<script>
			document.onkeydown = function(e) {
		if(event.keyCode == 123) {
			return false;
		}
		if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
			return false;
		}
		if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
			return false;
		}
		if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
			return false;
		}
		if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
			return false;
		}
		}
		</script>
		<script>
			function myFunction() {
			alert("Site protegido!");
			return false
			}
			</script>
		<script>
			$(".number").counterUp({
			time: 1000
			});
		</script>
	</body>


</html>