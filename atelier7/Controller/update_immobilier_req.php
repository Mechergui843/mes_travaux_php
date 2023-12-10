<?php
require_once "../Model/CRUD_immobilier.php";
$crud=new CRUD_immobilier();
if(isset($_POST['ok'])){
    $ref=$_POST['ref'];
    $res=$crud->find($ref);
    if($res[5]==="villa"){
        $res[7]=0;
    }else{
        $res[6]=0;
    }
    $i=new immobilier($res[0],$res[1],$res[2],$res[3],$res[4],$res[5],$res[6],$res[7]);
    $res=$crud->update($i);
    if($res){
    $etat=2;
    include "findAllImmobilier.php";
}
}