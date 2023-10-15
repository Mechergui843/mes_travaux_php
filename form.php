<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="get">
      <input type="text" name="name" placeholder="donner le nom" />
      <input type="text" name="age" placeholder="donner l'age" />
      <input type="submit" value="envoyer" name="ok"/>
    </form>
    <?php 
    if(isset($_GET['ok'])){
echo"votre nom est ".htmlspecialchars( $_GET['name']);
echo"<br> votre age est : ".htmlspecialchars($_GET['age']); 
    }
?>

  </body>
</html>
