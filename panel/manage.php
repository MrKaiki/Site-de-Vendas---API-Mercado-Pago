<?php
include('../app/php/conexao.php');
include('../app/php/verify.php');

$email = $_SESSION['usuario'];

if(isset($_REQUEST['editLicense'])){
    $id = $_REQUEST['editLicense'];

    $query = mysqli_query($conexao, "SELECT * FROM licenses WHERE id='$id'");

    $result = mysqli_num_rows($query);

    if($result > 0){
        while ($rows = mysqli_fetch_array($query)){
            $script = $rows['script'];
            $ip = $rows['ip'];
            $porta = $rows['porta'];
        }
    }

    if(isset($_POST['attLicense'])){
      $ip = $_POST['ip'];
      $porta = $_POST['porta'];

      $query = "UPDATE licenses SET ip='$ip',porta='$porta' WHERE id='$id'";
      $result = mysqli_query($conexao,$query);
      if ($result) {
        header("Location: licencas.php");
      } 
    }
} 


?>

<html>
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
<div class="modal" id="modalEdit" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Atualizar Licença</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="POST" enctype="multipart/form-data">
          <input type="text" name="nome" placeholder="Nome do script" value="<?php echo $script ?>" disabled>
          <input type="text" name="ip" placeholder="IP" value="<?php echo $ip ?>">
          <input type="text" name="porta" placeholder="Porta" value="<?php echo $porta ?>">
          <button type="submit" name="attLicense" class="confirm btn btn-success">Atualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php 
if(isset($_REQUEST['editLicense'])){
    $id = $_REQUEST['editLicense'];
    echo "<script> $(window).on('load', function(){
        $('#modalEdit').modal('show');
    }); </script>";
} 
?>
</body>
</html>