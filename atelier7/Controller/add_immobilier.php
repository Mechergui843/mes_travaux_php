<?php
ob_start();
require_once "../Model/CRUD_immobilier.php";
?>
<form method="POST" >
        <fieldset>
        <legend>Ajout d'un produit</legend>
        <table class="table table-stripped">
            <tr><td><label for="ref">Reference :</label></td>
            <td><input type="text" name="ref" id="ref"></td></tr>
        
            <tr><td><label for="prop">Proprietaire :</label></td>
            <td><input type="text" name="prop" id="prop"></td></tr>

            <tr><td><label for="loc">Localité :</label></td>
            <td><input type="text" name="loc" id="loc"></td></tr>

            <tr><td><label for="nbp">nombre de piéces</label></td>
            <td><input type="text" name="nbp" id="nbp"></td></tr>

            <tr><td><label for="du">Domaine usage</label></td>
            <td><select name="du" id="du">
            <option value="bureau">bureau</option>
            <option value="domicile">domicile</option></select></td></tr>

            <tr><td><label for="nat">Nature</label></td>
            <td><select name="nat" id="nat">
            <option value="appartement">appartement</option>
            <option value="villa">villa</option></select></td></tr>

            <tr><td><label for="nbe">Nombre d'etage :</label></td>
            <td><input type="text" name="nbe" id="nbe"></td></tr>

            <tr><td><label for="sc">Surface de l'espace commun</label></td>
            <td><input type="text" name="sc" id="sc"></td></tr>
           
            <tr><td colspan="2"><input type="submit" name="ok" class="btn btn-primary btn-sm" value="Ajouter"></td></tr>
    
    </table>
    </fieldset>
    </form>
<?php
if(isset($_POST['ok'])){
    if(!empty($_POST['ref'])&&!empty($_POST['prop'])&&!empty($_POST['loc']) && !empty($_POST['nbp']) && !empty($_POST['du']) && !empty($_POST['nat']) && !empty($_POST['nbe']) && !empty($_POST['sc']) ) {
        $ref=htmlspecialchars($_POST['ref']);
        $prop=htmlspecialchars($_POST['prop']);
        $loc=htmlspecialchars($_POST['loc']);
        $nbp=htmlspecialchars($_POST['nbp']);
        $du=$_POST['du'];
        $nat=$_POST['nat'];
        $nbe=htmlspecialchars($_POST['nbe']);
        $sc=htmlspecialchars($_POST['sc']);
        if($nat==="villa"){
            $sc=0;
        }else{
            $nbe=0;
        }
        $i=new immobilier($ref,$prop,$loc,$nbp,$du,$nat,$nbe,$sc);
        $crud=new CRUD_immobilier();
        $res=$crud->add($i);
        if($res){
            $etat=3;
            include "findAllImmobilier.php";
        }
}
}
$contenu=ob_get_clean();
include"../View/layout.php";