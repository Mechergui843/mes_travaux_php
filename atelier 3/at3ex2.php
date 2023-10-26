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
<legend>Verification d'dresse IPv4</legend>
    <input type="number" name="t1">.
    <input type="number" name="t2">.
    <input type="number" name="t3">.
    <input type="number" name="t4"><br>
    <input type="submit" value="verifier" class="btn btn-primary" name="inscription">

</fieldset>
    </form>
    <?php
    function valideIP($ip) {
      return filter_var($ip, FILTER_VALIDATE_IP) != false;
  }
    if(isset($_POST["t1"])&&isset($_POST["t2"])&&isset($_POST["t3"])&&isset($_POST["t4"])){
      $ip=strval($_POST["t1"]).".".strval($_POST["t2"]).".".strval($_POST["t3"]).".".strval($_POST["t4"]);
      if(valideIP($ip)){
        echo"L'adresse IP $ip est valide.";
      }else {
        echo "L'adresse IP $ip n'est pas valide.";
    }
    }
        ?>
    </div>
    
</body>

</html>