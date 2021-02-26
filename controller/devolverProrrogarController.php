<?php
require_once '../services/dbcon.php';

$idVeiculo = filter_input(INPUT_POST, 'idVeiculo', FILTER_SANITIZE_STRING);
$tipo = filter_input(INPUT_POST, 'enviar', FILTER_SANITIZE_STRING); 

if(isset($idVeiculo) and isset($tipo)){
  session_start();
  $idUsuario = $_SESSION['id'];

  if($tipo == 'Devolver'){
    try{
      $conexao = new conexao();
      $con = new PDO($conexao->dsn, $conexao->user, $conexao->pass);
      $sql= $con->prepare("UPDATE veiculousuario SET devolvido=1 WHERE idUsuario=:idUsuario and idVeiculo=:idVeiculo");
      $sql->bindValue(":idUsuario", $idUsuario);
      $sql->bindValue(":idVeiculo", $idVeiculo);
      $sql->execute();

      header('Location: ../view/perfil/perfil.php?e=msg-aparecer&d=s&m=Sucesso!%20Entraremos%20em%20contato%20para%20a%20realização%20da%20devolução.');
      
      return true;
  }
  catch(PDOException $e){
    header('Location: ../view/perfil/perfil.php?e=msg-aparecer&d=e&m=Erro!%20Ocorreu%20um%20erro%20ao%20executar.');
      // header('Location: ../view/login/login.php?e=msg-aparecer');
      //$e->getMessage();
      return array();
  }

  }else if($tipo == 'Prorrogar'){
      $dataDevolucao = filter_input(INPUT_POST, 'dataDevolucao', FILTER_SANITIZE_STRING); 

      try{
        $conexao = new conexao();
        $con = new PDO($conexao->dsn, $conexao->user, $conexao->pass);
        $sql= $con->prepare("UPDATE veiculousuario SET dataDevolucao=:dataDevolucao WHERE idUsuario=:idUsuario and idVeiculo=:idVeiculo");
        $sql->bindValue(":idUsuario", $idUsuario);
        $sql->bindValue(":idVeiculo", $idVeiculo);
        $sql->bindValue(":dataDevolucao", $dataDevolucao);
        $sql->execute();

        header('Location: ../view/perfil/perfil.php?e=msg-aparecer&d=s&m=Sucesso!%O%20prazo%20de%20devolução%20do%20veículo%20foi%20prorrogado.');

        return true;
    }
    catch(PDOException $e){
      header('Location: ../view/perfil/perfil.php?e=msg-aparecer&d=e&m=Erro!%20Ocorreu%20um%20erro%20ao%20executar.');
        // header('Location: ../view/login/login.php?e=msg-aparecer');
        //$e->getMessage();
        return array();
    }
  }

}
?>