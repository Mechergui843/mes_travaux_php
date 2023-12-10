<?php
ob_start();
if(isset($_GET['ref'])){
$ref=$_GET['ref'];
require_once "../Model/CRUD_immobilier.php";
$crud=new CRUD_immobilier();
$res=$crud->find($ref);
?>
<form action="" method="POST">
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2><?=$res[5]?></h2>
            <p><?=$res[1]?></p>
            <p><strong>Reference :</strong> <?=$res[0]?></p>
            <p><strong>Localité:</strong> <?=$res[2]?></p>
            <p><strong>Nombre de Pieces :</strong> <?=$res[3]?> DT</p>
            <p><strong>Domaine Usage :</strong> <?=$res[4]?></p>
            <p><strong>Surface Commune :</strong> <?=$res[7] ?></p>
            <p><strong>Nombre d'etage :</strong> <?=$res[6]?></p>
            <button class="btn btn-primary" name="ok">Retourner à la page d'acceuil</button>
        </div>
    </div>
</div>
  </form>
  <?php
  }
  if(isset($_POST['ok'])){
      header("location:findAllImmobilier.php");
  }
  $contenu=ob_get_clean();
  include "../View/layout.php";
  ?>