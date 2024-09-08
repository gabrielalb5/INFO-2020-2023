<?php
require_once("conecta_bd.php");
if (!isset($_SESSION)){
    session_start();
}
//Cadastro de Usuários (Cliente e Motorista)
function verificaEmail(){
    $usuario = $_SESSION;
    $conexao = obterConexao();
    $sql = "SELECT email FROM motorista WHERE email = ? 
    UNION SELECT email FROM cliente WHERE email = ?
    UNION SELECT email FROM cnh WHERE email = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("sss", $usuario["email"],$usuario["email"],$usuario["email"]);
    $stmt->execute();
    $resultado = $stmt->get_result();
    return $resultado;
}
function verificaCNH(){
    $cnh = $_SESSION;
    $conexao = obterConexao();
    $sql = "SELECT * FROM cnh WHERE numero = ? OR email = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ss", $cnh["numero_cnh"],$cnh["email"]);
    $stmt->execute();
    $resultado = $stmt->get_result();
    return $resultado;
}
function cadastrarCliente(){
    $conexao = obterConexao();
    $cliente = $_SESSION;
    $resultado = verificaEmail();
    if (mysqli_num_rows($resultado)>0){
        $_SESSION["h2"] = "E-mail já cadastrado!";
        $_SESSION["p"] = "Volte e insira novos dados";
        return;
    } else {
        $senha_md5 = md5($cliente["senha"]);
        $sql = "INSERT INTO cliente (nome, sobrenome, email, senha, cpf, telefone, uf, cidade) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("ssssssss", $cliente["nome"], $cliente["sobrenome"], $cliente["email"], $senha_md5, $cliente["cpf"], $cliente["telefone"], $cliente["uf"], $cliente["cidade"]);
        $stmt->execute();
        $stmt->close();
        $_SESSION["h2"] = "Bem-vindo ao time!";
        $_SESSION["p"] = 'Acesse seu perfil em "Entrar"';
    }
    $conexao->close();
    ImagemCliente();
    LimparCadastro();
}
function cadastrarMotorista(){
    $conexao = obterConexao();
    $motorista = $_SESSION;
    $resultado = verificaEmail();
    if (mysqli_num_rows($resultado)>0){
        $_SESSION["h2"] = "E-mail já cadastrado!";
        $_SESSION["p"] = "Volte e insira novos dados";
        return;
    } else {
        $resultado = verificaCNH();
        if(mysqli_num_rows($resultado)>0){
            $_SESSION["h2"] = "CNH já cadastrada!";
            $_SESSION["p"] = "Volte e insira novos dados";
            return;
        }else{
            $dados = $motorista["pagamentos"];
            $pagamentos = implode(", ",$dados);
            $senha_md5 = md5($motorista["senha"]);
            $sql = "INSERT INTO motorista (nome, sobrenome, email, senha, cpf, telefone, uf, cidade, pagamentos)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conexao->prepare($sql);
            $stmt->bind_param("sssssssss", $motorista["nome"], $motorista["sobrenome"], $motorista["email"], $senha_md5, $motorista["cpf"], $motorista["telefone"], $motorista["uf"], $motorista["cidade"], $pagamentos);
            $stmt->execute();
            $stmt->close();
            $_SESSION["h2"] = "Bem-vindo ao time!";
            $_SESSION["p"] = 'Acesse seu perfil em "Entrar"';
        }
    }
    $conexao->close();
    cadastrarCNH();
    ImagemMotorista();
    LimparCadastro();
}
//Cadastro de CNH
function cadastrarCNH(){
    $conexao = obterConexao();
    $cnh = $_SESSION;
    $resultado = verificaCNH();
    if (mysqli_num_rows($resultado)>0){
        $_SESSION["h2"] = "CNH já cadastrada!";
        $_SESSION["p"] = "Volte e insira novos dados";
        return;
    } else {
        $sql = "INSERT INTO cnh (numero,validade,email)
        VALUES (?, ?, ?)";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("sss", $cnh["numero_cnh"], $cnh["validade_cnh"], $cnh["email"]);
        $stmt->execute();
        $stmt->close();
    }
    $conexao->close();
    ImagemCNH();
}
//Cadastro das imagens
function ImagemCliente(){
    $imagem = $_SESSION["perfil_img"];
    $email = $_SESSION["email"];
    $pasta = "../assets/arquivos/clientes/";
    $nomeDoArquivo = $imagem['name'];
    $novoNomeDoArquivo = $email;
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
    $path = $pasta . $novoNomeDoArquivo . "." . $extensao;
    $deu_certo = move_uploaded_file($imagem['tmp_name'], $path);
    if($deu_certo){
        $conexao = obterConexao();
        $sql = "UPDATE cliente SET imagem = ? WHERE email = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("ss", $path, $email);
        $stmt->execute();
        $stmt->close();
        $conexao->close();
    }
}
function ImagemMotorista(){
    $imagem = $_SESSION["perfil_img"];
    $email = $_SESSION["email"];
    $pasta = "../assets/arquivos/motoristas/perfil/";
    $nomeDoArquivo = $imagem['name'];
    $novoNomeDoArquivo = $email;
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
    $path = $pasta . $novoNomeDoArquivo . "." . $extensao;
    $deu_certo = move_uploaded_file($imagem['tmp_name'], $path);
    if($deu_certo){
        $conexao = obterConexao();
        $sql = "UPDATE motorista SET imagem = ?  WHERE email = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("ss", $path, $email);
        $stmt->execute();
        $stmt->close();
        $conexao->close();
    }
}
function ImagemCNH(){
    $imagem = $_SESSION["cnh_img"];
    $email = $_SESSION["email"];
    $pasta = "../assets/arquivos/motoristas/cnh/";
    $nomeDoArquivo = $imagem['name'];
    $novoNomeDoArquivo = $email;
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
    $path = $pasta . "cnh_" . $novoNomeDoArquivo . "." . $extensao;
    $deu_certo = move_uploaded_file($imagem['tmp_name'], $path);
    if($deu_certo){
        $conexao = obterConexao();
        $sql = "UPDATE cnh SET imagem = ?  WHERE email = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("ss", $path,$email);
        $stmt->execute();
        $stmt->close();
        $conexao->close();
    }
}
//Limpar sessão com dados de cadastro
function LimparCadastro(){
    unset($_SESSION["nome"], $_SESSION["sobrenome"], $_SESSION["email"], $_SESSION["senha"], $_SESSION["senha_conf"], $_SESSION["cpf"], $_SESSION["telefone"], $_SESSION["uf"], $_SESSION["cidade"], $_SESSION["numero_cnh"], $_SESSION["validade_cnh"], $_SESSION["perfil"]);
}
function login($email,$senha,$opcao_login){
    if($opcao_login=="motorista"){
        $conexao = obterConexao();
        $sql = "SELECT * FROM motorista WHERE email = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $resultado = $stmt->get_result();
        if(mysqli_num_rows($resultado)>0){
            $senha_md5 = md5($senha);
            $sql = "SELECT * FROM motorista WHERE email = ? AND senha = ?";
            $stmt = $conexao->prepare($sql);
            $stmt->bind_param("ss",$email,$senha_md5);
            $stmt->execute();
            $resultado = $stmt->get_result();
            if(mysqli_num_rows($resultado)>0){
                $_SESSION["senha"] = $senha;
                $_SESSION["logado"] = $email;
                $_SESSION["perfil"] = $opcao_login;
                header("Location:../motorista/inicio.php");
            }else{
                $_SESSION["msg"] = 'Senha incorreta.';
                $_SESSION["tipo_msg"] = 'alert-danger';
                header("Location:../public/index.php");
            }
        }else{
            $_SESSION["msg"] = 'E-mail não cadastrado.';
            $_SESSION["tipo_msg"] = 'alert-danger';
            header("Location:../public/index.php");
        }
    }else{
        $conexao = obterConexao();
        $sql = "SELECT * FROM cliente WHERE email = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $resultado = $stmt->get_result();
        if(mysqli_num_rows($resultado)>0){
            $senha_md5 = md5($senha);
            $sql = "SELECT * FROM cliente WHERE email = ? AND senha = ?";
            $stmt = $conexao->prepare($sql);
            $stmt->bind_param("ss",$email,$senha_md5);
            $stmt->execute();
            $resultado = $stmt->get_result();
            if(mysqli_num_rows($resultado)>0){
                $_SESSION["senha"] = $senha;
                $_SESSION["logado"] = $email;
                $_SESSION["perfil"] = $opcao_login;
                header("Location:../cliente/inicio.php");
            }else{
                $_SESSION["msg"] = 'Senha incorreta.';
                $_SESSION["tipo_msg"] = 'alert-danger';
                header("Location:../public/index.php");
            }
        }else{
            $_SESSION["msg"] = 'E-mail não cadastrado.';
            $_SESSION["tipo_msg"] = 'alert-danger';
            header("Location:../public/index.php");
        }
    }
}
function buscarUsuario(){
    $perfil = $_SESSION["perfil"];
    $conexao = obterConexao();
    if($perfil=="motorista"){
        $sql = "SELECT * FROM motorista WHERE email = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("s", $_SESSION["logado"]);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $_SESSION["usuario"] = mysqli_fetch_assoc($resultado);
        $stmt->close();
    }else{
        $sql = "SELECT * FROM cliente WHERE email = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("s", $_SESSION["logado"]);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $_SESSION["usuario"] = mysqli_fetch_assoc($resultado);
        $stmt->close();
    }
}
function buscarCNH(){
    $conexao = obterConexao();
    $sql = "SELECT * FROM cnh WHERE email = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $_SESSION["logado"]);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $_SESSION["cnh"] = mysqli_fetch_assoc($resultado);
    $stmt->close();
}
function saudacao(){
    $usuario = $_SESSION["usuario"];
    $uf = $_SESSION["usuario"]["uf"];
    $c = $_SESSION["usuario"]["cidade"];
    if($uf=="AC"){
        date_default_timezone_set('America/Rio_Branco');
    }else if($uf=="AM" || $uf=="MT" || $uf=="MS" || $uf=="RO" || $uf=="RR"){
        date_default_timezone_set('America/Porto_Velho');
    }else if($c=="Fernando de Noronha"){
        date_default_timezone_set('America/Noronha');
    }else{
        date_default_timezone_set('America/Sao_Paulo');
    }
    $hora = date("H");
    if($hora>=6 && $hora<12){
        $saudacao = "Bom dia" . ', ' . $usuario["nome"].'!';;
    }else if($hora>=12 && $hora<18){
        $saudacao = "Boa tarde" . ', ' . $usuario["nome"].'!';;
    }else{
        $saudacao = "Boa noite" . ', ' . $usuario["nome"].'!';;
    }
    return $saudacao;
}
function deslogado(){
    if(!isset($_SESSION["usuario"])){
        header("Location:../public/index.php");
    }
}
function logado(){
    if($_SESSION["perfil"] == "motorista"){
        header("Location:../motorista/inicio.php");
    }else{
        header("Location:../cliente/inicio.php");
    }
}
function logout(){
    session_destroy();
    header("Location:../public/index.php");
}
function updateCliente($nome,$sobrenome,$senha,$cpf,$telefone,$uf,$cidade){
    $email = $_SESSION["logado"];
    $conexao = obterConexao();
    $senha_md5 = md5($senha);
    $sql = "UPDATE cliente SET nome = ?, sobrenome = ?, senha = ?, cpf = ?, telefone = ?, uf = ?, cidade = ? WHERE email = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ssssssss",$nome,$sobrenome,$senha_md5,$cpf,$telefone,$uf,$cidade,$email);
    $stmt->execute();
    if($stmt->affected_rows>0){
        $_SESSION["msg"] = 'Seus dados foram alterados.';
        $_SESSION["tipo_msg"] = "alert-warning";
        $_SESSION["senha"] = $senha;
    }
    $stmt->close();
    $conexao->close();
}
function updateMotorista($nome,$sobrenome,$senha,$cpf,$telefone,$uf,$cidade,$pagamentos){
    $email = $_SESSION["logado"];
    $conexao = obterConexao();
    $senha_md5 = md5($senha);
    $sql = "UPDATE motorista SET nome = ?, sobrenome = ?, senha = ?, cpf = ?, telefone = ?, uf = ?, cidade = ?, pagamentos = ? WHERE email = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("sssssssss",$nome,$sobrenome,$senha_md5,$cpf,$telefone,$uf,$cidade,$pagamentos,$email);
    $stmt->execute();
    if($stmt->affected_rows>0){
        $_SESSION["msg"] = 'Seus dados foram alterados.';
        $_SESSION["tipo_msg"] = "alert-warning";
        $_SESSION["senha"] = $senha;
    }
    $stmt->close();
    $conexao->close();
}
function updateCNH($validade_cnh){
    $email = $_SESSION["logado"];
    $conexao = obterConexao();
    $sql = "UPDATE cnh SET validade = ? WHERE email = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ss",$validade_cnh,$email);
    $stmt->execute();
    if($stmt->affected_rows>0){
        $_SESSION["msg"] = 'Seus dados foram alterados.';
        $_SESSION["tipo_msg"] = "alert-warning";
    }
    $stmt->close();
    $conexao->close();
}
function updateImagemMotorista(){
    $imagem = $_SESSION["nova_img"];
    $email = $_SESSION["email"];
    unlink($_SESSION["usuario"]["imagem"]);
    $pasta = "../assets/arquivos/motoristas/perfil/";
    $nomeDoArquivo = $imagem['name'];
    $novoNomeDoArquivo = $email;
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
    $path = $pasta . $novoNomeDoArquivo . "." . $extensao;
    $deu_certo = move_uploaded_file($imagem['tmp_name'], $path);
    if($deu_certo){
        $conexao = obterConexao();
        $sql = "UPDATE motorista SET imagem = ? WHERE email = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("ss", $path, $email);
        $stmt->execute();
        if($stmt->affected_rows>0){
            $_SESSION["msg"] = 'Seus dados foram alterados.';
            $_SESSION["tipo_msg"] = "alert-warning";
        }
        $stmt->close();
        $conexao->close();  
    }
    unset($_SESSION["nova_img"]);
}
function updateImagemCliente(){
    $imagem = $_SESSION["nova_img"];
    $email = $_SESSION["email"];
    unlink($_SESSION["usuario"]["imagem"]);
    $pasta = "../assets/arquivos/clientes/";
    $nomeDoArquivo = $imagem['name'];
    $novoNomeDoArquivo = $email;
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
    $path = $pasta . $novoNomeDoArquivo . "." . $extensao;
    $deu_certo = move_uploaded_file($imagem['tmp_name'], $path);
    if($deu_certo){
        $conexao = obterConexao();
        $sql = "UPDATE cliente SET imagem = ? WHERE email = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("ss", $path, $email);
        $stmt->execute();
        if($stmt->affected_rows>0){
            $_SESSION["msg"] = 'Seus dados foram alterados.';
            $_SESSION["tipo_msg"] = "alert-warning";
        }
        $stmt->close();
        $conexao->close();
    }
    unset($_SESSION["nova_img"]);
}
function updateImagemCNH(){
    $imagem = $_SESSION["nova_cnh_img"];
    $email = $_SESSION["email"];
    unlink($_SESSION["cnh"]["imagem"]);
    $pasta = "../assets/arquivos/motoristas/cnh/";
    $nomeDoArquivo = $imagem['name'];
    $novoNomeDoArquivo = $email;
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
    $path = $pasta . "cnh_" . $novoNomeDoArquivo . "." . $extensao;
    $deu_certo = move_uploaded_file($imagem['tmp_name'], $path);
    if($deu_certo){
        $conexao = obterConexao();
        $sql = "UPDATE cnh SET imagem = ? WHERE email = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("ss",$path, $email);
        $stmt->execute();
        if($stmt->affected_rows>0){
            $_SESSION["msg"] = 'Seus dados foram alterados.';
            $_SESSION["tipo_msg"] = "alert-warning";
        }
        $stmt->close();
        $conexao->close();
    }
    unset($_SESSION["nova_cnh_img"]);
}
function excluirUsuario($email){
    $conexao = obterConexao();
    $perfil = $_SESSION["perfil"];
    if($perfil=="motorista"){
        $sql = "DELETE FROM proposta WHERE motorista = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->close();
        $sql = "DELETE FROM veiculo WHERE email = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->close();
        $sql = "DELETE FROM cnh WHERE email = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->close();
        $sql = "DELETE FROM motorista WHERE email = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->close();
        $conexao->close();
        unlink($_SESSION["cnh"]["imagem"]);
    }else{
        $sql = "DELETE FROM cliente WHERE email = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->close();
        $conexao->close();
    }
    unlink($_SESSION["usuario"]["imagem"]);
    logout();
}
function verificaVeiculo($renavam,$placa){
    $conexao = obterConexao();
    $sql = "SELECT * FROM veiculo WHERE renavam = ? OR placa = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("is", $renavam,$placa);
    $stmt->execute();
    $resultado = $stmt->get_result();
    return $resultado;
}
function cadastrarVeiculo($tipo,$renavam,$marca,$modelo,$placa,$ano,$cor){
    $resultado = listarVeiculos();
    $conexao = obterConexao();
    $email = $_SESSION["email"];
    $resultado = verificaVeiculo($renavam, $placa);
    if(mysqli_num_rows($resultado)>0){
        $_SESSION["msg"] = "Veículo já cadastrado.";
        $_SESSION["tipo_msg"] = "alert-danger";
        return;
    }else{
        $sql = "INSERT INTO veiculo (tipo, renavam, marca, modelo, placa, ano, cor, email)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("issssiss", $tipo, $renavam, $marca, $modelo, $placa, $ano, $cor, $email);
        $stmt->execute();
        $stmt->close();
        $_SESSION["msg"] = "Veículo adicionado ao perfil!";
        $_SESSION["tipo_msg"] = "alert-success";
    }
    $conexao->close();
}
function listarTipoVeiculo(){
    $conexao = obterConexao();
    $lista_tv = [];
    $sql = "SELECT * FROM tipo_veiculo";
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->get_result();
    while($tipo = mysqli_fetch_assoc($resultado)){
        array_push($lista_tv,$tipo);
    }
    $stmt->close();
    $conexao->close();
    return $lista_tv;
}
function listarVeiculos(){
    $conexao = obterConexao();
    $email = $_SESSION["logado"];
    $lista_veiculos = [];
    $sql = "SELECT v.renavam, v.marca, v.modelo, v.placa, v.ano, v.cor, tv.id_tv, tv.nome as 'tipo'
    FROM veiculo v
    INNER JOIN tipo_veiculo tv ON v.tipo = tv.id_tv
    WHERE email = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $_SESSION["veiculo_cont"] = mysqli_num_rows($resultado);
    while($veiculo = mysqli_fetch_assoc($resultado)){
        array_push($lista_veiculos,$veiculo);
    }
    $stmt->close();
    $conexao->close();
    return $lista_veiculos;
}
function updateVeiculo($tipo,$renavam,$marca,$modelo,$placa,$ano,$cor){
    $conexao = obterConexao();
    $sql = "UPDATE veiculo SET tipo = ?, marca = ?, modelo = ?, placa= ?, ano = ?, cor = ? WHERE renavam = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("isssiss",$tipo,$marca,$modelo,$placa,$ano,$cor,$renavam);
    $stmt->execute();
    if($stmt->affected_rows>0){
        $_SESSION["msg"] = 'Dados do veículo alterados!';
        $_SESSION["tipo_msg"] = "alert-warning";
    }
    $stmt->close();
    $conexao->close();
}
function excluirVeiculo($renavam){
    $conexao = obterConexao();
    $sql = "DELETE FROM veiculo WHERE renavam = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $renavam);
    $stmt->execute();
    if($stmt->affected_rows>0){
        $_SESSION["msg"] = 'Veículo excluído.';
        $_SESSION["tipo_msg"] = "alert-danger";
    }
    $stmt->close();
    $conexao->close();
}
function listarCategoriaPedido(){
    $conexao = obterConexao();
    $lista_cp = [];
    $sql = "SELECT * FROM categoria_pedido";
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->get_result();
    while($categoria = mysqli_fetch_assoc($resultado)){
        array_push($lista_cp,$categoria);
    }
    $stmt->close();
    $conexao->close();
    return $lista_cp;
}
function criarPedido($email,$descricao,$categoria,$origem,$destino,$data_entrega,$horario,$status){
    $conexao = obterConexao();
    $sql = "INSERT INTO pedido (cliente, descricao, categoria, origem, destino, data_entrega, horario, status)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ssssssss",$email,$descricao,$categoria,$origem,$destino,$data_entrega,$horario,$status);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $_SESSION["msg"] = 'Pedido enviado com sucesso!';
    $_SESSION["tipo_msg"] = "alert-success";
    $stmt->close();
    $conexao->close();
}
function listarPedidos_cliente(){
    $conexao = obterConexao();
    $email = $_SESSION["logado"];
    $lista_pedidos = [];
    $sql = "SELECT p.id_p, p.descricao, p.origem, p.destino, p.data_entrega, p.horario, p.valor, cp.nome as 'categoria' FROM pedido p
    INNER JOIN categoria_pedido cp ON p.categoria = cp.id_cp
    WHERE cliente = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();
    while($pedido = mysqli_fetch_assoc($resultado)){
        array_push($lista_pedidos,$pedido);
    }
    $stmt->close();
    $conexao->close();
    return $lista_pedidos;
}
function listarPedidos_motorista($cidade,$uf){
    $conexao = obterConexao();
    $email = $_SESSION["logado"];
    $lista_pedidos = [];
    $sql = "SELECT p.id_p, p.descricao, p.origem, p.destino, p.data_entrega, p.horario, p.valor, p.status, cp.nome AS 'categoria'
    FROM pedido p
    INNER JOIN categoria_pedido cp ON p.categoria = cp.id_cp
    LEFT JOIN proposta pr ON p.id_p = pr.pedido AND pr.motorista = ?
    WHERE p.origem LIKE '%$cidade%$uf%' AND pr.pedido IS NULL ORDER BY 
    p.data_pedido;";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $resultado = $stmt->get_result();
    while($pedido = mysqli_fetch_assoc($resultado)){
        array_push($lista_pedidos,$pedido);
    }
    $stmt->close();
    $conexao->close();
    return $lista_pedidos;
}

