<?php
include('../app/php/conexao.php');
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="UTF-8">
		<title>MrKaiki Scripting - MTA</title>
		
		<link rel="shortcut icon" href="../assets/img/favicon.ico">		
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<link rel="stylesheet" href="../assets/css/linearicons.css">
		<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="../assets/css/bootstrap.css">
		<link rel="stylesheet" href="../assets/css/magnific-popup.css">
		<link rel="stylesheet" href="../assets/css/nice-select.css">					
		<link rel="stylesheet" href="../assets/css/animate.min.css">
		<link rel="stylesheet" href="../assets/css/owl.carousel.css">
		<link rel="stylesheet" href="../assets/css/main.css">
		<link rel="stylesheet" href="../app/css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	</head>
	<body>
		<header id="no-banner" id="home" class="header-active">
		    <div class="container">
		    	<div class="row align-items-center justify-content-between d-flex">
			    	<div id="logo">
			        	<a href="../index.php"><img src="../assets/img/logo.png" alt="" title="" /></a>
			      	</div>
			      	<nav id="nav-menu-container">
			        	<ul class="nav-menu">
					  		<li class="menu-active"><a href="../index.php">ínicio</a></li>
								<li class="menu-active menu-has-children"><a href="index.php">Loja</a>
									<ul>
										  <li><a href="index.php">Pronto a entrega</a></li>
									</ul>
								  </li>
					  		</li>
							  <li><a href="https://discord.gg/YPAF48ZRgV">Discord</a></li>
							  <li><a href="../termos/termos.php">Termos</a></li>
							  <li class="menu-active menu-has-children"><a href="">Minha Conta</a>
								<ul>
								  <li><a href="../clientarea/logarTeste.php">Logar-se</a></li>
								  <li><a href="../clientarea/register.php">Registrar-se</a></li>
								</ul>
							</li>			
			      	</nav>	    		
		    	</div>
		    </div>
		</header>

		<section class="service-area section-gap" id="vantagens">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-60 col-lg-10">
						<div class="title text-center">
							<h1 class="mb-10 text-black">Loja</h1>
							<p>Todos os produtos disponíveis abaixo.</p>
						</div>
					</div>
			</div>						
			
			<section class="content" id="products">
				<div class="container">
					<div class="products">
						<div class="row">
							<?php  
								if(isset($_GET['search'])){
								$pesquisa = $_GET['search'];
								
								$query = mysqli_query($conexao, "SELECT * FROM produtos WHERE nome LIKE '%$pesquisa%'");
								$rows = mysqli_num_rows($query);
								while($row = mysqli_fetch_array($query)){
								if($row['nome'] != 'MrCurso'){
							?>
							<div class="col-md-3">
								<div class="card">
									<p class="name"><?php echo $row['nome'] ?></p>
									<p class="price"><span>R$</span><?php echo $row['valor'] ?></p>
								<i class="fas fa-box-open"></i>
									<div class="container">
										<a href="fatura.php?produto=<?php echo $row['id'] ?>" class="btn btn-logs">Comprar</a>
										<a href="script.php?id=<?php echo $row['id'] ?>" class="btn btn-log">Detalhes</a>
									</div>
									</div>
								</div>
								<?php } 
								} }else{
									$query = mysqli_query($conexao, "SELECT * FROM produtos");
									while($row = mysqli_fetch_array($query)){
									if($row['nome'] != 'MrCurso'){ ?>
								<div class="col-md-3">
									<div class="card">
										<p class="name"><?php echo $row['nome'] ?></p>
										<p class="price"><span>R$</span><?php echo $row['valor'] ?></p>
									<i class="fas fa-box-open"></i>
									<div class="container">
										<a href="fatura.php?produto=<?php echo $row['id'] ?>" class="btn btn-logs">Comprar</a>
										<a href="script.php?id=<?php echo $row['id'] ?>" class="btn btn-log">Detalhes</a>
									</div>
								</div>
							</div>
							<?php } } }  ?>
						</div>
					</div>
				</div>
			</section>

			<section class="service-area section-gap" id="vantagens"></section>
				<div class="row">
					<div class="container">
						<div class="payments">
							<h3>Métodos de Pagamento</h3>
							<ul>
								<li class="payment-mercadopago">Mercado<br>Pago</li>
								<li class="payment-boleto">Boleto<br>bancário</li>
								<li class="payment-visa">Visa</li>
								<li class="payment-mastercard">Master<br>Card</li>
								<li class="payment-americanexpress">American<br>Express</li>
								<li class="payment-hipercard">Hipercard</li>
								<li class="payment-dinersclub">Diners<br>Club</li>
								<li class="payment-elo">Elo</li>
								<li class="payment-pix">Pix (Pagamento Cai na Mesma Hora)</li>
							</ul>
						</div>
					</div>
				</div>
			</div>	
		</section>


		<div class="container">
			<footer class="py-3 my-4">
			  <ul class="nav justify-content-center border-bottom pb-3 mb-3">
			  </ul>
			  <p class="text-center text-muted">&copy; 2022 Meta Codes - MTA:SA</p>
			</footer>
		  </div>

		<script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
		<script src="../../cdnjs.cloudflare.com/ajax/libs/popper/js/1.12.9/umd/popper.min.html" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="../assets/js/vendor/bootstrap.min.js"></script>			
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  		<script src="../assets/js/easing.min.js"></script>			
		<script src="../assets/js/hoverIntent.js"></script>
		<script src="../assets/js/superfish.min.js"></script>	
		<script src="../assets/js/jquery.ajaxchimp.min.js"></script>
		<script src="../assets/js/jquery.magnific-popup.min.js"></script>	
		<script src="../assets/js/owl.carousel.min.js"></script>			
		<script src="../assets/js/jquery.sticky.js"></script>
		<script src="../assets/js/jquery.nice-select.min.js"></script>			
		<script src="../assets/js/parallax.min.js"></script>	
		<script src="../assets/js/mail-script.js"></script>	
		<script src="../assets/js/main.js"></script>	

		
	</body>

<!-- Mirrored from www.tommybr.com/loja/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Oct 2020 22:23:38 GMT -->
</html>