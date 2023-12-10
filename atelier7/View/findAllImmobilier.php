<?php 

ob_start();
echo"<h1>Liste des immobiliers</h1>";
if(isset($etat)){
    switch ($etat) {
        case '1':
            echo"<script> alert('l'immobilier a ete supprimé avec succes')</script>";
            break;
        
        case '2':
            echo"<script> alert('l'immobilier a ete modifié avec succes')</script>";
            break;
        case '3':
            echo"<script> alert('l'immobilier a ete inseré avec succes')</script>";
                break;
    }
}
?>
<table class="table table-stripped" id="example">
    <thead>
        <th>reference</th>
        <th>propriétaire</th>
        <th>localité</th>
        <th>nbPiéces</th>
        <th>domaineUsage</th>
        <th>nature</th>
        <th>nbEtage</th>
        <th>surface Commune</th>
        <th>action</th>
        <th></th>
        <th></th>
    </thead>
    <tbody>
        <?php
        foreach ($lesimmobiliers as $immo) {
            echo "<tr>";
            echo "<td>".$immo[0]."</td>";
            echo "<td>".$immo[1]."</td>";
            echo "<td>".$immo[2]."</td>";
            echo "<td>".$immo[3]."</td>";
            echo "<td>".$immo[4]."</td>";
            echo "<td>".$immo[5]."</td>";
            echo "<td>".$immo[6]."</td>";
            echo "<td>".$immo[7]."</td>";
            echo "<td><a href='delete_immobilier.php?ref=$immo[0]'>Supprimer</a></td>";
            echo "<td><a href='update_immobilier.php?ref=$immo[0]'>Editer</a></td>";
            echo "<td><a href='detail_immobilier.php?ref=$immo[0]'>Voir detail</a></td>";
            echo "</tr>";
        }
        ?>
        </tbody>
</table>

<?php
echo"<a href='add_immobilier.php' class='btn btn-primary btn-sm'>Ajouter un immobilier</a>";
$contenu=ob_get_clean();
include "layout.php";

?>