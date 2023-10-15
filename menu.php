<?php
function dispalay_menu(){
    echo"<ul>";
    for ($i=4; $i <11 ; $i++) { 
        echo"<a href='ex".$i.".php'><li>exercice".$i.".php";
        echo"</li></a>";
    }
    echo"</ul>";
}

?>