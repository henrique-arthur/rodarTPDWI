function sair(){
  document.getElementById('msg').classList.remove('msg-aparecer');
  document.getElementById('msg').classList.add('msg-sair');

}

function aparecer(){
  document.getElementById('msg').classList.remove('msg-sair');
  document.getElementById('msg').classList.add('msg-aparecer');
}