function formataData($data){
    $dataFormatada = date('d/m/Y', strtotime($data));
    echo $dataFormatada;
}
function formataHora($hora){
    $horaFormatada = substr($hora, 0, 5);
    echo $horaFormatada;
}

function realizarProposta($pedido,$valor,$email,$veiculo){
    $conexao = obterConexao();
    $sql = "INSERT INTO proposta (pedido, valor, motorista, veiculo)
    VALUES (?, ?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ssss",$pedido,$valor,$email,$veiculo);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $_SESSION["msg"] = 'Proposta enviada com sucesso!';
    $_SESSION["tipo_msg"] = "alert-success";
    $stmt->close();
    $conexao->close();
}

function listarPropostas($pedido){
    $conexao = obterConexao();
    $lista_propostas = [];
    $sql = "SELECT pr.pedido,
    REPLACE(pr.valor, '.', ',') as valor,
    CONCAT(m.nome, ' ', m.sobrenome) AS motorista,
    tv.nome AS veiculo, m.email, m.telefone, m.pagamentos AS pagamento
    FROM proposta pr
    INNER JOIN motorista m ON pr.motorista = m.email
    INNER JOIN veiculo v ON pr.veiculo = v.renavam
    INNER JOIN tipo_veiculo tv ON v.tipo = tv.id_tv
    WHERE pr.pedido = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $pedido);
    $stmt->execute();
    $resultado = $stmt->get_result();
    while($proposta = mysqli_fetch_assoc($resultado)){
        array_push($lista_propostas,$proposta);
    }
    $stmt->close();
    $conexao->close();
    return $lista_propostas;
}

