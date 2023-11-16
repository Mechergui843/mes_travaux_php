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
          <a class="nav-link" href="main_ex1.php">Exercice 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="main_ex2.php">Exercice 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="main_ex3.php">Exercice 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="main_ex4.php">Exercice 4</a>
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
require "ville.php";
$v1=new ville("chebba","mahdia");
$v2=new ville("rades","ben arous");
echo $v1->__toString();
echo"<br>";
echo $v2->__toString();
?>
    </div>
    
</body>

</html>





