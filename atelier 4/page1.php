
<?php
require"session_test.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="page1.php">page1.php</a>
    <a href="page2.php">page2.php</a>
    <a href="page3.php">page3.php</a>
    <a href="deconnexion.php">se deconnecter</a>
<?php 
    $_SESSION['nom']="mechergui";
    $_SESSION['adr']="TUNIS";
    
    ?>
</body>
</html>