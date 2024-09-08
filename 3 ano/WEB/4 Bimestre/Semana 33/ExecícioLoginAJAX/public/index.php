<?php include("../include/cabecalho.php")?>
<center>
<div class="mt-5">
 <h3 class="mb-3 text-white">Login</h3>
    <form>
        <div class="form-group">
            <input type="text" class="p-2 rounded-pill"  placeholder="E-mail" name="email" id="email" max="255" required></br></br>
        </div>
        <div class="form-group">
            <input type="password" class="p-2 rounded-pill" placeholder="Senha" name="senha" id="senha" max="50" required></br></br>
        </div>
            <button type="button" class="btn btn-outline-light" id="btn_login">Entrar</button></br></br></br>
        </form>
        <a class="link-light text-decoration-none" href="../src/usuario_form.php">Crie uma conta</a>
</div>
</center>
<?php include("../include/rodape.php")?>