<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ISET RADES</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" >Exercice 1
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" >Exercice 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" >Exercice 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" >Exercice 4</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" >Exercice 5</a>
        </li>
        <li class="nav-item dropdown">
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-3">
    <?php
    $tab=[
        'etudiant 1'=>'foulene ben foulen1',
        'etudiant 2'=>'foulene ben foulen2',
        'etudiant 3'=>'foulene ben foulen3',
        'etudiant 4'=>'foulene ben foulen4'
    
    ]
   ?>
    </div>

    <h1>Liste des etiudiant </h1>
    <table class="table">
        <tr>
            <?php
                foreach ($tab as $key => $value) {
                    echo"<th>$key</th>";
                }
            ?>
        </tr>
        <tr>
            <?php
                foreach ($tab as $value) {
                    echo"<td>$value</td>";
                }
            ?>
        </tr>

    </table>
        
    </form>
</body>

</html>