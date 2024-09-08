//menu responsivo
const toggleButton = document.querySelector(".toggle-button")
const navbarLinks = document.querySelector('.navbar-links')

if(toggleButton){
    toggleButton.addEventListener('click', () => {
        
        navbarLinks.classList.toggle('active')
        
    })
}

// MENU LATERAL ~ TEM QUE FICAR NESSA ALTURA DO CÓDIGO ~
var checkBtn = document.querySelector("#check");
var sidebar = document.querySelector(".sidebar");

if (checkBtn) {
    checkBtn.addEventListener('click', () => {
        
        if (checkBtn.checked) {
            sidebar.style.animation = 'slide-out 1s ease-out';
            sidebar.style.left = '0'
        } else {
            sidebar.style.animation = 'slide-in 1s ease';
            sidebar.style.left = '-200px'
        }
        
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
function red_peca(){
    window.location.href = "cadastropeca.html"
}
function red_perfilpecas(){
    window.location.href = "perfilpecas.html"
}
function red_buscafavorito(){
    window.location.href = "buscafavorito.html"
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
document.getElementById("imgpreview").addEventListener("change", readImage, false);

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
