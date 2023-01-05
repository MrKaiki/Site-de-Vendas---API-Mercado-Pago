<?php
include('../app/php/conexao.php');
session_start();
?>


<!DOCTYPE html>
<html lang="pt-br" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="UTF-8">

		<title>MrKaiki Scripting - MTA</title>
			
		<link rel="	shortcut icon" href="../assets/img/favicon.ico">		
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
								<li class="menu-active menu-has-children"><a href="../loja/index.php">Loja</a>
									<ul>
										  <li><a href="../loja/index.php">Pronto a entrega</a></li>
									</ul>
								  </li>
					  		</li>
								<li><a href="https://discord.gg/YPAF48ZRgV">Discord</a></li>
								<li><a href="../termos/termos.php">Termos</a></li>
							  <li class="menu-active menu-has-children"><a href="">Minha Conta</a>
								<ul>
								  <li><a href="logarTeste.php">Logar-se</a></li>
								  <li><a href="register.php">Registrar-se</a></li>
								</ul>
							</li>			
			      	</nav>	    		
		    	</div>
		    </div>
		</header>

		<section class="unique-feature-area section-gap" id="last">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content col-lg-10">
						<div class="title text-center">
                            <img src="../assets/img/logo.png" alt="">
							<h1 class="mb-5 text-white">Área do cliente</h1>
						</div>
					</div>
				</div>						
				<div class="row">
					<div class="col-lg-4 col-md-6 col-centered">
						<div class="container-modal-1">
                            <form action="logar.php" method="post">
                                <h4>Login</h4>
                                <br>				
                                
                                <div class="input-group-icon mt-10"><div class="icon"><span class="lnr lnr-user"></span></div>
                                    <input type="email" name="email" placeholder="Email" class="single-input single-input-primary">
                                </div>
                                
                                <div class="input-group-icon mt-10 pb-30"><div class="icon"><span class="lnr lnr-lock"></span></div>
                                    <input type="password" name="password" placeholder="Senha" class="single-input single-input-primary">
                                </div>															

                                <div class="pb-10">
									<input type="hidden" value="login" name="btn_F">
                                    <input class="text-uppercase genric-btn primary-border circle" type="submit" value="Acessar" name="btn_Login">
                                </div>
                                                                
                                <hr>
							
                                <div class="pt-10" >
                                    <p>Não possui uma conta? <a href="register.php">Clique aqui!</a></p>
									<?php
									if(isset($_SESSION['nao_autenticado'])):
									?>
									<div class="notification is-danger text-danger">
									<p>ERRO: Usuário ou senha inválidos.</p>
									</div>
									<?php
									endif;
									unset($_SESSION['nao_autenticado']);
									?>
                                </div>		
                            </form>
						</div>
					</div>																										
				</div>
			</div>	
		</section>

		<div class="container">
			<footer class="py-3 my-4">
				<ul class="nav justify-content-center border-bottom pb-3 mb-3">
				</ul>
				<p class="text-center text-muted">&copy; 2022 META CODES - MTA:SA</p>
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

</html>