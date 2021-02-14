<?php

    require_once '../../services/dbcon.php';
    require_once '../../model/veiculoModel.php';

    $veiculo = new veiculo();

    function formatarValor($valor){
        $numero = number_format($valor, 2, ',', '.');
        $numero = 'R$ ' . $numero . '/Dia';
		return $numero;
    }

    try{
        $conexao = new conexao();
        $con = new PDO($conexao->dsn, $conexao->user, $conexao->pass);
        $sql= $con->prepare("SELECT idVeiculo, nome, marca, ano, cor, cambio, portas, combustível, placa, descricao, valor, img FROM veiculo");
        $sql->execute();

        if($sql->rowCount() > 0){
            $query = $sql->fetchAll(PDO::FETCH_ASSOC);

            $qr = $query;
            var_dump($query[0]['img']);
            while (list ($idVeiculo, $nome, $marca, $ano, $cor, $cambio, $portas, $combustível, $placa, $descricao, $valor, $img) = $query) {
                echo 
                "
                <div class='elemento'>
                    <div class='left-content'>
                    <img class='imgCarro' src='$img' alt=' srcset='>
                    <div class='retire'>
                        <p>RETIRE NA HORA</p>
                    </div>
                    <input class='alugarBtn' type='submit' name='enviar' value='ALUGAR'>
                    </div>
                    <div class='right-content'>
                    <div class='top-content'>
                        <div class='nomeVeiculo'>
                        <p>'$marca'</p>
                        </div>
                        <div class='info'>
                        <div class='left-info'>
                        <div class='tipoCambio'>
                            <img src='../../assets/icons/gearbox.svg' alt=' srcset='>
                            <p>$cambio</p>
                        </div>
                        <div class='qtdPortas'>
                        <img src='../../assets/icons/door.svg' alt=' srcset='>
                            <p>$portas Portas</p>
                        </div>
                        </div>
                        <div class='right-info'>
                        <div class='cor'>
                        <img src='../../assets/icons/paint.svg' alt=' srcset='>
                            <p>$cor</p>
                        </div>
                        <div class='tipoCombustivel'>
                        <img src='../../assets/icons/gas.svg' alt=' srcset='>
                            <p>$combustível</p>
                        </div>
                        </div>
                        </div>
                    </div>
                    <div class='bottom-content'>
                        <p>";formatarValor($valor); "</p>
                    </div>
                </div>
                </div>
                ";
           }
            return true;
        }else{
            return false;
        }
    }
    catch(PDOException $e){
        //$e->getMessage();
        return array();
    }

?>
