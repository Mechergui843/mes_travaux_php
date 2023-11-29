<?php 

ob_start();
echo"<h1>Liste des produits</h1>";
require_once "config/connexion.php";
$sql="select * from produit";
$res=$connexion->query($sql);//$res est un objet pdostatement
$lesproduits=$res->fetchALL(PDO::FETCH_NUM);
if(isset($_GET['etat'])){
    $etat=$_GET['etat'];
    switch ($etat) {
        case '1':
            echo"<script> alert('le produit a ete supprimé avec succes')</script>";
            break;
        
        case '2':
            echo"<script> alert('le produit a ete modifié avec succes')</script>";
            break;
        case '3':
            echo"<script> alert('le produit a ete inseré avec succes')</script>";
                break;
        case '4':
            echo"<script> alert('le produit n'a pas ete inseré ou modifié ')</script>";
                break;
    }
}
//echo"<pre>";
//var_dump($lesproduits);
//echo"</pre>";
?>
<table class="table table-stripped">
    <thead>
        <th>identifiant</th>
        <th>libelle</th>
        <th>prix</th>
        <th>quantite</th>
        <th>promo</th>
        <th colspan="3">action</th>
    </thead>
    <tbody>
        <?php
        foreach ($lesproduits as $key => $produit) {
            echo "<tr>";
            echo "<td>".$produit[0]."</td>";
            echo "<td>".$produit[1]."</td>";
            echo "<td>".$produit[2]."</td>";
            echo "<td>".$produit[3]."</td>";
            echo "<td>".$produit[6]."</td>";
            echo "<td><a href='delete_produit.php?id=$produit[0]'>Supprimer</a></td>";
            echo "<td><a href='update_produit.php?id=$produit[0]'>Editer</a></td>";
            echo "<td><a href='detail_produit.php?id=$produit[0]'>Voir detail</a></td>";
            echo "</tr>";
        }
        ?>
        </tbody>
</table>

<?php
echo"<a href='add_produit.php' class='btn btn-primary btn-sm'>Ajouter un produit</a>";
$contenu=ob_get_clean();
include"layout.php";

?>