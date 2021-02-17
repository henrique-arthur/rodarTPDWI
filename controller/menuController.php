<?php

    require_once '../../services/dbcon.php';
    require_once '../../model/veiculoModel.php';

    function formatarValor($valor){
        $numero = number_format($valor, 2, ',', '.');
        $numero = 'R$ ' . $numero . '/Dia';
		return $numero;
    }

    try{
        $conexao = new conexao();
        $con = new PDO($conexao->dsn, $conexao->user, $conexao->pass);
        $sql= $con->prepare("SELECT idVeiculo, nome, marca, ano, cor, cambio, portas, combustivel, placa, descricao, valor, img FROM veiculo");
        $sql->execute();

        if($sql->rowCount() > 0){
            $query = $sql->fetchAll(PDO::FETCH_ASSOC);

            foreach($query as $linha) {
                echo 
                "
                <div class='elemento'>
                <div class='left-content'>
                    <div class='top-left-content'>
                        <img class='imgCarro' src=". $linha['img'] ." alt=' srcset='>
                    </div>
                    <div class='retirebotao'>
                        <div class='retire'>
                        <p>RETIRE NA HORA</p>
                    </div>
                    <a class='alugarBtn' href='../veiculo/veiculo.php?id=". $linha['idVeiculo'] ."'>
                        <div class='alugarTexto'>ALUGAR</div>
                    </a>
                    </div>
                </div>
                    <div class='right-content'>
                    <div class='top-content'>
                        <div class='nomeVeiculo'>
                        <p>". strtoupper($linha['marca']. ' ' . $linha['nome']) ."</p>
                        </div>
                        <div class='info'>
                        <div class='left-info'>
                        <div class='tipoCambio'>
                            <img src='../../assets/icons/gearbox.svg' alt=' srcset='>
                            <p>". $linha['cambio']."</p>
                        </div>
                        <div class='qtdPortas'>
                        <img src='../../assets/icons/door.svg' alt=' srcset='>
                            <p>". $linha['portas']." Portas</p>
                        </div>
                        </div>
                        <div class='right-info'>
                        <div class='cor'>
                        <img src='../../assets/icons/paint.svg' alt=' srcset='>
                            <p>". $linha['cor']."</p>
                        </div>
                        <div class='tipoCombustivel'>
                        <img src='../../assets/icons/gas.svg' alt=' srcset='>
                            <p>". $linha['combustivel']."</p>
                        </div>
                        </div>
                        </div>
                    </div>
                    <div class='bottom-content'>
                        <p>". formatarValor($linha['valor']) ."</p>
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
