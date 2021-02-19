<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="login.css" rel="stylesheet">
    <link href="../../global.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="login.js"></script>
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
        <div class="logo">
            <div class="texto">
                <p class="titulo">RODAR</p>
                <p class="subtitulo">Aluguel de Veículos</p>
            </div>
            <img src="../../assets/carrologin.png" alt="" sizes="" srcset="">
        </div>
        <div class="container-box">
            <div class="box" id="formLogin">
                <h1>Entrar</h1>
                <form class="formulario" action="../../controller/loginController.php" method="post">
                    <input class="entrada entrarCampos" type="text" name="email" placeholder="Email" required>
                    <input class="entrada entrarCampos" type="password" name="senha" placeholder="Senha" required>
                    <p class="erro" style="display:<?php echo $e ?>;">Os dados estão incorretos.</p>
                    <input class="entrada entrarBotao" type="submit" name="enviar" value="Entrar">  
                    <div class="checkbox">
                        <input type="checkbox" id="lembrarLogin" name="lembrarLogin">
                        <label for="lembrarLogin">Lembre-se de mim</label>
                    </div>
                    <div class="cadastro">
                        <a class="linkCadastro" href="#" onclick="entrarCadastro()">Novo por aqui? Cadastre-se</a>
                    </div>
                </form>
            </div>

            <div class="box" id="formCadastro">
                <div class="tituloForm">
                    <h1>Criar Conta</h1>
                    <span onclick="voltarLogin()" class="material-icons">
                    arrow_back
                    </span>
                </div>
                <form class="formulario" action="../../controller/cadastroController.php" method="post">
                    <input class="entrada entrarCampos" type="text" name="nome" placeholder="Nome completo" required>
                    <input class="entrada entrarCampos" type="text" name="email" placeholder="Email" required>
                    <input class="entrada entrarCampos" type="password" name="senha" placeholder="Senha" required>
                    <input class="entrada entrarCampos" type="password" name="senhaRepetir" placeholder="Senha" required>
                    <!-- <p class="erro" id="erro" style="display:;">Os dados estão incorretos.</p> -->
                    <input class="entrada entrarBotao" type="submit" name="enviar" value="Criar Conta">
                </form>
            </div>
        </div>
    </div>
    <div id="msg" class="mensagem-container <?php echo $e ?>">
    <p class="mensagem">Erro, email ou senha incorretos.</p>
        <span onclick="sair()" id="fechar" class=" material-icons">
            close
        </span>
    </div>
</body>
</html>