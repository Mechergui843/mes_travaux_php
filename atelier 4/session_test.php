<?php
session_start();
if(!isset($_SESSION['log']) or $_SESSION['log']!="admin" or  $_SESSION['log']!="user"){
    header("location:page_authentification.php?etat=2");
    exit;
}