//propostas feitas pelo motorista para aparecer no próprio perfil
function listarPropostas_motorista(){
    $conexao = obterConexao();
    $email = $_SESSION["logado"];
    $lista_propostas_enviadas = [];
    $sql = "SELECT p.id_p, p.descricao, p.origem, p.destino, p.data_entrega, p.horario, cp.nome AS 'categoria',
    REPLACE(pr.valor, '.', ',') as valor,
    tv.nome AS tipo_veiculo, v.placa
    FROM pedido p
    INNER JOIN proposta pr ON p.id_p = pr.pedido
    INNER JOIN categoria_pedido cp ON p.categoria = cp.id_cp 
    INNER JOIN motorista m ON pr.motorista = m.email
    INNER JOIN veiculo v ON pr.veiculo = v.renavam
    INNER JOIN tipo_veiculo tv ON v.tipo = tv.id_tv
    WHERE pr.motorista = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();
    while($proposta = mysqli_fetch_assoc($resultado)){
        array_push($lista_propostas_enviadas,$proposta);
    }
    $stmt->close();
    $conexao->close();
    return $lista_propostas_enviadas;
}

function excluirProposta($pedido){
    $conexao = obterConexao();
    $email = $_SESSION["logado"];
    $sql = "DELETE FROM proposta WHERE pedido = ?  AND motorista = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ss",$pedido,$email);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $_SESSION["msg"] = 'Proposta excluída.';
    $_SESSION["tipo_msg"] = "alert-warning";
    $stmt->close();
    $conexao->close();
}
?>