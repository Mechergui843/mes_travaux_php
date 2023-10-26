<?php  
session_start();
unset($_SESSION['adr']);
session_destroy();
header("location:login.php?etat=1");

?>