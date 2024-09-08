<?php include("../include/cabecalho_semlogin.php"); ?>
<center>
    <div>
        <h3 class="m-4">Cadastrar Administrador</h3>
        <form action="admin_cadastro.php" method="post">
            <div class="form-group">
                <input type="text" placeholder="Nome" name="nome" class="p-2 rounded-pill" required/><br><br>
            </div>
            <div class="form-group">
                <input type="email" placeholder="E-mail" name="email" class="p-2 rounded-pill" required/><br><br>
            </div>
            <div class="form-group">
                <input type="password" placeholder="Senha" name="senha" class="p-2 rounded-pill" required/><br><br>
            </div>
            <input class="btn btn-outline-dark" type="submit" value="Cadastrar"/>
        </form>
    </div>
</center>
<?php include("../include/rodape.php"); ?>