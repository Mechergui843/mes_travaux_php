<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    subject: <input type="text" name="subject"><br>
    votre image <input type="file" name="photo" id="">
       
        <input type="submit" value="soumettre" name='ok'>
    </form>
    <?php
        if(isset($_POST['ok'])){
           if(is_uploaded_file($_FILES['photo']['tmp_name'])){
            move_uploaded_file($_FILES['photo']['tmp_name'],$_FILES['photo']['name']);
            echo"<img src='".$_FILES['photo']['name']."' />";
           }
           

        }
    ?>
</body>
</html>