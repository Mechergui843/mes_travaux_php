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

<form method="POST">
    <label for="ch">donner une chaine de caracteres :</label>
    <input type="text" name="t1" id="ch"><br>
    <label for="sch">preciser l'indice de depart de la sous chaine :</label>
    <input type="number" name="t2" id="sch"><br>
    <label for="fch">donner la longueur de la sous chaine  :</label>
    <input type="number" name="t3" id="fch"><br>
    <input type="submit" value="tester">
    </form>
    <?php
   if(isset($_POST['t1']) && isset($_POST['t2'])&& isset($_POST['t3'])){
       $ch=$_POST['t1'];
       $deb=$_POST['t2'];
       $long=$_POST['t3'];
       echo"la longueur de la chaine de caracteres est ".strlen($ch);
       echo"<br>";
       echo"la sous chaine est ".substr($ch,$deb,$long);
       echo"<br>";
       $ch2="";
       for ($i=0; $i <strlen($ch); $i++) { 
           $ch2[strlen($ch)-$i]=$ch[$i];
       }
       echo "l'inverse de la chaine est ".$ch2;
   }
    ?>
    </div>
    
</body>

</html>