<?php 
require_once "../Model/CRUD_immobilier.php";
$crud= new CRUD_immobilier();
$lesimmobiliers=$crud->findAll();
include "../View/findAllImmobilier.php";

