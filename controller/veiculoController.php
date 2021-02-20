<?php

    require_once '../../services/dbcon.php';
    require_once '../../model/veiculoModel.php';

    function carregarVeiculo(){
    session_start();
    if(array_key_exists("idVeiculo", $_SESSION)){
        unset($_SESSION['idVeiculo']);
    }
        
    $id = $_GET['id'];
    $_SESSION['idVeiculo'] = $_GET['id'];
    
    try{
        $conexao = new conexao();
        $con = new PDO($conexao->dsn, $conexao->user, $conexao->pass);
        $sql= $con->prepare("SELECT idVeiculo, nome, marca, ano, cor, cambio, portas, combustivel, placa, descricao, valor, img FROM veiculo WHERE idVeiculo=$id LIMIT 1");
        $sql->execute();

        if($sql->rowCount() > 0){
            $query = $sql->fetchAll(PDO::FETCH_ASSOC);

            $descricaoArr = explode( ',', $query[0]['descricao'], 100);
            
            echo 
            "
            <div class='elemento'>
                <div class='left-content'>
                    <div class='top-left-content'>
                        <img class='imgCarro' src=". $query[0]['img'] ." alt=' srcset='>
                    </div>
                    <div class='retirebotao'>
                        <div class='retire'>
                        <p>RETIRE NA HORA</p>
                    </div>
                    <a class='alugarBtn' onclick='alugar()' href='#'>
                        <div class='alugarTexto'>ALUGAR</div>
                    </a>
                    </div>
                </div>
                <div class='right-content'>
                <div class='top-content'>
                    <div class='nomeVeiculo'>
                    <p>". strtoupper($query[0]['marca']. ' ' . $query[0]['nome']) ."</p>
                    </div>
                    <div class='info'>
                    <div class='left-info'>
                    <div class='tipoCambio'>
                        <img src='../../assets/icons/gearbox.svg' alt=' srcset='>
                        <p>". $query[0]['cambio']."</p>
                    </div>
                    <div class='qtdPortas'>
                    <img src='../../assets/icons/door.svg' alt=' srcset='>
                        <p>". $query[0]['portas']." Portas</p>
                    </div>
                    </div>
                    <div class='right-info'>
                    <div class='cor'>
                    <img src='../../assets/icons/paint.svg' alt=' srcset='>
                        <p>". $query[0]['cor']."</p>
                    </div>
                    <div class='tipoCombustivel'>
                    <img src='../../assets/icons/gas.svg' alt=' srcset='>
                        <p>". $query[0]['combustivel']."</p>
                    </div>
                    </div>
                    </div>
                </div>
                <div class='bottom-content'>
                    <p>".formatarValor($query[0]['valor']) ."</p>
                    <p style='display: none;' id='diaria'>". $query[0]['valor'] . "</p>
                </div>
            </div>
            </div>

            <div class='elemento descricao'>
                <p class='descricaoTexto'>Descrição:</p>
                    <div class='listaDesc'>
            ";

            foreach($descricaoArr as $linhaDescr){
                echo 
                "
                <p>".$linhaDescr."</p>

                ";
            }
            echo 
            "
            </div>
                </div>
            ";
            return true;
        }else{
            return false;
        }
    }
    catch(PDOException $e){
        //$e->getMessage();
        return array();
    }

}

function formatarValor($valor){
    $numero = number_format($valor, 2, ',', '.');
    $numero = 'R$ ' . $numero . '/Dia';
    return $numero;
}