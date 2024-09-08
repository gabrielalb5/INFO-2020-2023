<?php include("../include/cabecalho_cliente.php");
buscarUsuario();
$saudacao = saudacao();?>
<div class="container">
    <div class="inicio">
    <h2><?php echo $saudacao?></h2><br>
    <h4 class="text-secondary">O que você precisa transportar?</h4>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118560.81063456599!2d-48.24014352007688!3d-21.779280565452694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b8f15fecb7508b%3A0xbdaebe35da49b086!2sAraraquara%2C%20SP!5e0!3m2!1spt-BR!2sbr!4v1687667747705!5m2!1spt-BR!2sbr" width="900" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<?php include("../include/rodape.php");?>