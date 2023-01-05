<?php
include('app/php/conexao.php');
session_start();
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
    <link rel="stylesheet" href="app/css/style.css">
    <link rel='icon' href='app/img/favicon.png' type='image/png'>
    <title>Termos</title>
</head>
<body>
  <section class="apresentation">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-md">
          <img src="app/img/logo.png" class="navbar-brand">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0" style="margin-left: 15px;" >
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php"> <i class="fas fa-home"></i> Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#products">
                    <i class="fas fa-code"></i> Scripts
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="termos.php"><i class="fas fa-book-open"></i> Termos</a>
              </li>
            </ul>

              <?php if(!isset($_SESSION['usuario'])) {
              echo '<a class="btn btn-log" href="login.php" type="submit"><i class="far fa-user"></i> Área Do Cliente</a>';
              } else {
              echo '<a class="btn btn-log" href="panel/index.php" type="submit"><i class="far fa-user"></i> Área Do Cliente</a>';
              }
              ?>
          </div>
        </div>
      </nav>


              <section id="terms" class="my-5">
                <div class="container">
                  <div class="row text-start">
                    <h2 class="title">Termos & Condições</h2>
                    <p>É de total responsabilidade do cliente verificar periodicamente se há alterações nesses termos!</p>
                    <ul>
                      <li class="say5">
                        <p><span>1 - Reembolso e Trocas:</span> <br>
                        <b>1.1</b> - Nós da loja MrKaiki Scripting - MTA damos reembolso somente se: O resource ainda possuir nossa garantia, for impossível corrigir o bug do resource e impossível trocar o resource por outro de mesmo valor.<br>
                        <b>1.2</b> - A troca só é feita se for impossível corrigir o bug do resource e ele possuir nossa garantia. A troca só é feita por outro resource de mesmo valor.<br>
                        <b>1.3</b> - Caso deseje Reembolso, a equipe de AVALIAÇÃO entrará em contato para ver se te fato você se enquadra nos requisitos de pedido de reembolso, caso haja essa comprovação, será feito uma cobrança de taxa de desistência no valor de 35% sobre o valor pago.
                        </p>
                      </li>
                      <li>
                        <p><span>2 - Desacordo com pedido:</span> <br>
                        <b>2.1</b> - Se acontecer de o resource não estiver como prometido pela loja, nós da loja MrKaiki Scripting - MTA iremos arrumá-lo, desde que ele tenha nossa garantia. Se for impossível arrumar o resource, trocaremos esse resource por outro de mesmo valor. Se for impossível a troca, dai sim reembolsaremos o cliente.</p>
                      </li>
                      <li>
                        <p><span>3 - Estado do produto:</span> <br>
                        <b>3.1</b> - Após comprar um resource do site, o cliente está ciente de que está comprando no estado em que ele se encontra. Caso o cliente queira alguma alteração, ele será cobrado pela loja. Essa alteração fica a critério da loja se vai fazer ou não. O cliente não será cobrado se a alteração for recusada pela loja.</p>
                      </li>
                      <li>
                        <p><span>4 - Prazo de entrega:</span> <br>
                        <b>4.1</b> - Se a forma de pagamento for com Mercado Pago, o prazo pode variar de IMEDIATO a 24 horas úteis.<br>
                        <b>4.2</b> - Se a forma de pagamento for com Paypal o prazo pode variar de IMEDIATO a 24 horas úteis.<br>
                        <b>4.3</b> - Se a forma de pagamento for com Pix, o prazo pode variar de IMEDIATO a 48 horas úteis.<br>
                        <b>4.4</b> - Se a forma de pagamento for com boleto, o prazo pode variar de IMEDIATO a 72 horas úteis.<br>
                        <b>4.5</b> - O prazo de entrega só começa a contar após o pagamento entrar em nossa conta.<br>
                        <b>4.6</b> - Esses prazos não se aplicam aos resources de encomendas, pois estes podem variar para além dos prazos acima estabelecidos.</p>
                      </li>
                      <li>
                        <p><span>5 - Pagamento:</span> <br>
                        <b>5.1</b> - Aceitamos 4 formas de pagamento no momento: Mercado Pago, Pix, Paypal e Boleto<br>
                        <b>5.2</b> - Se for pego enviando comprovantes falsos, o cliente será banido da loja e perderá o acesso aos resources contidos nela sem direito a reembolso, trocas e nem qualquer serviço adicional.</p>
                      </li>
                      <li>
                        <p><span>6 - Garantia:</span> <br>
                        <b>6.1</b> - Os resources comprados em nossa loja possuem nossa garantia por tempo indeterminado. Os resources encomendados possuem nossa garantia válida por até 3 meses após a entrega do respectivo resource.<br>
                        <b>6.2</b> - O cliente possui a garantia de que iremos corrigir qualquer bug do resource se ele possuir nossa garantia.<br>
                        <b>6.3</b> - Se o cliente fizer alterações no resource, este deixa de ter nossa garantia e não poderá ser reembolsado, trocado e nem corrigido.<br>
                        <b>6.4</b> - Somente alterações feitas pela loja não violam nossa garantia.</p>
                      </li>
                      <li>
                        <p><span>7 - Violação de Conduta:</span><br>
                        <b>7.1</b> - Revender ou distribuir os resources de nossa loja sem nossa autorização, sendo o resource por encomenda ou não, é expressamente proibido. Se comprovado, o cliente será banido de nossa loja e perderá o acesso aos resources contidos nela sem direito a reembolso, trocas e nem qualquer serviço adicional. O cliente pode inclusive responder judicialmente por tal violação.<br>
                        <b>7.2</b> - Qualquer tentativa de calote também resultará no banimento do cliente em nossa loja, fazendo com que ele perca o acesso aos resources contidos nela.</p><br>
                      </li>
                      <p style="font-weight: 600; color:#efefef;">Ao comprar qualquer produto desta loja você está automaticamente concordando com os termos de uso do site! <br><br>Última atualização dos termos: (15/10/2021)</p>                     
                      </ul>  
                  </div>
                </div>
              </section>

              <section class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="app/img/logo.png">
          <p class="copy">Todos os direitos reservados ©️</p>
        </div>
        <div class="col-md-6 text-end my-4">
          <a class="social" href="https://discord.gg/w4Y9RDY8A2"><i class="fab fa-discord"></i></a>
          <a class="social" href="https://www.youtube.com/channel/UC-sx_mjFgI-TENM-3F0XoVQ"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </div>
  </section>
        </section>
</body>
</html>