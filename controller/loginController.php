<?php

require_once '../services/dbcon.php';
require_once '../model/usuarioModel.php';

session_start();

$usuario = new usuario();

$usuario->setEmail(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
$usuario->setSenha(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));

function login($email, $senha){
        
    try{
        $conexao = new conexao();
        $con = new PDO($conexao->dsn, $conexao->user, $conexao->pass);
        $sql= $con->prepare("SELECT idUsuario, email, nome, senha FROM usuario WHERE email=:email and senha=:senha limit 1");
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", $senha);
        $sql->execute();

    if($sql->rowCount() > 0){
        $query = $sql->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION['id'] = $query[0]['idUsuario'];
        $_SESSION['email'] = $query[0]['email'];
        $_SESSION['nome'] = $query[0]['nome'];
        $_SESSION['senha'] = $query[0]['senha'];


        header('Location: ../view/menu/menu.php');

        return true;
    }else{
        unset($_SESSION['id']);
        unset($_SESSION['email']);
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        
        header('Location: ../view/login/login.php?e=msg-aparecer');

        return false;
    }}
    catch(PDOException $e){
        header('Location: ../view/login/login.php?e=msg-aparecer');
        //$e->getMessage();
        return array();
    }
}


login($usuario->getEmail(), $usuario->getSenha());