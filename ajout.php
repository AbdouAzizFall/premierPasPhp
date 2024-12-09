<?php 
if(isset($_POST['enregistrer'])){
    $lib=$_POST['libelle'];
    $pu=$_POST['pu'];
    $qte=$_POST['qte'];
    $sql="INSERT INTO produit VALUES(NULL,'$lib','$pu','$qte')";
    mysqli_query($connexion,$sql);
    header('location: index.php');
}
?>
<div class="col-md-8 offset-2 mt-5">
    <form action="" method="POST">
        <label for="">Libelle</label>
        <input type="text" name="libelle" id="" class="form-control"><br>
        <label for="">Prix unitaire</label>
        <input type="text" name="pu" id="" class="form-control"><br>
        <label for="">Quantite</label>
        <input type="text" name="qte" id="" class="form-control"><br>
        <button type="submit" class="btn btn-success" name="enregistrer">Enregistrer</button>
        <button type="submit" class="btn btn-danger">Retour</button>
    </form>
</div>
