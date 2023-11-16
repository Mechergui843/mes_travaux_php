<html>
<body>
    <form method="POST" name="f">
    donner un entier : <input type="number" name="t1">
    <input type="submit" value="verifier" name="t2">

    </form>
    <?php

    if(isset($_POST["t2"])){
        $nbr=$_POST["t1"];
        if($nbr%2==0){
            echo $nbr." est un nombre pair";
        }else{
            echo $nbr." est un nombre impair";
        }
    }
    ?>
</body>

</html>