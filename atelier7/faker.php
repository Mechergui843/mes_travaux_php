<?php
require_once "public/config.php";
$obj=new config();
$conn=$obj->getConfig();
for ($i=0; $i <=100 ; $i++) { 
    $ref=$i;
    $prop="aaa";
    $loc="bbb";
    $du="domicile";
    $nat="villa";
    $nbe=5;
    $sc=0;
    $nbp=9;
    $sql="insert into immobilier values($ref,'$prop','$loc',$nbp,'$du','$nat',$nbe,$sc)";
    $res=$conn->exec($sql);
}
if($res){
    header("location:Controller/findAllImmobilier.php?etat=3");
}