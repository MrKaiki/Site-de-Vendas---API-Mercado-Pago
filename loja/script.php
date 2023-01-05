<?php
include('../app/php/conexao.php');
session_start();

if(empty($_REQUEST['id'])){
  header("Location: index.php");
}else{
  $idscript = $_REQUEST['id'];

  $query = "SELECT * FROM produtos WHERE id='$idscript' ";
  $result = mysqli_query($conexao, $query);
  while ($rows = mysqli_fetch_array($result)){
		$nome = $rows['nome'];
    $desc = $rows['description'];
    $version = $rows['version'];
    $valor = $rows['valor'];
    $vendas = $rows['vendas'];
    $video = $rows['video'];
	}
}

?>

<!DOCTYPE html>
<html lang="pt-br" >
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="UTF-8">

	<title>MrKaiki Scirpting - MTA</title>
		
	<link rel="shortcut icon" href="assets/img/favicon.ico">		
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
    



    <header id="header" id="home">
          <div class="container">
              <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="#"><img src="../ssets/img/logo.png" alt="" title="" /></a>
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

        <section class="scriptcontent">
          <div class="container">
            <div class="row">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb text-center">
                <li class="breadcrumb-item" style="margin-left: 20px;">Início</li>
                <li class="breadcrumb-item">Scripts</li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $nome ?></li>
              </ol>
            </nav>

              <div class="col-md-6">
                <div class="demo1">
                  <p class="name"><?php echo $nome ?></p>
                  <p class="version">Versão Atual: <?php echo $version ?></p><p class="vendas">Compras: <?php echo $vendas ?></p>
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <p class="desc"><?php echo $desc ?></p>
                  <p class="price"><span>R$</span><?php echo $valor ?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="demo2">
                  <p class="name">Últimos Updates</p>
                  <div class="dash-content">
            <?php
        $query = mysqli_query($conexao, "SELECT * FROM updates WHERE script='$nome'");
        while($row = mysqli_fetch_array($query)){
          ?>
              <div class="container">
                <div class="row">
                  <div class="col-md-1 text-center">
                    <i class="fas fa-upload"></i>
                  </div>
                  <div class="col-md-8 text-start">
                    <p class="nome"><?php echo $row['script'] ?>:</p>
                    <p class="desc"><?php echo $row['text'] ?></p>
                </div>
              </div>
        </div>
<?php } ?>
      </div>
                </div>
            </div>
            </div>
          </div>
        </section>

      <section class="service-area section-gap" id="vantagens">
        <div class="container">
				  <div class="row">
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