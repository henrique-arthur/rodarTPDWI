<?php
 require_once '../services/dbcon.php';

session_start();

$dataAluguel = $_POST['dataAluguel'];
$dataDevolucao = $_POST['dataDevolucao'];

if (array_key_exists("id", $_SESSION)) {
    $idUsuario = $_SESSION["id"];
    $idVeiculo = $_SESSION["idVeiculo"];
} else {

    header("Location: ../view/veiculo/veiculo.php?id=$idVeiculo&e=msg-aparecer&status=error");
}  

try{
    $conexao = new conexao();
    $con = new PDO($conexao->dsn, $conexao->user, $conexao->pass);
    $sql = "INSERT INTO veiculoUsuario (idUsuario, idVeiculo, dataAluguel, dataDevolucao) VALUES (?,?,?,?);";
    $pre = $con->prepare($sql);
    $pre->bindValue(1, $idUsuario);
    $pre->bindValue(2, $idVeiculo);
    $pre->bindValue(3, $dataAluguel);
    $pre->bindValue(4, $dataDevolucao);

    if ($pre->execute()) {
        header("Location: ../view/veiculo/veiculo.php?id=$idVeiculo&e=msg-aparecer&status=sucess");
    } else {
        header("Location: ../view/veiculo/veiculo.php?id=$idVeiculo&e=msg-aparecer&status=error");
        print_r($pre->errorInfo());
    }

}
catch(PDOException $e){
    header("Location: ../view/veiculo/veiculo.php?id=$idVeiculo&e=msg-aparecer&status=error");
    //$e->getMessage();
    return array();
}