<?php
include('../app/php/conexao.php');
include('../app/php/verify.php');

$email = $_SESSION['usuario'];
$query = "SELECT * FROM accounts WHERE Email='$email'";

$result = mysqli_query($conexao, $query);

while ($rows = mysqli_fetch_array($result)){
  $idcl = $rows['id'];
    $nome = $rows['User'];
    $scripts = $rows['Scripts'];
    $licenses = $rows['Licenses'];
    $gasto = $rows['Valor'];
    $pass = $rows['Senha'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Vitin">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../app/css/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <link rel='icon' href='../app/img/favicon.png' type='image/png'>
    <link rel="stylesheet" href="../app/css/color.css">
    <title>MrKaiki Scripting - MTA</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row flex-nowrap">
  <div class="sidebar col-auto col-md-3 col-xl-2 px-sm-2 px-0">
    <div class="side-top">
      <div class="infos">
        <div class="container">
          <div class="row">
            <div class="col-md-2 text-start">
              <div class="user">
                <i class="far fa-user"></i>
              </div>
            </div>
            <div class="col-md-10 text-start">
              <p class="name"><?php echo $nome ?> <a href="#"><i class="fas fa-sign-out-alt"></i></a></p>

              <p class="email"><?php echo $email ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="side-body">
      <ul>
        <li class="link active">
          <a href="#" class="active"><i class="fas fa-home "></i> Home</a>
        </li>
        <li class="link">
          <a href="scripts.php"><i class="fas fa-box-open"></i> Scripts</a>
         </li>
         <li class="link">
           <a href="licencas.php"><i class="far fa-copy"></i> Licenças</a>
         </li>
         <li class="link">
          <a href="faturas.php"><i class="far fa-edit"></i> Faturas</a>
         </li>
         <?php 
         if($_SESSION['admin']) {
	     echo '<li class="link">
       <a href="../admin/index.php"><i class="fas fa-user-shield"></i> Admin</a>
      </li>';
        }
        ?>
      </ul>
    </div>
  </div>
  <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0">
  </div>
  
  <div class="col py-3">
    <div class="stats">
    <div class="container">
      <div class="row text-center">
          <div class="col-md-4">
            <div class="stat">
              <p class="title">
                Resource Adquiridos
              </p>
              <p class="counters">
              <?php
            $query = mysqli_query($conexao, "SELECT * FROM licenses WHERE idclient='$idcl'");
            $row_cnt = $query->num_rows;
            echo "$row_cnt";
        ?>
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="stat">
              <p class="title">
                Licenças
              </p>
              <p class="counters">
              <?php
            $query = mysqli_query($conexao, "SELECT * FROM licenses WHERE idclient='$idcl'");
            $row_cnt = $query->num_rows;
            echo "$row_cnt";
        ?>
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="stat">
              <p class="title">
                Total Gasto
              </p>
              <p class="counters">
                <span>R$</span><?php echo $gasto ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

        <div class="container" style="padding: 0px;">
          <div class="row">
          <div class="col-md-7">
            <h4 class="titled">Últimas Atualizações</h4>
            <div class="dash-content">
            <?php
        $query = mysqli_query($conexao, "SELECT * FROM updates ORDER BY id ASC");
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

      <div class="col-md-5">
        <h4 class="titled">Top Compradores</h4>
        <div class="topcom">
        <?php
        $query = mysqli_query($conexao, "SELECT * FROM accounts ORDER by Scripts DESC LIMIT 10");
        while($row = mysqli_fetch_array($query)){
          ?>
            <div class="container">
            <div class="row">
              <div class="col-md-2">
                <img src="https://icon-library.com/images/profile-png-icon/profile-png-icon-27.jpg">
              </div>
              <div class="col-md-6 text-start">
                <p class="nome"><?php echo $row['User'] ?></p>
                <p class="top"><?php echo $row['Scripts'] ?> Compras</p>
              </div>
              <div class="col-md-4">
                <i class="fas fa-trophy"></i>
              </div>
            </div>
          </div>
            <?php } ?>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
</div>
       
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

</body>
</html>