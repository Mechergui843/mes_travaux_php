<?php
require_once "../Model/CRUD_immobilier.php";
$crud=new CRUD_immobilier();
if(isset($_GET['ref'])){
    $ref=$_GET['ref'];
}
$res=$crud->delete($ref);
$etat=1;
include "findAllImmobilier.php";
