<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../../global.css" rel="stylesheet">
    <link href="perfil.css" rel="stylesheet">
    <script type="text/javascript" src="perfil.js"></script>
    <?php require_once '../../controller/perfilController.php'?>
    <title>Rodar | Aluguel de Veículos</title>
</head>
<body>
  <div class="container">
    <div class="nav">
      <div class="titulo">RODAR</div>
        <a class="sair" href="../perfil/perfil.php">
          <span class="material-icons voltarIcon">
            arrow_back  
          </span>
        </a>
      </div>
      <div id="cform" class="confirm-container cform">
        <?php
          $id = filter_input(INPUT_GET, 'idVeiculo', FILTER_SANITIZE_STRING);
          $nome = filter_input(INPUT_GET, 'nomeVeiculo', FILTER_SANITIZE_STRING); 
          $img = filter_input(INPUT_GET, 'imgVeiculo', FILTER_SANITIZE_STRING);
          $tipo = filter_input(INPUT_GET, 'tipo', FILTER_SANITIZE_STRING); 


          if($tipo == 'DEVOLVER'){
            echo 
            "
            <div class='titulo-voltar'>
            <div class='titulo-form'>Você tem certeza que deseja devolver este veículo?</div>
            </div>
            <form class='formulario' action='../../controller/devolverProrrogarController.php' method='post'>
              <div class='nomeVeiculo-form'>". $nome ."</div>
              <img class='imgForm' src='". $img ."'>
              <input type='hidden' name='idVeiculo' value='". $id."'>
              <input class='entrada entrarBotao' type='submit' name='enviar' value='Devolver'>  
            </form>
            ";

          }else if($tipo == 'PRORROGAR'){
            $dataMin = filter_input(INPUT_GET, 'dataMin', FILTER_SANITIZE_STRING);

            echo 
            "
            <div class='titulo-voltar'>
            <div class='titulo-form'>Escolha uma data para prolongar o seu aluguel.</div>
            </div>
            <form class='formulario' action='../../controller/devolverProrrogarController.php' method='post'>
              <div class='titulo-data'>Nova data de devolução</div>
              <input id='dataDevolucao' min='". $dataMin ."' class='entrada entrarCampos' type='date' name='dataDevolucao' placeholder='Nova data de devolução' required>
              <input type='hidden' name='idVeiculo' value='". $id ."'>
              <input class='entrada entrarBotao' type='submit' name='enviar' value='Prorrogar' style='background-color: #FFCC00;'> 
            </form>
            ";
          }
        ?>
    </div>
</body>