<?php

require_once '../services/dbcon.php';
require_once '../model/usuarioModel.php';

$usuario = new usuario();

$usuario->setNome(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING));
$usuario->setEmail(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
$usuario->setSenha(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));
$senhaRepetir = (filter_input(INPUT_POST, 'senhaRepetir', FILTER_SANITIZE_STRING));


//N TA ENTRANDO NO IF
function cadastro($nome, $email, $senha){
    try {
        if($senha == $senhaRepetir){
            $conexao = new conexao();
            $con = new PDO($conexao->dsn, $conexao->user, $conexao->pass);
            $sql = "INSERT INTO usuario (nome, email, senha) VALUES (?,?,?);";
            $pre = $con->prepare($sql);
            $pre->bindValue(1, $nome);
            $pre->bindValue(2, $email);
            $pre->bindValue(3, md5($senha));
            if ($pre->execute()) {
                echo $pre->rowCount();
                return true;
            } else {
                print_r($pre->errorInfo());

                return false;
            }

            header('Location: ../view/login/login.php');
        }else{
            header('Location: ../view/login/login.php?e=block');
        }
    } catch (PDOException $erro) {
        echo $erro->getMessage();
        return false;
    }
}

cadastro($usuario->getNome(), $usuario->getEmail(), $usuario->getSenha());