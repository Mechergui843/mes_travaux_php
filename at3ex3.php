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
        <a class="nav-link active" href="at3ex1.php">Exercice 1
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="at3ex2.php">Exercice 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="at3ex3.php">Exercice 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="at3ex4.php">Exercice 4</a>
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

<form method="GET" action="<?=$_SERVER['PHP_SELF'];?>">
<label for="pre">Prenom : </label><input type="text" name="t1" id="pre"><br>
<label for="rep">Repitition :</label> <input type="number" name="t2" id="rep"><br>
<input type="submit" name="ok" value="cliquer ici">
</form>

<?php
if(isset($_GET["ok"])){
  if($_GET["t1"]=="" || $_GET["t2"]==NULL){
    echo "<script>alert('Les champs doivent être non vides.');</script>";
  } else if ($_GET["t2"]>=10) {
    echo "<script>alert('Le nombre de repetition doit etre <10 ');</script>";
  }else {
    $t1 = $_GET["t1"];
    $t2 = $_GET["t2"];
    header("Location: bienvenue.php?t1=$t1&t2=$t2");
  }
}
?>
    </div>
    
</body>

</html>