var dataDevolucao;

function alugar(){
    document.getElementById("cform").style.display = "block";
    document.getElementById("sform").style.opacity = "40%";

    var today = new Date().toISOString().split('T')[0];
    document.getElementById('dataAluguel').setAttribute('min', today);
    
    dataDevolucao = document.getElementById("dataDevolucao");
    
    dataDevolucao.addEventListener('change', (event) => {
        document.getElementById("dataAluguel").setAttribute('max', document.getElementById("dataDevolucao").value);

        var alugDate = new Date(document.getElementById("dataAluguel").value);
        var devDate = new Date(document.getElementById("dataDevolucao").value);
        var diaria = document.getElementById("diaria").innerHTML;

        const devSum = Math.abs(devDate.getTime() + 1); 
        const diff = Math.abs(alugDate.getTime() - devSum); 
        const diasAlugado = Math.ceil(diff / (1000 * 60 * 60 * 24)); 

        var valorTotal = diaria * diasAlugado;

        document.getElementById('pagarTexto').innerHTML = 'Você pagará <span id="pagarValor" style="color: green; font-weight: 500;"></span>';
        document.getElementById('pagarValor').innerHTML = valorTotal.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      
    });
}

function voltarAluguel(){
    document.getElementById("cform").style.display = "none";
    document.getElementById("sform").style.opacity = "100%";
}

var today = new Date().toISOString().split('T')[0];

function definirData(){
    var dataaluguel = document.getElementById("dataAluguel").value;
    document.getElementById("dataDevolucao").setAttribute('min', dataaluguel);
}

function habilitarInput(){
    document.getElementById("dataDevolucao").removeAttribute('disabled');
}

function sair(){
    document.getElementById('msg').classList.remove('msg-aparecer');
    document.getElementById('msg').classList.add('msg-sair');
}

function aparecer(){
    document.getElementById('msg').classList.remove('msg-sair');
    document.getElementById('msg').classList.add('msg-aparecer');
}

function msgStatus( x ){
    if(x == 1){
        document.getElementById("msg").style.backgroundColor = "green";
        document.getElementById("textoNotificacao").innerHTML = "Sucesso, o veículo foi alugado.";
    }else{
        document.getElementById("msg").style.backgroundColor = "red";
        document.getElementById("textoNotificacao").innerHTML = "Erro, usuário não está logado.";
    }
}
