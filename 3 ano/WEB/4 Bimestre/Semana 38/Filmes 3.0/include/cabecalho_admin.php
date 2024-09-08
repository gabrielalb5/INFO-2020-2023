<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Gabriel Albino">
    <title>Cine Side</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body class="bg-dark text-white">
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand m-2" href="inicio_admin.php"><span class="material-symbols-outlined">magic_button</span> Cine Side</a>
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="inicio_admin.php">Início</a>
      <a class="nav-item nav-link" href="lista_filmes_admin.php">Filmes</a>
      <div class="navbar-collapse mb-2">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="Dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cadastrar</a>
            <ul class="dropdown-menu bg-dark" aria-labelledby="Dropdown">
                <li><a class="dropdown-item nav-link" href="filme_form.php">Filme</a></li>
                <li><a class="dropdown-item nav-link" href="">Categoria</a></li>
            </ul>
            </li>
        </ul>
      </div>
      <a class="nav-item nav-link" href="logout.php"><span class="material-symbols-outlined">logout</span></a>
    </div>
    </nav>
  </header>  
  <main>