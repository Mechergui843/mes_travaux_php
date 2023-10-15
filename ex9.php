<html>
    <body>
    <form method="POST" name="f">
    donner un entier : <input type="number" name="t1">
    <input type="submit" value="verifier" name="t2">

    </form>
    <?php
if(isset($_POST["t1"])){
    $nbr=$_POST["t1"];
    if($nbr%3==0 && $nbr%5==0){
        echo $nbr." est divisible par 3 et 5";
    }else if($nbr%3==0 && $nbr%5!=0){
        echo $nbr." est divisible par 3 et n'est pas divisible par 5";
    }else if($nbr%5==0 && $nbr%3!=0){
        echo $nbr." est divisible par 5 et n'est pas divisible par 3";
    }else{
        echo $nbr." n'est divisible par 3 et 5";
    }
}
    ?>
    </body>
</html>