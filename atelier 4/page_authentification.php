 <?php session_start();
if(isset($_GET['etat'])){
    $etat=$_GET["etat"];
    switch ($etat) {
        case '2':
            echo"<script>alert('vous devez vous authetifier d\'abord !!!')</script>";
            break;
        case '3':
            echo"<script>alert('votre mot de passe et ou votre login sont incorrecte')</script>";
            break;
    }
}
?>
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
        <a class="nav-link" href="ex1.php">Exercice 1
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="page_authentification.php">Exercice 2</a>
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
<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
    login : <input type="text" name="log"><br>
    mot de passe : <input type="text" name="mp"><br>
    <input type="submit" value="se connecter" name="ok">

    </form>
    <?php
        if (isset($_POST['ok']) && !empty($_POST['log']) && !empty($_POST['mp'])) {
            $log=htmlspecialchars($_POST['log']);
            $mp=htmlspecialchars($_POST['mp']);
            if(($log=="admin" && md5($mp)=="d41d8cd98f00b204e9800998ecf8427e") || ($log=="user" && md5($mp)=="d41d8cd98f00b204e9800998ecf8427e")) {
                $_SESSION['log']=$log;
                $_SESSION['mp']="d41d8cd98f00b204e9800998ecf8427e";
                
                if($_SESSION['log']=="admin") {
                header("location:page_secrete1.php");
                exit;
                }
                elseif ($_SESSION['log']=="user") {
                  header("location:page_secrete2.php");
                  exit;
                }
            }
            header("location:page_authentification.php?etat=3");
            exit;
        }
    ?>
    </div>
   
</body>

</html>