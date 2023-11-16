<html>
<body>
    <form name='f' method="POST">
<input type='number' name='t1'>
+
<input type='number' name='t2'>
<input type='submit' name='t3' value='calculer'>
<?php
if(isset($_POST["t1"]) && isset($_POST["t2"])){
    $nbr1=$_POST["t1"];
    $nbr2=$_POST["t2"];
    echo"<br>le resultat est ".$nbr1+$nbr2;
}
?>
</form>
</body>
</html>
