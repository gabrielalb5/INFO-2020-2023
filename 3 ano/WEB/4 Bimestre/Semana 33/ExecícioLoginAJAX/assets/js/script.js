window.addEventListener("load", setEventos);

function setEventos(){
    let button = document.getElementById("btn_login");
    button.addEventListener("click", verificarLogin);
}

function verificarLogin(){
    const email = document.getElementById("email").value;
    const senha = document.getElementById("senha").value;
    
    const xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200) {
            window.location.href = "../sr"
          }
    }

    xhttp.open("POST","../src/login.php");
    xhttp.setRequestHeader("Conten-type","application/x-www-form-urlencoded");
    xhttp.send("email="+email+"&senha="+senha);
}