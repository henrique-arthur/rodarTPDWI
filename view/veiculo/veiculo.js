function alugar(){
    document.getElementById("cform").style.display = "block";
    document.getElementById("sform").style.opacity = "40%";

    var today = new Date().toISOString().split('T')[0];
    document.getElementById("dataAluguel").setAttribute('min', today);

    var dataaluguel = document.getElementById("dataAluguel").value;
    console.log('dataaluguel');
    document.getElementById("dataDevolucao").setAttribute('min', dataaluguel);
}

function voltarAluguel(){
    document.getElementById("cform").style.display = "none";
    document.getElementById("sform").style.opacity = "100%";
}

var today = new Date().toISOString().split('T')[0];
