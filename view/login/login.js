
function voltarLogin(){
    document.getElementById("formLogin").style.display = "block";
    document.getElementById("formCadastro").style.display = "none";
    document.getElementById("erro").style.display = "none";
}

function entrarCadastro(){
    document.getElementById("formLogin").style.display = "none";
    document.getElementById("formCadastro").style.display = "block";
    document.getElementById("erro").style.display = "none";
}

function sair(){
    document.getElementById('msg').classList.remove('msg-aparecer');
    document.getElementById('msg').classList.add('msg-sair');

}

function aparecer(){
    document.getElementById('msg').classList.remove('msg-sair');
    document.getElementById('msg').classList.add('msg-aparecer');
}

function loading(){
    document.getElementById('loading-container').style.display = "block";
    document.getElementById('btn').style.display = "none";
}

function loadingCad(){
    document.getElementById('cad').style.display = "block";
    document.getElementById('btn-cad').style.display = "none";
}