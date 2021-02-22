<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../../global.css" rel="stylesheet">
    <link href="menu.css" rel="stylesheet">
    <title>Rodar | Aluguel de Veículos</title>
</head>
<body>
  <?php
  session_start();
  if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
  {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
  }

  $nomeUsuario[1] = null;
  $nomeUsuario = explode( ' ', $_SESSION['nome'], 3);

  if(!isset($nomeUsuario[0]) || !isset($nomeUsuario[1])){
    $nomePerfil = $nomeUsuario[0];
  }else{
    $nomePerfil = $nomeUsuario[0] .' '. $nomeUsuario[1];
  }
  
  ?>

  <div class="nav">
    <div class="titulo">RODAR</div>
    <div class="buscar">
      <span class="material-icons buscarIcone">
        search
      </span>
      <input class="" name="buscar" placeholder="Buscar veículos">
    </div>
    <div class="nav-direita">
      <a class="perfil" href="../perfil/perfil.php">
        <span class="material-icons">
          account_circle
        </span>
        <p><?php echo $nomePerfil?></p>
      </a>
      <a class="sair" href="../login/login.php">
        <span class="material-icons">
          logout
        </span>
      </a>
    </div>
  </div>
  
  <div class="lista">
    <?php require '../../controller/menuController.php' ?>
    
    <!-- <div class="elemento">
        <div class="left-content">
          <div class="top-left-content">
            <img class="imgCarro" src="../../assets/veiculos/chevrolet_s10_28.png" alt="" srcset="">
          </div>
          <div class='retirebotao'>
            <div class='retire'>
                <p>RETIRE NA HORA</p>
            </div>
            <a class='alugarBtn' href='#'>
                <div class='alugarTexto'>ALUGAR</div>
            </a>
        </div>
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

      
  </div>
</body>
</html>