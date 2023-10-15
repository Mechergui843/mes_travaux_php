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
   $tmots=array("ahmed"=>"ahmed1234","bilel"=>"bilel098","yassine"=>"hhhyass345","mohamed"=>"moha12345");
   if (isset($_POST['utilisateur'])) {
    $select = $_POST['utilisateur'];
    if (array_key_exists($select, $tmots)) {
        $mdp = $tmots[$select];
        echo "Mot de passe de l'utilisateur $select : $mdp <br>";
    } else {
        echo "Utilisateur non trouvé.";
    }
}
$tmots1=array();
foreach ($tmots as $key => $value) {
    $tmots1[$value]=$key;
}

if (isset($_GET['motdepasse'])) {
    $select1 = $_GET['motdepasse'];
    if (array_key_exists($select1, $tmots1)) {
        $user = $tmots1[$select1];
        echo "Mot de passe :  $select1 user : $user <br>";
    } else {
        echo "Utilisateur non trouvé.";
    }
}



   ?>
    </div>

    <form method="POST">
        <label for="utilisateur">Sélectionnez un utilisateur :</label>
        <select name="utilisateur" id="utilisateur">
            <?php
            foreach ($tmots as $nom => $mdp) {
                echo "<option value=\"$nom\">$nom</option>";
            }
            ?>
        </select>
        <input type="submit" value="Afficher le mot de passe">
        </form>
        <form method="GET">
        <label for="motdepasse">Sélectionnez un mot de passe :</label>
        <select name="motdepasse" id="motdepasse">
            <?php
            foreach ($tmots1 as $mdp => $nom) {
                echo "<option value=\"$mdp\">$mdp</option>";
            }
            ?>
        </select>
        <input type="submit" value="Afficher l'utilisateur">
    </form>
</body>

</html>