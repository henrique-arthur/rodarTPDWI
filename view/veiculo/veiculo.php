<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../../global.css" rel="stylesheet">
    <link href="veiculo.css" rel="stylesheet">
    <script type="text/javascript" src="veiculo.js"></script>
    <?php require_once '../../controller/veiculoController.php'?>
    <title>Rodar | Aluguel de Veículos</title>
</head>
<body>
  <?php
    if (array_key_exists("e", $_GET)) {
        $e = $_GET["e"];
    } else {
        
      $e = "";
    }
  ?>
  <div class="container">
    <div class="nav">
      <div class="titulo">RODAR</div>
      <a class="sair" href="../menu/menu.php">
          <span class="material-icons voltarIcon">
            arrow_back
          </span>
        </a>
    </div>

  <div id="cform" class="confirm-container">
    <div class="div-voltar">
      <a class="sair" onclick="voltarAluguel()">
        <span class="material-icons voltarIcon">
          arrow_back
        </span>
      </a>
    </div>
    <form class="formulario" action="../../controller/alugarController.php" method="post">
      <div class="titulo">Data de Aluguel</div>
      <input id="dataAluguel" min="" class="entrada entrarCampos" onclick="habilitarInput()" type="date" name="dataAluguel" placeholder="Data de aluguel" required>
      <div class="titulo">Data de Devolução</div>
      <input onclick="definirData()" id="dataDevolucao" min="" class="entrada entrarCampos" type="date" name="dataDevolucao" placeholder="Data de devolução" disabled required>
      <p style="color: #000;" id="pagarTexto"></p>
      <input class="entrada entrarBotao" type="submit" name="enviar" value="Alugar">  
    </form>
  </div>

    <div id="sform">
      <?php carregarVeiculo();?>
      <!-- <div class="elemento">
        <div class="left-content">
          <img class="imgCarro" src="../../assets/veiculos/dodge_ram_rebel_2021.png" alt="" srcset="">
          <div class="retire">
            <p>RETIRE NA HORA</p>
          </div>
          <a class="alugarBtn" href="#">
            <div class="alugarTexto">ALUGAR</div>
          </a>
        </div>
        <div class="right-content">
          <div class="top-content">
            <div class="nomeVeiculo">
              <p>Wolksvagen Polo 2020</p>
            </div>
            <div class="info">
            <div class="left-info">
              <div class="tipoCambio">
                <img src="../../assets/icons/gearbox.svg" alt="" srcset="">
                <p>Automático</p>
              </div>
              <div class="qtdPortas">
              <img src="../../assets/icons/door.svg" alt="" srcset="">
                <p>4 Portas</p>
              </div>
            </div>
            <div class="right-info">
              <div class="cor">
              <img src="../../assets/icons/paint.svg" alt="" srcset="">
                <p>Roxo</p>
              </div>
              <div class="tipoCombustivel">
              <img src="../../assets/icons/gas.svg" alt="" srcset="">
                <p>Gasolina</p>
              </div>
            </div>
            </div>
          </div>
          <div class="bottom-content">
            <p>R$ 135,00/dia</p>
          </div>
      </div>
    </div> -->
      <!-- <div class="elemento descricao">
        <p class="descricaoTexto">Descrição:</p>
        <div class="listaDesc">
          <p>teste</p>
          <p>teste</p>
          <p>teste</p>
          <p>teste</p>
          <p>teste</p>
          <p>teste</p>
          <p>teste</p>
          <p>teste</p>
          <p>teste</p>
          <p>teste</p>
          <p>teste</p>
        </div>
      </div> -->
    </div>
  </div>

  <div id="msg" class="mensagem-container <?php echo $e ?>">
    <p id="textoNotificacao" class="mensagem">Erro, usuário não está logado.</p>
        <span onclick="sair()" id="fechar" class=" material-icons">
            close
        </span>
    </div>
    
    <?php
    if (array_key_exists("status", $_GET)) {
      $status = $_GET["status"];
      if($status == 'sucess'){
        ?><script>msgStatus(1)</script><?php
      }else if($status == 'error'){
        ?><script>msgStatus(0)</script><?php
      }
  }
  ?>
</body>
</html>