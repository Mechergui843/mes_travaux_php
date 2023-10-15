<?php 
$ch=" Au début, ils rient de vous, ensuite ils vous combattent, et à la fin, vous gagnez";
$ch=ucwords($ch);
echo $ch;
$tab=explode(' ',$ch);
$r=count($tab);
$tab[$r-1]=strtoupper($tab[$r-1]);
$ch=implode(' ',$tab);
echo"<br>".$ch;
echo"<br>". $r-1;

?>