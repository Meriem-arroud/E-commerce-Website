<?php
require_once 'dbconnexion.php';
if (isset($_GET['id'])) {
	$id=$_GET['id'];
?>

	<form action="" method="POST">
	<h3>Nom prod</h3><input   type="text" name="nomprod">
	<h3>Categorie prod</h3><input type="text" name="categorie">
	<h3>Price prod</h3><input type="text" name="price">
	<h3>Picture  prod</h3><input type="text" name="pic"></br>
	<input type="submit" name="submit">
</form>
<?php
}
if (!empty($_POST['nomprod']) && !empty($_POST['categorie']) &&!empty($_POST['price']) && !empty($_POST['pic'])) {

	$nomprod=$_POST['nomprod'];
	$categorie=$_POST['categorie'];
	$price=$_POST['price'];
	$pic=$_POST['pic'];


	$request ="UPDATE produit SET nom_prod='$nomprod' ,categorie='$categorie' ,prix= '$price' , photo='$pic'  WHERE id=$id";
	try{
	$conn->exec($request);
	}catch(PDOException $e){
		die(" Erreur setqte:".$e->getMessage());
	}

}else{
	echo "Erreur";
}
?>
