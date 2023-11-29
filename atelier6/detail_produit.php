<?php
     ob_start();
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        require_once "config/connexion.php";
        $sql="select * from produit where id=$id";
        $res=$connexion->query($sql);
        $tab=$res->fetch(PDO::FETCH_ASSOC);
    
?>
<form action="" method="POST">
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            
            <img src="<?=$tab['image']?>" alt="Nom du Produit" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h2><?=$tab['libelle']?></h2>
            <p><?=$tab['description']?></p>
            <p><strong>Identificateur :</strong> <?=$tab['id']?></p>
            <p><strong>Prix :</strong> <?=$tab['prix']?> DT</p>
            <p><strong>Quantité :</strong> <?=$tab['qte']?></p>
            <p><strong>En Promo :</strong> <?php if($tab['promo'] == 1) { echo "Oui"; } else { echo "Non"; } ?></p>
            <button class="btn btn-primary" name="ok">Retourner à la page d'acceuil</button>
        </div>
    </div>
</div>

  </form>
<?php
    }
    if (isset($_POST['ok'])){
        header("location:produits.php");
    }
    $contenu=ob_get_clean();
include"layout.php";
?>