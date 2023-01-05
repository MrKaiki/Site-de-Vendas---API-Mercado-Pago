<?php

 if($_REQUEST['collection_id'] || $_REQUEST['id']){
   
   include("conexao.php");
   include('app/MercadoPago/lib/mercadopago.php');
   include('app/PagamentoMP.php');
   
   $pagar = new PagamentoMP;
   
   if(isset($_REQUEST['collection_id'])):
    $id =  $_REQUEST['collection_id'];
   elseif(isset($_REQUEST['id'])):
    $id =  $_REQUEST['id'];
   endif; 
   
   
   $retorno = $pagar->Retorno($id , $conn);
  echo '<script>location.href="panel/licencas.php"</script>';
   
 }
 
 


?>