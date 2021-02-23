function voltar(){

  document.getElementById("cform").style.display = "none";
  document.getElementById("sform").style.opacity = "100%";

}

function abrirForm(){
  document.getElementById("cform").style.display = "block";
  document.getElementById("sform").style.opacity = "40%";

  // var today = new Date().toISOString().split('T')[0];
  // document.getElementById('dataAluguel').setAttribute('min', today);

  // dataDevolucao = document.getElementById("dataDevolucao");

  // dataDevolucao.addEventListener('change', (event) => {
  //     document.getElementById("dataAluguel").setAttribute('max', document.getElementById("dataDevolucao").value);

  //     var alugDate = new Date(document.getElementById("dataAluguel").value);
  //     var devDate = new Date(document.getElementById("dataDevolucao").value);
  //     var diaria = document.getElementById("diaria").innerHTML;

  //     const devSum = Math.abs(devDate.getTime() + 1); 
  //     const diff = Math.abs(alugDate.getTime() - devSum); 
  //     const diasAlugado = Math.ceil(diff / (1000 * 60 * 60 * 24)); 

  //     var valorTotal = diaria * diasAlugado;

  //     document.getElementById('pagarTexto').innerHTML = 'Você pagará <span id="pagarValor" style="color: green; font-weight: 500;"></span>';
  //     document.getElementById('pagarValor').innerHTML = valorTotal.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
    
  // });
}