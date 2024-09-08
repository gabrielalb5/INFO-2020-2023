function clicarSubmit() {
  let usuario = document.getElementById("txt_usuario").value;
  let senha = document.getElementById("psw_senha").value;

  if (usuario.length == 0) {
    document.getElementById("id_p").textContent = "Informe o usuário";
    return false;
  } else {
    if (senha.length == 0) {
      document.getElementById("id_p").textContent = "Informe a senha";
      return false;
    }
  }
}