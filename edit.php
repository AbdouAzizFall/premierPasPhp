<?php 
if(isset($_POST['modifier'])){
    $id=$_POST['id'];
    $lib=$_POST['libelle'];
    $pu=$_POST['pu'];
    $qte=$_POST['qte'];
    $sql="UPDATE produit set lib = '$lib', pu = '$pu', qte = '$qte' WHERE id = $id";
    mysqli_query($connexion,$sql);
    header('location: index.php');
}
?>

<div class="col-md-8 offset-2 mt-5">
    <form action="" method="POST">
        <input type="text" name="id" value="<?=  $ligne[0]?>" hidden><br>
        <label for="">Libelle</label>
        <input type="text" name="libelle" id="" class="form-control" value="<?=  $ligne[1]?>"><br>
        <label for="">Prix unitaire</label>
        <input type="text" name="pu" id="" class="form-control" value="<?= $ligne[2]?>"><br>
        <label for="">Quantite</label>
        <input type="text" name="qte" id="" class="form-control" value="<?= $ligne[3]?>"><br>
        <button type="submit" class="btn btn-success" name="modifier">Enregistrer</button>
        <button type="submit" class="btn btn-danger">Retour</button>
    </form>
</div>
