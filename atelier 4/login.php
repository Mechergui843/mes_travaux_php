<?php session_start();
if(isset($_GET['etat'])){
    $etat=$_GET["etat"];
    switch ($etat) {
        case '1':
            echo"<script>alert('merci pour votre visite')</script>";
            break;
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
</head>
<body>
    <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
    login : <input type="text" name="log"><br>
    mot de passe : <input type="text" name="mp"><br>
    <input type="submit" value="se connecter" name="ok">

    </form>
    <?php
        if (isset($_POST['ok']) && !empty($_POST['log']) && !empty($_POST['mp'])) {
            $log=htmlspecialchars($_POST['log']);
            $mp=htmlspecialchars($_POST['mp']);
            if($log=="admin" && md5($mp)=="0192023a7bbd73250516f069df18b500"){
                $_SESSION['log']=$log;
                $_SESSION['mp']="0192023a7bbd73250516f069df18b500";

                header("location:page1.php");
                exit;
            }
            header("location:login.php?etat=3");
        }
    ?>
</body>
</html>