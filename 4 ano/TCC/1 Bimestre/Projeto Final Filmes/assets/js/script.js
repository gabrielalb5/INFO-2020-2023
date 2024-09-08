//Validação de login
window.addEventListener("load", setEventos);

function setEventos() {
  let button = document.getElementById('btn_login');
  button.addEventListener("click", validarLogin);

  document.getElementById("id_email").addEventListener("focus", limparCampo);
  document.getElementById("id_senha").addEventListener("focus", limparCampo);
}

function validarLogin() {
  let email = document.getElementById("id_email").value;
  let senha = document.getElementById("id_senha").value;
  let dados_form = new FormData();
  dados_form.append("email", email);
  dados_form.append("senha", senha);

  fetch("../src/recuperar_login.php", {
    method: 'POST',
    body: dados_form,
  })
  .then(function(response) {
    if (!response.ok) {
      throw new Error(response.text());
    }
    return response.json();
  })
  .then(function(objeto) {
    if (objeto.autenticado_admin){
      window.location.href = "../src/inicio_admin.php";
    }
    if(objeto.autenticado){
        window.location.href = "../src/inicio_user.php";
    }else{
    document.getElementById("id_msg").innerHTML = objeto.msg;
    }
  })
  .catch(function(erro) { 
    document.getElementById("id_msg").innerHTML = "Erro na requisição";
    console.error(erro);
  });
}

function limparCampo() {
  document.getElementById("id_msg").innerHTML = "";
}

/*Tentativa falha de confirmação de editar dados
não funciona pois recupera sempre o primeiro item que aparece na 
página e não em um bloco específico de um filme :(
  
function update(){
  let filme = document.getElementById("id_f").value;
if (confirm("Deseja editar o cadastro?") == true) {
    window.location.href = "filme_form_ed.php?id_f="+filme;
}else{
    window.location.href = "#";
}
}*/

function ver_senha() {
  const span = document.querySelector("#olho")
  var x = document.getElementById("senha");
  if (x.type === "password") {
    x.type = "text";
    span.textContent = "visibility_off";
  } else {
    x.type = "password";
    span.textContent = "visibility";
  }
}