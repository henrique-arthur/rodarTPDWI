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
<?php
        if (array_key_exists("e", $_GET)) {
            $e = $_GET["e"];
            $d = $_GET["d"];
            $m = $_GET["m"];

            ($d=='s')? $s='background-color:green;' : $s='background-color:red;'; 
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

    <div id="sform" class="container-lista">
      <div class="titulo-veiculos">Meus veículos</div>
      <div class="lista">
        <?php listarVeiculos(); ?>
      </div>
    </div>
  </div>
    <div id="msg" class="mensagem-container <?php echo $e ?>" style="<?php echo $s ?>">
    <p class="mensagem"><?php echo $m ?></p>
        <span onclick="sair()" id="fechar" class=" material-icons">
            close
        </span>
    </div>
</body>