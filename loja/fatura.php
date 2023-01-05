<?php 
include('../app/php/conexao.php');
include('../app/php/verify.php');
 	
 if (isset($_GET['produto'])) {
 	$produto = $_GET['produto'];
 	$query = "SELECT * FROM produtos WHERE id='$produto'";

  $result = mysqli_query($conexao, $query);
  $row = mysqli_num_rows($result);
while ($rows = mysqli_fetch_array($result)){
    $nome = $rows['nome'];
    $valo = $rows['valor'];
}

 	if($row == 0){
	 	header('Location: index.php');
	 	exit();
	 	return;
 	}
 }else{
 	header('Location: index.php');
 	exit();
 	return;
 }
 
 // Aqui você tras junto com POST ou GET o ID do produto para montar a fatura
 // Para buscar por ex o valor e o produto que é
 // Aqui também você tras o id do usuario que está gerando está fatura
 
 // No meu caso eu vou colocar o d so usuario como 1, pois se trata de um exemplo
 $email = $_SESSION['usuario'];
 //Vamos pegar a data para adicionar a fatura
 // Valor da fatura (valor do produto ou do carrinho total)
  
   //Vamos criar uma referencia  (essa será nossa referencia passada para o mercado pago)
   $ref = rand(1,9999); // Ex: 53801
  
  //Status recebe Pendente
  $status = "Pendente";
  // Forma recebe MP
  $forma  = "Mercado Pago";

  //Registrar a fatura
  $query = "INSERT INTO faturas(cliente,produto,referencia,forma,status,valor,setado) VALUES ('$email','$nome','$ref','Mercado Pago','Pendente','$valo','nao');";
      $result = mysqli_query($conexao,$query);
  if($result){
      //Buscar está fatura no banco
      $query = mysqli_query($conexao,"SELECT * FROM faturas WHERE referencia='$ref' LIMIT 1");
      if($query){
        $fat = mysqli_fetch_assoc($query);
        $id = $fat['referencia'];
        echo "<script>location.href='finaliza.php?id=$id';</script>";
      }else{
        echo "<script>location.href='index.php?ERROR';</script>";
      }

  }else{
      echo "<script>location.href='index.php?ERROR1';</script>";
    }



?>