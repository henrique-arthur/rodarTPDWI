<?php
$id = filter_input(INPUT_POST, 'idVeiculo', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nomeVeiculo', FILTER_SANITIZE_STRING); 
$img = filter_input(INPUT_POST, 'imgVeiculo', FILTER_SANITIZE_STRING);
$tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING); 


if($tipo == 'DEVOLVER'){
  echo 
  "
  <div class='titulo-voltar'>
  <div class='titulo-form'>Você tem certeza que deseja devolver este veículo?</div>
    <a class='sair' onclick='voltar()'>
      <span class='material-icons voltarIcon'>
        arrow_back
      </span>
    </a>
  </div>
  <form class='formulario' action='' method='post'>
    <div class='nomeVeiculo-form'>". $nome ."</div>
    <img class='imgForm' src='".$img."'>
    <input class='entrada entrarBotao' type='submit' name='enviar' value='Devolver'>  
  </form>
  ";

}else if($tipo == 'PRORROGAR'){
  $dataMin = filter_input(INPUT_POST, 'dataMin', FILTER_SANITIZE_STRING);

  echo 
  "
  <div class='titulo-voltar'>
  <div class='titulo-form'>Escolha uma data para prolongar o seu aluguel.</div>
    <a class='sair' onclick='voltar()'>
      <span class='material-icons voltarIcon'>
        arrow_back
      </span>
    </a>
  </div>
  <div class='titulo'>Nova data de devolução</div>
      <input id='dataDevolucao' min='".$dataMin."' class='entrada entrarCampos' type='date' name='dataDevolucao' placeholder='Nova data de devolução' required>
  ";

}

?>
