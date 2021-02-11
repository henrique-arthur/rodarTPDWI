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
    <title>Document</title>
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
      <div class="perfil">
        <span class="material-icons">
          account_circle
        </span>
        <p><?php echo $nomePerfil?></p>
      </div>
      <div class="sair">
        <span class="material-icons">
          logout
        </span>
      </div>
    </div>
  </div>



</body>
</html>