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

<form method="POST" action="<?=$_SERVER['PHP_SELF'];?>">
<fieldset>
<legend>Inscription à la visite guidée</legend>
<label for="nom">votre nom :</label>
    <input type="text" name="t1" id="nom"><br>
    <label for="prenom">votre prenom :</label>
    <input type="text" name="t2" id="prenom"><br>
    <label for="age">votre age :</label>
    <input type="number" name="t3" id="age"><br>
    <label for="mail">votre email :</label>
    <input type="email" name="t4" id="mail"><br>
    <input type="submit" value="inscription" class="btn btn-primary" name="inscription"><br>
    <input type="submit" value="afficher" name="afficher" class="btn btn-primary">
</fieldset>
    </form>
    <?php
    if(isset($_POST["inscription"])){
    if ($_POST["t1"]!="" && $_POST["t2"]!="" && $_POST["t3"]!="" && $_POST["t4"]!="") {
        echo"<script>alert('inscription pour :".htmlspecialchars( $_POST["t2"])." ".htmlspecialchars($_POST["t1"])." a ete prise en compte')</script>" ;
    }
}$n=count($_POST);
    if (isset($_POST["afficher"])) {
        echo"<table class='table' >";
        $x=0;
    foreach ($_POST as $key => $value) {
        if($x!=$n-1){
        echo"<tr class='table-primary'><td>".htmlspecialchars($key)."</td><td>".htmlspecialchars($value)."</td></tr>";
        $x+=1;
    }
}
}
    echo"</table>";
    ?>
    </div>
    
</body>

</html>