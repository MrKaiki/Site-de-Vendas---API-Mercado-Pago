<?php
include('../app/php/conexao.php');
include('../app/php/verify.php');

if(!$_SESSION['admin']) {
	header('Location: http://localhost/sites/kaiki/login.php');
	exit();
}

$email = $_SESSION['usuario'];
$query = "SELECT * FROM accounts WHERE Email='$email'";

$result = mysqli_query($conexao, $query);

while ($rows = mysqli_fetch_array($result)){
    $nome = $rows['User'];
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
    <title>MrKaiki Scirpting - MTA</title>
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
                <i class="fas fa-user-shield"></i>
              </div>
            </div>
            <div class="col-md-10 text-start">
              <p class="name">Painel Admin <a href="#"><i class="fas fa-sign-out-alt"></i></a></p>

              <p class="email"><?php echo $email ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="side-body">
      <ul>
        <li class="link">
          <a href="index.php" class="active"><i class="fas fa-user-tag"></i> Clientes</a>
        </li>
        <li class="link">
          <a href="scripts.php"><i class="fas fa-box-open"></i> Scripts</a>
         </li>
         <li class="link">
           <a href="licenses.php"><i class="far fa-copy"></i> Licenças</a>
         </li>
         <li class="link active">
          <a href="faturas.php"><i class="far fa-edit"></i> Faturas</a>
         </li>
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
                Clientes
              </p>
              <p class="counters">
              <?php
            $query = mysqli_query($conexao, "SELECT * FROM accounts");
            $row_cnt = $query->num_rows;
            echo "$row_cnt";
        ?>
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="stat">
              <p class="title">
                Scripts
              </p>
              <p class="counters">
              <?php
            $query = mysqli_query($conexao, "SELECT * FROM produtos");
            $row_cnt = $query->num_rows;
            echo "$row_cnt";
        ?>
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="stat">
              <p class="title">
                Vendas
              </p>
              <p class="counters">
              <?php
            $query = mysqli_query($conexao, "SELECT * FROM faturas WHERE status='Aprovado'");
            $row_cnt = $query->num_rows;
            echo "$row_cnt";
        ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

        <div class="container" style="padding: 0px;">
          <div class="row">
          <div class="col-md-12">
            <h4 class="titled">Faturas</h4>
            <div class="dash-content">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Clientes</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Referência</th>
                    <th scope="col">Valor</th>
                  </tr>
                </thead>
                <tbody>
                <?php
        $query = mysqli_query($conexao, "SELECT * FROM faturas");
        while($row = mysqli_fetch_array($query)){
          ?>
                  <tr>
                    <th scope="row"><?php echo $row['id'] ?></th>
                    <td><?php echo $row['cliente'] ?></td>
                    <td><?php echo $row['produto'] ?></td>
                    <td><?php echo $row['referencia'] ?></td>
                    <td>R$ <?php echo $row['valor'] ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
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