<?php
$a=4;
$b=0;
$x=$a<=>$b;
switch ($x) {
    case -1:
        echo $b."est superieure à ".$a;
        break;
    case 0:
        echo $b."est egale à ".$a;
        break;
    case 1:
        echo $b."est inferieure à ".$a;
        break;
        }
?>