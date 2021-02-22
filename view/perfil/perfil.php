<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../../global.css" rel="stylesheet">
    <link href="perfil.css" rel="stylesheet">
    <!-- <script type="text/javascript" src="perfil.js"></script> -->
    <?//php require_once '../../controller/veiculoController.php'?>
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

    <div class="titulo-veiculos">Meus veículos</div>

    <div id="cform" class="confirm-container">
    <div class="div-voltar">
      <a class="sair" onclick="voltarAluguel()">
        <span class="material-icons voltarIcon">
          arrow_back
        </span>
      </a>
    </div>
    <form class="formulario" action="" method="post">
      <div class="titulo-form">Você tem certeza que deseja devolver este veículo?</div>
    
      <input class="entrada entrarBotao" type="submit" name="enviar" value="Devolver">  
    </form>
  </div>

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
          <div class="left-button">
            <a onclick="alert('devolver')">
              <div class="botoesCard alugarTexto">DEVOLVER</div>
            </a>
          </div>
          <div class="right-button">
            <a onclick="alert('estender')">
              <div class="botoesCard estenderTexto">PRORROGAR</div>
            </a>
          </div>
        </div>
      </div>

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
          <div class="left-button">
            <a onclick="alert('devolver')">
              <div class="botoesCard alugarTexto">DEVOLVER</div>
            </a>
          </div>
          <div class="right-button">
            <a onclick="alert('estender')">
              <div class="botoesCard estenderTexto">PRORROGAR</div>
            </a>
          </div>
        </div>
      </div>

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
          <div class="left-button">
            <a onclick="alert('devolver')">
              <div class="botoesCard alugarTexto">DEVOLVER</div>
            </a>
          </div>
          <div class="right-button">
            <a onclick="alert('estender')">
              <div class="botoesCard estenderTexto">PRORROGAR</div>
            </a>
          </div>
        </div>
      </div>

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
          <div class="left-button">
            <a onclick="alert('devolver')">
              <div class="botoesCard alugarTexto">DEVOLVER</div>
            </a>
          </div>
          <div class="right-button">
            <a onclick="alert('estender')">
              <div class="botoesCard estenderTexto">PRORROGAR</div>
            </a>
          </div>
        </div>
      </div>

    </div>

  </div>
</body>