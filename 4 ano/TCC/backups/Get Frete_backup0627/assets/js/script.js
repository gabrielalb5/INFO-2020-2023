//menu responsivo
const toggleButton = document.querySelector(".toggle-button")
const navbarLinks = document.querySelector('.navbar-links')

if(toggleButton){
    toggleButton.addEventListener('click', () => {
        
        navbarLinks.classList.toggle('active')
        
    })
}

//visualizar senha
function ver_senha() {
    const span = document.querySelector("#olho")
    var x = document.getElementById("id_senha");
    if (x.type === "password") {
      x.type = "text";
      span.textContent = "visibility_off";
    } else {
      x.type = "password";
      span.textContent = "visibility";
    }
}

/*redirecionamentos*/
function red_index(){
    window.location.href = "index.php";
}
function red_cadastro(){
    window.location.href = "cadastro.php";
}
function red_cad_cliente(){
    window.location.href = "cadastro_cliente.php";
}
function red_cad_motorista(){
    window.location.href = "cadastro_motorista.php";
}
function limpar_cadastro(){
    window.location.href = "limpar_cadastro.php";
}

function validarSenha() {
    var senha = document.getElementById('senha').value;
    var regex = /^(?=.*\d)[A-Za-z\d@$!%*?&]{8,}$/;
    if (regex.test(senha)) {
        document.getElementById('mensagem').innerHTML = '';
        document.getElementById('btn_editar').disabled = false;
    } else {
        document.getElementById('mensagem').innerHTML = 'A senha deve conter pelo menos 8 caracteres e um número';
        document.getElementById('btn_azul').disabled = true;
        document.getElementById('btn_editar').disabled = true;
    }
}

function senhasIguais() {
    var senha = document.getElementById('senha').value;
    var senhaConf = document.getElementById('senha_conf').value;
    var regex = /^(?=.*\d)[A-Za-z\d@$!%*?&]{8,}$/;
    if (regex.test(senha) && senha === senhaConf) {
        document.getElementById('mensagem').innerHTML = '';
        document.getElementById('btn_azul').disabled = false;
    } else {
        document.getElementById('mensagem').innerHTML = 'Os campos de senha e confirmação de senha devem ser iguais.';
        document.getElementById('btn_azul').disabled = true;
    }
}

// Preview foto de perfil
const perfilInputFile = document.querySelector("#perfil_img");
const perfilPictureImage = document.querySelector(".perfil_img");
const perfilPictureImageTxt = "Escolha a imagem";
perfilPictureImage.innerHTML = perfilPictureImageTxt;

perfilInputFile.addEventListener("change", function (e) {
  const inputTarget = e.target;
  const file = inputTarget.files[0];

  if (file) {
    const reader = new FileReader();

    reader.addEventListener("load", function (e) {
      const readerTarget = e.target;
      const img = document.createElement("img");

      img.src = readerTarget.result;
      img.classList.add("perfil_img");

      perfilPictureImage.innerHTML = "";
      perfilPictureImage.appendChild(img);
    });

    reader.readAsDataURL(file);
  } else {
    perfilPictureImage.innerHTML = perfilPictureImageTxt;
  }
});

// Preview foto de CNH
const cnhInputFile = document.querySelector("#cnh_img");
const cnhPictureImage = document.querySelector(".cnh_img");
const cnhPictureImageTxt = "Escolha a imagem";
cnhPictureImage.innerHTML = cnhPictureImageTxt;

cnhInputFile.addEventListener("change", function (e) {
  const inputTarget = e.target;
  const file = inputTarget.files[0];

  if (file) {
    const reader = new FileReader();

    reader.addEventListener("load", function (e) {
      const readerTarget = e.target;
      const img = document.createElement("img");

      img.src = readerTarget.result;
      img.classList.add("cnh_img");

      cnhPictureImage.innerHTML = "";
      cnhPictureImage.appendChild(img);
    });

    reader.readAsDataURL(file);
  } else {
    cnhPictureImage.innerHTML = cnhPictureImageTxt;
  }
});

