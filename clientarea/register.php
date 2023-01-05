
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

		<title>MrKaiki</title>
			
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
	</head>
	<body>
	<header id="no-banner" id="home" class="header-active">
		<div class="container">
		    	<div class="row align-items-center justify-content-between d-flex">
				    <div id="logo">
							<a href="#"><img src="../assets/img/logo.png" alt="" title="" /></a>
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
                            
							<h1 class="mb-5 text-white">Área do cliente</h1>
						</div>
					</div>
				</div>						
				<div class="row">
					<div class="col-lg-4 col-md-6 col-centered">
						<div class="container-modal-1">
                            


                            <form method="POST" action="registrar.php">
                                <h4>Registrar</h4>
                                <br>				
                                
                                <div class="input-group-icon mt-10 pb-10"><div class="icon"><span class="lnr lnr-user"></span></div>
                                    <input type="text" name="Nome" placeholder="Nome" class="single-input single-input-primary">
                                </div>
                                
                                <div class="input-group-icon pb-10"><div class="icon"><span class="lnr lnr-envelope"></span></div>
                                    <input type="email" name="Email" placeholder="Email" class="single-input single-input-primary">
                                </div>	
                                													
                                <div class="input-group-icon pb-10"><div class="icon"><span class="lnr lnr-lock"></span></div>
                                    <input type="password" name="Senha" placeholder="Senha" class="single-input single-input-primary">
                                </div>	
                                <div class="input-group-icon"><div class="icon"><span class="lnr lnr-lock"></span></div>
                                    <input type="password" name="rSenha" placeholder="Confirmar senha" class="single-input single-input-primary">
                                </div>	

                                <div class="form-check form-switch">
								<input class="form-check-input" name="check" type="checkbox" id="flexSwitchCheckChecked">
								<label class="form-check-label" for="flexSwitchCheckChecked">Concordo com os <a href="termos.php">Termos & Condições</a></label>
								</div>
								<br>						

                                <div class="pb-10">
                                    <input type="submit" class="text-uppercase genric-btn primary-border circle" name="btn_Register" value="Registrar">
                                </div>
                                                                
                                <hr>
							
                                <div class="pt-10" >
                                    <p>Já possui uma conta? <a href="logarTeste.php">Clique aqui!</a></p>
									<?php
									if(isset($_SESSION['usuario_existe'])):
									?>
									<div class="notification is-info">
										<p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
									</div>
									<?php
									endif;
									unset($_SESSION['usuario_existe']);
									?>

									<?php
									if(isset($_SESSION['status_cadastro'])):
									?>
									<div class="notification is-success">
									<p>Cadastro efetuado!</p>
									<p>Faça login informando o seu usuário e senha <a href="logarTeste.php">aqui</a></p>
									</div>
									<?php
									endif;
									unset($_SESSION['status_cadastro']);
									?>

				                   <?php
									if(isset($_SESSION['senhasncoecidem'])):
									?>
									<div class="notification is-danger">
									<p>ERRO: Senhas não são iguais.</p>
									</div>
									<?php
									endif;
									unset($_SESSION['senhasncoecidem']);
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

<!-- Mirrored from www.tommybr.com/clientarea/?page=register by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Oct 2020 22:23:38 GMT -->
</html>