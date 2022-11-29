<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">IMC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Registrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=perfil">Perfil</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



<div class="container">
    <div class="row">
        <div class="col mt-5">
    <?php
        include("config.php");
        switch(@$_REQUEST["page"]){
            case "novo":
                include("registrar.php");
            break;
            case "login":
                include("login.php");
            break;
            case "salvar":
                include("salvar-usuario.php");
            break;  
            case "perfil":
                include("perfil.php");
            break;
            case "logar":
                include("logar-usuario.php");
            break;
            default:
            print "<h1>Bem vindo!</h1>
            <p>Site para verificar o IMC</p>
            <p>Feito Por:</p>
            <li>Erion Caetano</li>
            <li>Henrique Rocca</li>
            <li>Iago Estevo</li>
            <li>João Victor</li>
            <li>Theo Mendes</li>";            
        }
    ?>
    
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>