/*function TamanhoImagem(){
   var perfil_img = "perfil_img";
   var cnh_img = "cnh_img";
   var TamanhoEmBytes = 2097152;
   var perfil = document.getElementById(perfil_img);
   var cnh = document.getElementById(cnh_img);
   if(perfil.files && perfil.files.length == 1 && perfil.files[0].size > TamanhoEmBytes){
      alert("Foto de perfil muito grande. Tamanho máximo: " + parseInt(TamanhoEmBytes/1024/1024) + "MB");
      return false;
   }if(cnh.files && cnh.files.length == 1 && cnh.files[0].size > TamanhoEmBytes){
        alert("Foto da cnh muito grande. Tamanho máximo: " + parseInt(TamanhoEmBytes/1024/1024) + "MB");
        return false;
    }
   return true;
}*/

function Erros(){
  var TamanhoEmBytes = 2097152;
  var perfil = document.getElementById("perfil_img");
  var cnh = document.getElementById("cnh_img");
  var mensagem = document.getElementById("mensagem");
  if(perfil.files && perfil.files.length == 1 && perfil.files[0].size > TamanhoEmBytes) {
     //alert("Foto de perfil muito grande. Tamanho máximo: " + parseInt(TamanhoEmBytes/1024/1024) + "MB");
    Swal.fire({
      title: 'Foto de perfil muito grande!',
      text: "Tamanho máximo: " + parseInt(TamanhoEmBytes/1024/1024) + "MB",
      imageUrl: '../assets/img/upload_img.png',
      imageWidth: 300,
      imageAlt: 'Ilustração de upload de imagem',
      confirmButtonColor: '#5F9CB4',
      confirmButtonText: 'Entendi',
    })
     return false;
  }
  if(cnh.files && cnh.files.length == 1 && cnh.files[0].size > TamanhoEmBytes) {
     //alert("Foto da CNH muito grande. Tamanho máximo: " + parseInt(TamanhoEmBytes/1024/1024) + "MB");
    Swal.fire({
      title: 'Foto da CNH muito grande!',
      text: "Tamanho máximo: " + parseInt(TamanhoEmBytes/1024/1024) + "MB",
      imageUrl: '../assets/img/upload_img.png',
      imageWidth: 300,
      imageAlt: 'Ilustração de upload de imagem',
      confirmButtonColor: '#5F9CB4',
      confirmButtonText: 'Entendi',
    })
     return false;
  }
  if(mensagem && mensagem.innerHTML.trim() !== "") {
     //alert("Corrija os requisitos da senha.");
    Swal.fire({
      title: 'Escolha outra senha!',
      text: 'Preencha os requisitos solicitados para prosseguir',
      imageUrl: '../assets/img/senha.png',
      imageWidth: 300,
      imageAlt: 'Ilustração de senha',
      confirmButtonColor: '#5F9CB4',
      confirmButtonText: 'Entendi',
    })
     return false;
  }
  return true;
}
function alert_deletar(){
  Swal.fire({
    title: 'Deseja prosseguir?',
    text: "Ao excluir sua conta todos os dados serão perdidos e não será possível recuperá-los.",
    imageUrl: '../assets/img/warning.png',
    imageWidth: 300,
    imageAlt: 'Ilustração de alerta',
    showCancelButton: true,
    confirmButtonColor: '#d33',
    cancelButtonColor: 'gray',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Confirmar'
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = "excluir_usuario.php";
    }
  })
}

function toggleContent() {
  var checkbox = document.getElementById('localizacao');
  var hiddenContent = document.getElementById('hiddenContent');

  if (checkbox.checked) {
    hiddenContent.style.display = 'block';
  } else {
    hiddenContent.style.display = 'none';
  }
}

/*function alert_deletar(){
  var resposta = confirm("Ao excluir sua conta todos os dados serão perdidos e não será possível recuperá-los. Deseja prosseguir?");
  if (resposta) {
    // Lógica para deletar o item
    window.location.href = "excluir_usuario.php";
  } else {
    // Lógica caso o usuário cancele
    window.location.href = "#";
  }
}*/