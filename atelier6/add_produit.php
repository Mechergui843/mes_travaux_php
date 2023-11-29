    <?php
    ob_start();
    ?>
    <form method="POST" >
        <fieldset>
        <legend>Ajout d'un produit</legend>
        <table class="table table-stripped">
            <tr><td><label for="lib">Libelle :</label></td>
            <td><input type="text" name="lib" id="lib"></td></tr>
        
            <tr><td><label for="prix">prix :</label></td>
            <td><input type="text" name="prix" id="prix"></td></tr>
            <tr><td><label for="qte">quantite :</label></td>
            <td><input type="text" name="qte" id="qte"></td></tr>

            <tr><td><label for="desc">description :</label></td>
            <td><input type="text" name="desc" id="desc"></td></tr>

            <tr><td><label for="img">Image :</label></td>
            <td><input type="text" name="img" id="img"></td></tr>

            <tr><td><label for="promo">promo :</label></td>
            <td><input type="text" name="promo" id="promo"></td></tr>
            <tr><td colspan="2"><input type="submit" name="ok" class="btn btn-primary btn-sm"></td></tr>
    
    </table>
    </fieldset>
    </form>
    <?php
    require_once "config/connexion.php";
if (isset($_POST['ok'])){
    if(!empty($_POST['lib'])&&!empty($_POST['prix']) && !empty($_POST['qte'])&& ($_POST['promo']==0 || $_POST['promo']==1) && !empty($_POST['img']) && !empty($_POST['desc']) ) {
        $lib=$_POST['lib'];
    $prix=htmlspecialchars($_POST['prix']);
    $qte=htmlspecialchars($_POST['qte']);
    $desc=htmlspecialchars($_POST['desc']);
    $promo=htmlspecialchars($_POST['promo']);
    $img=htmlspecialchars($_POST['img']);
    $sql="insert into produit values(NULL,'$lib',$prix,$qte,'$desc','$img',$promo)";
    echo $sql;
    $res=$connexion->exec($sql);
    if($res){
        header("location:produits.php?etat=3");
    }
}
}
$contenu=ob_get_clean();
include"layout.php";
?>