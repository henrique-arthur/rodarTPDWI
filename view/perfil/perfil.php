<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../../global.css" rel="stylesheet">
    <link href="perfil.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="perfil.js"></script>
    <script type="text/javascript" src="ajax.js"></script>
    <?php require_once '../../controller/perfilController.php'?>
    <title>Rodar | Aluguel de Veículos</title>
</head>
<body>
  <div class="container">
    <div class="nav">
      <div class="titulo">RODAR</div>
        <a class="sair" href="../menu/menu.php">
          <span class="material-icons voltarIcon">
            arrow_back  
          </span>
        </a>
      </div>

    <div id="sform" class="container-lista">
      <div class="titulo-veiculos">Meus veículos</div>
      <div class="lista">
        <div class="elemento">
          <div class="top">
            <div class="left-content">
              <div class="img-box">
                <img class="imgCarro" src="../../assets/veiculos/dodge_ram_rebel_2021.png" alt="" srcset="">
              </div>
            </div>
            <div class="right-content">
              <div class="nomeVeiculo">DODGE RAM ENOIS</div>
              <div class="dados">
                <div class="datas">
                  <div class="aluguel">
                    <p class="info-titulo">Data do aluguel</p>
                    <p>10/02/2021</p>
                  </div>
                  <div class="devolucao">
                    <p class="info-titulo">Data da devolução</p>
                    <p>10/02/2021</p>
                  </div>
                </div>
                <div class="valor">
                  <p class="info-titulo">Valor</p>
                    <p>R$ 1.500,00</p>
                </div>
              </div>
            </div>
          </div>
          <div class="bottom">
            <form class="left-button" id="formjax" name="postForm">
              <input type="hidden" name='idVeiculo' value='1'>
              <input type="hidden" name='nomeVeiculo' value='DODGE RAM 1500 LTS'>
              <input type="hidden" name='imgVeiculo' value='../../assets/veiculos/dodge_ram_rebel_2021.png'>
              <input class="botoesCard alugarTexto" type="submit" name="tipo" value="DEVOLVER" onclick="abrirForm()"></input>
            </form>
            <form class="right-button" id="formjax2" name="postForm">
              <input type="hidden" name='idVeiculo' value='1'>
              <input type="hidden" name='nomeVeiculo' value='DODGE RAM 1500 LTS'>
              <input type="hidden" name='imgVeiculo' value='../../assets/veiculos/dodge_ram_rebel_2021.png'>
              <input type="hidden" name='dataMin' value='2021-02-10'>
              <input class="botoesCard estenderTexto" type="submit" name="tipo2" value="PRORROGAR" onclick="abrirForm()"></input>
            </form>
          </div>
        </div>
      <?php listarVeiculos(); ?>

    </div>
  </div>
    <div id="cform" class="confirm-container">
    </div>
</body>