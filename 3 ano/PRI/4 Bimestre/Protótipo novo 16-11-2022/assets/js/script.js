//menu responsivo
const toggleButton = document.querySelector(".toggle-button")
const navbarLinks = document.querySelector('.navbar-links')

if(toggleButton){
    toggleButton.addEventListener('click', () => {
        
        navbarLinks.classList.toggle('active')
        
    })
}

//redirecionamentos
function red_cadastro(){
    window.location.href = "cadastro.html";
}
function red_sucesso(){
    window.location.href = "sucesso.html";
}
function red_login(){
    window.location.href = "login.html";
}
function red_cadastro2(){
    window.location.href = "cadastro2.html";
}
function sucesso(){
    window.location.href = "sucesso.html";
}

//imagem no cadastro
function readImage() {
    if (this.files && this.files[0]) {
        var file = new FileReader();
        file.onload = function(e) {
            document.getElementById("preview").src = e.target.result;
        };       
        file.readAsDataURL(this.files[0]);
    }
}
document.getElementById("imgperfil").addEventListener("change", readImage, false);

//visualizar senha
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