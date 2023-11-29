<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../atelier6/assets/css/bootstrap.min.css">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Iset Rades</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link " href="#">Acceuil
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Nos produits</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Nos categorie</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contacter nous</a>
        </li>
</ul>
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link " href="#"> <i class="fas fa-shopping-cart mx-1"></i> panier
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="#"><i class="fas fa-user mx-1"></i>créer un compte
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="#"><i class="fas fa-sign-in mx-1"></i>connexion
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="#"><i class="fas fa-sign-out mx-1"></i>deconnexion
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-3">
<?= $contenu;?>
</div>
</body>
</html>


