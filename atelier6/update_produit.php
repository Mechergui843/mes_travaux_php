<?php
     ob_start();
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        require_once "config/connexion.php";
        $sql="select * from produit where id=$id";
        $res=$connexion->query($sql);
        $tab=$res->fetch(PDO::FETCH_ASSOC);
    
?>
    <form action="update_produit_req.php" method="POST" >
        <fieldset>
        <legend>Ajout d'un produit</legend>
        <table class="table table-stripped">
            <tr><td><label for="id">id :</label></td>
            <td><input type="text" disabled name="id" id="id" value="<?=$tab['id']?>"></td>
        <td><input type="text" hidden name="id" id="id" value="<?=$tab['id']?>"></td></tr>

            <tr><td><label for="lib">Libelle :</label></td>
            <td><input type="text" name="lib" id="lib" value="<?=$tab['libelle']?>"></td></tr>
        
            <tr><td><label for="prix">prix :</label></td>
            <td><input type="text" name="prix" id="prix" value="<?=$tab['prix']?>"></td></tr>

            <tr><td><label for="qte">quantite :</label></td>
            <td><input type="text" name="qte" id="qte" value="<?=$tab['qte']?>"></td></tr>

            <tr><td><label for="desc">description :</label></td>
            <td><input type="text" name="desc" id="desc" value="<?=$tab['description']?>"></td></tr>

            <tr><td><label for="img">Image :</label></td>
            <td><input type="text" name="img" id="img" value="<?=$tab['image']?>"></td></tr>

            <tr><td><label for="promo">promo :</label></td>
            <td><input type="text" name="promo" id="promo" value="<?=$tab['promo']?>"></td></tr>
            <tr><td colspan="2"><input type="submit" name="ok" class="btn btn-primary btn-sm" value="Mettre à Jour"></td></tr>
    
    </table>
    </fieldset>
    </form>
    <?php
    }
    $contenu=ob_get_clean();
include"layout.php";
?>
