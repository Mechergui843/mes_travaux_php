<?php
ob_start();
if(isset($_GET['ref'])){
    $ref=$_GET['ref'];
    require_once "../Model/CRUD_immobilier.php";
    $crud=new CRUD_immobilier();
    $res=$crud->find($ref);
    $du=$res[4];
    $nat=$res[5];
?>
<form action="update_immobilier_req.php" method="POST" >
        <fieldset>
        <legend>mise à jour d'un immobilier</legend>
        <table class="table table-stripped">
            <tr><td><label for="ref">reference :</label></td>
            <td><input type="text" disabled name="ref" id="ref" value="<?=$res[0]?>"></td>
        <td><input type="text" hidden name="ref" id="ref" value="<?=$res[0]?>"></td></tr>

            <tr><td><label for="prop">propriétaire :</label></td>
            <td><input type="text" name="prop" id="prop" value="<?=$res[1]?>"></td></tr>
        
            <tr><td><label for="loc">localité :</label></td>
            <td><input type="text" name="loc" id="loc" value="<?=$res[2]?>"></td></tr>

            <tr><td><label for="nbp">nombre de piéces :</label></td>
            <td><input type="text" name="nbp" id="nbp" value="<?=$res[3]?>"></td></tr>

            <tr><td><label for="du">Domaine usage</label></td>
            <td><select name="du" id="du">
            <option value="bureau" <? echo($du==="bureau")? "selected": "" ?>>bureau</option>
            <option value="domicile" <? echo($du==="domicile")? "selected": "" ?>>domicile</option></select></td></tr>

            <tr><td><label for="nat">Nature</label></td>
            <td><select name="nat" id="nat">
            <option value="appartement"<?echo($nat==="appartement") ? "selected" : "" ?>>appartement</option>
            <option value="villa" <?echo($nat==="villa") ? "selected" : "" ?>>villa</option></select></td></tr>

            <tr><td><label for="nbe">Nombre d'etage :</label></td>
            <td><input type="text" name="nbe" id="nbe" value="<?=$res[6]?>"></td></tr>

            <tr><td><label for="sc">Surface de l'espace commun</label></td>
            <td><input type="text" name="sc" id="sc" value="<?=$res[7]?>"></td></tr>

            <tr><td colspan="2"><input type="submit" name="ok" class="btn btn-primary btn-sm" value="Mettre à Jour"></td></tr>
    
    </table>
    </fieldset>
    </form>
    <?php }
    $contenu=ob_get_clean();
    include "../View/layout.php";