<?php
include('../app/php/conexao.php');
include('../app/php/verify.php');

if(!$_SESSION['admin']) {
	header('Location: https://mrkaikiscripter.com.br/login.php');
	exit();
}

$email = $_SESSION['usuario'];

if(isset($_REQUEST['delete'])){
    $id = $_REQUEST['delete'];

    $query = mysqli_query($conexao, "SELECT * FROM produtos WHERE id='$id'");

    $result = mysqli_num_rows($query);

    if($result > 0){
        while ($rows = mysqli_fetch_array($query)){
            $result = mysqli_query($conexao, "DELETE FROM produtos WHERE id='$id'") or die("Failed to query database");
        if ($result) {
            header("Location: scripts.php"); 
        } else {
            header("Location: scripts.php"); 
        }
        }
    }
} elseif(isset($_REQUEST['editProduct'])){
    $id = $_REQUEST['editProduct'];

    $query = mysqli_query($conexao, "SELECT * FROM produtos WHERE id='$id'");

    $result = mysqli_num_rows($query);

    if($result > 0){
        while ($rows = mysqli_fetch_array($query)){
            $nome = $rows['nome'];
            $desc = $rows['description'];
            $version = $rows['version'];
            $video = $rows['video'];
            $valor = $rows['valor'];
            $download = $rows['arquivo'];
        }
    }

    if(isset($_POST['attScript'])){
      $nome = $_POST['nome'];
      $desc = nl2br($_POST['desc']);
      $video = $_POST['video'];
      $version = $_POST['version'];
      $valor = $_POST['valor'];
      $change = nl2br($_POST['change']);
      $download = $_POST['link'];

      $query = "UPDATE produtos SET nome='$nome',description='$desc',video='$video',valor='$valor',version='$version',arquivo='$download' WHERE id='$id'";
      $result = mysqli_query($conexao,$query);
      if ($result) {
        if(empty($_POST['change'])){
        $query = "INSERT INTO updates(script,text) VALUES ('$nome','$change');";
        } else {
        $query = "INSERT INTO updates(script,text) VALUES ('$nome','Atualização não identificada');";
        }
        $result = mysqli_query($conexao,$query);
        header("Location: scripts.php");
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
        <h5 class="modal-title">Atualizar Script</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="POST" enctype="multipart/form-data">
          <input type="text" name="nome" placeholder="Nome do script" value="<?php echo $nome ?>">
          <textarea name="desc" placeholder="Descrição do script"><?php echo $desc ?></textarea>
          <input type="text" name="video" placeholder="ID Vídeo do script" value="<?php echo $video ?>">
          <input type="text" name="version" placeholder="Versão inicial do script" value="<?php echo $version ?>">
          <input type="number" name="valor" placeholder="Valor do Script" value="<?php echo $valor ?>">
          <br>
          <input type="text" name="link" placeholder="Download do Script" value="<?php echo $download ?>">
          <br>
          <textarea name="change" placeholder="Changelog do script"></textarea>
          <button type="submit" name="attScript" class="confirm btn btn-success">Atualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php 
if(isset($_REQUEST['editProduct'])){
    $id = $_REQUEST['editProduct'];
    echo "<script> $(window).on('load', function(){
        $('#modalEdit').modal('show');
    }); </script>";
} 
?>
</body>
</html>