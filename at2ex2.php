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
   $tabpays1=array("tunisie","algerie","canda","france","allemagne","suisse");
   foreach ($tabpays1 as $x) {
    echo $x."<br>";
  }
  echo"<hr>";
  sort($tabpays1);
  foreach ($tabpays1 as $x) {
    echo $x."<br>";
  }
  echo"<hr>";
  rsort($tabpays1);
  foreach ($tabpays1 as $x) {
    echo $x."<br>";
  }
  echo"<hr>";
  $tabpays2=array("tunisie"=>"tunisie","alger"=>"algerie","ottawa"=>"canda","paris"=>"france","berlin"=>"allemagne","géneve"=>"suisse");
  foreach ($tabpays2 as $key=> $value) {
    echo $key." : ".$value."<br>";
  }
  echo"<hr>";
  asort($tabpays2);
  foreach ($tabpays2 as $key=> $value) {
    echo $key." : ".$value."<br>";
  }
  echo"<hr>";
  arsort($tabpays2);
  foreach ($tabpays2 as $key=> $value) {
    echo $key." : ".$value."<br>";
  }
  echo"<hr>";
  ksort($tabpays2);
  foreach ($tabpays2 as $key=> $value) {
    echo $key." : ".$value."<br>";
  }
  echo"<hr>";
  krsort($tabpays2);
  foreach ($tabpays2 as $key=> $value) {
    echo $key." : ".$value."<br>";
  }

  echo"<table class='table'>
         <tr class='table-primary'>
         <th>Pays</th>
         </tr>";
    foreach ($tabpays1 as $value) {
        echo"<tr><td>$value</td></tr>";
      }
      echo"</table>";

      echo"<table class='table'>
      <tr class='table-primary'>
      <th>Capitale</th>
      <th>Pays</th>
      </tr>";
 foreach ($tabpays2 as $key => $value) {
     echo"<tr><td>$key</td> <td>$value</td></tr>";
   }
   echo"</table>";
    ?>
    </div>
</body>

</html>