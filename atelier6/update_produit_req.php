<?php
    require_once "config/connexion.php";
if (isset($_POST['ok'])) {
    if(!empty($_POST['lib'])&&!empty($_POST['prix']) && !empty($_POST['qte'])&& ($_POST['promo']==0 || $_POST['promo']==1) && !empty($_POST['img']) && !empty($_POST['desc']) ){
    $lib=$_POST['lib'];
    $id=$_POST['id'];
    $prix=$_POST['prix'];
    $qte=$_POST['qte'];
    $desc=$_POST['desc'];
    $promo=$_POST['promo'];
    $img=$_POST['img'];
    $sql="update produit set libelle='$lib',prix=$prix,qte=$qte,description='$desc',image='$img',promo=$promo where id=$id";
    echo $sql;
    $res=$connexion->exec($sql);
    if($res){
        header("location:produits.php?etat=2");
    }else {
        header("location:produits.php?etat=4");
    }
}
}

?>