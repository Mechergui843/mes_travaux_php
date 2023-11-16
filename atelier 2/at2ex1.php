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
          <a class="nav-link active" href="at2ex1.php">Exercice 1
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="at2ex2.php">Exercice 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="at2ex3.php">Exercice 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="at2ex4.php">Exercice 4</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="at2ex5.php">Exercice 5</a>
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
    $notes=array("rami"=>7.50,"mohamed"=>19.00,"amira"=>15.50,"asma"=>10.00,"ahmed"=>09.5,"yassine"=>15.5,"islem"=>12.00);
    foreach ($notes as $key => $value) {
      if($value >= 10) {
        echo"$key : $value<br>";
      }
    }
    echo "le nombre des etudiants est ".count($notes)."<br>";
    arsort($notes);
    echo "L'étudiant qui a la meilleure note est " . key($notes) . " avec une note de " .reset($notes);
    echo"<table class='table'>
         <tr class='table-primary'>
         <th>nom</th>
         <th>note en PHP</th>
         </tr>";
         asort($notes);
    foreach ($notes as $key => $value) {
        echo"<tr><td>$key</td> <td>$value</td></tr>";
      }
      echo"</table>";

      echo"<table class='table'>
         <tr class='table-primary'>
         <th>nom</th>
         <th>note en PHP</th>
         </tr>";
         krsort($notes);
    foreach ($notes as $key => $value) {
        echo"<tr><td>$key</td> <td>$value</td></tr>";
      }
      echo"</table>";
      $som=0;
      foreach ($notes as $key => $value) {
        $som+=$value;          
        }
        $som/=count($notes);
        echo $som;
    ?>
    </div>
</body>

</html>