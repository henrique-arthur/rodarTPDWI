<?php

    require_once '../../services/dbcon.php';

    

    function formatarValor($valor, $dataAluguel, $dataDevolucao ){
        $data_inicio = new DateTime($dataAluguel);
        $data_fim = new DateTime($dataDevolucao);

        $dateInterval = $data_inicio->diff($data_fim);
        $valor = $dateInterval->days * $valor;

        $numero = number_format($valor, 2, ',', '.');
        $numero = 'R$ ' . $numero ;
		return $numero;
    }

    function formatardata($data){
        return date("d/m/Y", strtotime($data));
    }
    
    function listarVeiculos(){
        session_start();

        try{
            $conexao = new conexao();
            $con = new PDO($conexao->dsn, $conexao->user, $conexao->pass);
            $idUsuario = $_SESSION['id'];
            $sql= $con->prepare("SELECT v.idVeiculo, v.nome, v.marca, v.valor, v.img , vu.dataAluguel, vu.dataDevolucao FROM veiculo as v INNER JOIN veiculoUsuario as  vu on v.idVeiculo=vu.idVeiculo INNER JOIN usuario as u on u.idUsuario = vu.idUsuario where vu.idUsuario = $idUsuario and vu.devolvido=0;");
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $query = $sql->fetchAll(PDO::FETCH_ASSOC);
    
                foreach($query as $key => $linha) {
                    echo 
                    "
                    <div class='elemento'>
                        <input type='hidden' id='idVeiculo' name='idVeiculo' value='".$linha['idVeiculo']."'>
                        <div class='top'>
                        <div class='left-content'>
                            <div class='img-box'>
                            <img class='imgCarro' src='../../assets/veiculos/". $linha['img'] ."' alt=' srcset='>
                            </div>
                        </div>
                        <div class='right-content'>
                            <div class='nomeVeiculo'>". strtoupper($linha['marca']. ' ' . $linha['nome']) ."</div>
                            <div class='dados'>
                            <div class='datas'>
                                <div class='aluguel'>
                                <p class='info-titulo'>Data do aluguel</p>
                                <p>". formatardata($linha['dataAluguel'])  ."</p>
                                </div>
                                <div class='devolucao'>
                                <p class='info-titulo'>Data da devolução</p>
                                <p>". formatardata($linha['dataDevolucao']) ."</p>
                                </div>
                            </div>
                            <div class='valor'>
                                <p class='info-titulo'>Valor</p>
                                <p>". formatarValor($linha['valor'], $linha['dataAluguel'], $linha['dataDevolucao']) ."</p>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class='bottom'>
                            <form class='left-button' id='formjax' name='postForm' action='../../view/perfil/card.php' method='GET'>
                            <input type='hidden' name='idVeiculo' value='".$linha['idVeiculo']."'>
                            <input type='hidden' name='nomeVeiculo' value='". strtoupper($linha['marca']. ' ' . $linha['nome']) ."'>
                            <input type='hidden' name='imgVeiculo' value='". $linha['img'] ."'>
                            <input class='botoesCard alugarTexto' type='submit' name='tipo' value='DEVOLVER' onclick='abrirForm());'></input>
                            </form>
                            <form class='right-button' id='formjax2' name='postForm' action='../../view/perfil/card.php' method='GET'>
                            <input type='hidden' name='idVeiculo' value='".$linha['idVeiculo']."'>
                            <input type='hidden' name='nomeVeiculo' value='". strtoupper($linha['marca']. ' ' . $linha['nome']) ."'>
                            <input type='hidden' name='imgVeiculo' value='". $linha['img'] ."'>
                            <input type='hidden' name='dataMin' value='". $linha['dataDevolucao'] ."'>
                            <input class='botoesCard estenderTexto' type='submit' name='tipo' value='PRORROGAR' onclick='abrirForm()'></input>
                            </form>
                        
                        </div>
                    </div>
                    ";
               }
            }else{
                echo "<p style='font-weight: 500; font-size: 18px; '>Você não possui nenhum veículo alugado no momento. <br> <span class='material-icons voltarIcon'>
                car_rental
            </span></p>
                    ";
            }
        }
        catch(PDOException $e){
            //$e->getMessage();
            return array();
        }
    }
  
    

?>
