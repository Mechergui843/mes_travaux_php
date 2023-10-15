<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="nom">votre nom</label><input type="text" name="nom" id="nom"> <br>
        <label for="cmntr">vos commentaire</label><textarea name="cmntr" id="cmntr" cols="30" rows="10"></textarea><br>
       <label for="adr">votre adresse courrier electronique</label> <input type="text" name="adr" id=""><br>
       <label for="elem"></label> <br>
       <input type="checkbox" name="elem[]" id="elem" value="design de site">design de site<br>
       <input type="checkbox" name="elem[]" id="elem" value="les liens">les liens<br>
       <input type="checkbox" name="elem[]" id="elem" value="facilité de navigation">facilité de navigation<br>
       <input type="checkbox" name="elem[]" id="elem" value="les images">les images<br>
        <input type="submit" value="soumettre" name='ok'><input type="reset" value="effacer">
    </form>
    <?php
        if(isset($_POST['ok'])){
            echo"le nom est ". $_POST['nom'];
            echo"<h2> reponse de la question</h2>";
            foreach ($_POST['elem'] as $key => $value) {
                echo $value."<br>";
            }
            //echo"<pre>";
            //var_dump($_POST);
            //echo"</pre>";

        }
    ?>
</body>
</html>