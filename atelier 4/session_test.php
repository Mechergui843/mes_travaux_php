<?php
session_start();
if(!isset($_SESSION['log']) or $_SESSION['log']!="admin"){
    header("location:login.php?etat=2");
    exit;
}