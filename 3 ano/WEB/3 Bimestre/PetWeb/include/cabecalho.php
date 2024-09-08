<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Gabriel Albino">
    <title>Pets</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand m-2 text-white" href="../public/index.php">WEB <span class="material-symbols-outlined">pets</span> PETS</a>
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="../src/pet_lista.php">Animais para adoção</a>
        <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="Dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cadastrar</a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="Dropdown">
                <li><a class="dropdown-item" href="../src/pet_form.php">Animal</a></li>
                <li><a class="dropdown-item" href="../src/especie_form.php">Espécie</a></li>
            </ul>
            </li>
        </ul>
        </div>
      </div>
    </nav>
  </header>  
  <main class="container">