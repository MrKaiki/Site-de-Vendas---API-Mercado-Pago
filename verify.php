<?php 
include('conexao.php');

$query = mysqli_query($conn, "SELECT * FROM faturas WHERE status='Aprovado'");
$ver = mysqli_fetch_array($query);
if($ver['setado'] == 'nao'){
$idfatura = $ver['id'];
$client = $ver['cliente'];
$produto = $ver['produto'];
$valor = $ver['valor'];
$ref = $ver['referencia'];
$valor = str_replace('.',',',$ver['valor']);

    $query = mysqli_query($conn, "UPDATE faturas SET setado='sim' WHERE id='$idfatura'");

    $query2 = mysqli_query($conn, "SELECT * FROM accounts WHERE Email='$client'");
    $ver2 = mysqli_fetch_array($query2);
    $atualalor = $ver2['Valor'];
    $idclient = $ver2['id'];
    $user = $ver2['User'];
    $valor = $valor + $atualalor;

    $query = mysqli_query($conn, "UPDATE accounts SET Valor='$valor' WHERE Email='$client'");

    $query3 = mysqli_query($conn, "SELECT * FROM produtos WHERE nome='$produto'");
    $ver3 = mysqli_fetch_array($query3);
    $idproduto = $ver3['id'];


    $key = md5(rand(0, 9999));

  $license = "KaikiLicense2021_".$key;

    $query = mysqli_query($conn, "INSERT INTO licenses(idclient,idscript,script,license,ip,porta,cliente,status) VALUES ('$idclient','$idproduto','$produto','$license','0.0.0.0','000000','$user','Validated');");
  }
?>



