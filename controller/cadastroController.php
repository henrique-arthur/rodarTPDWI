<?php

require_once '../services/dbcon.php';
require_once '../model/usuarioModel.php';

$user = new usuario();

$user->setNome(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING));
$user->setEmail(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
$user->setSenha(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));
$senhaRepetir = (filter_input(INPUT_POST, 'senhaRepetir', FILTER_SANITIZE_STRING));

if(empty($user->getNome()) || empty($user->getEmail()) || empty($user->getSenha()) || empty($senhaRepetir)){

    header('Location: ../view/login/login.php?s=false&e=msg-aparecer&m=Erro,%20existem%20campos%20vazios.');
}else{
    if($user->getSenha() !== $senhaRepetir ){ 
        header('Location: ../view/login/login.php?e=msg-aparecer');
    }else{  
        try {
            $conexao = new conexao();
            $con = new PDO($conexao->dsn, $conexao->user, $conexao->pass);
            $sql = "INSERT INTO usuario (nome, email, senha) VALUES (?,?,?);";
            $pre = $con->prepare($sql);
            $pre->bindValue(1, $user->getNome());
            $pre->bindValue(2, $user->getEmail());
            $pre->bindValue(3, $user->getSenha());
        
            if ($pre->execute()) {
                header('Location: ../view/login/login.php?s=true&e=msg-aparecer&m=O%20cadastro%20foi%20realizado%20com%20sucesso!');
            } else {
                print_r($pre->errorInfo());
            }
        } catch (PDOException $erro) {
            header('Location: ../view/login/login.php?s=false&e=msg-aparecer&m=Ocorreu%20um%20erro%20inesperado%20ao%20cadastrar.');
            return false;
        }
    }
}