<?php
echo"<h1>Calcul sur les variables</h1>";
$tva=0.2;
$prix=150;
$nombre=10;
echo"<p>le HT est ".$prix*$nombre."</p>";
echo"<p>le TTC est ".$prix*$nombre*$tva."</p>";
?>