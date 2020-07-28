<?php
require_once 'header/headeradmin.php';
require_once 'dbconnexion.php';
if (isset($_GET['id'])) {
	$id=$_GET['id'];

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
	}}
}
?>
    <h1 style=" margin-left:5em; margin-top:3em;">Modify product</h1>
            <form class="row contact_form" action="" method="POST" style="margin-right:30em; margin-left:10em; margin-bottom:20em">
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="name" name="nomprod" placeholder="Name......" autocomplete="on"  required />
              </div></br>
               <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="categorie" name="categorie" placeholder="Categorie......" autocomplete="on"  required />
              </div>
               <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="price" name="price" placeholder="Price......" autocomplete="on"  required />
              </div>
               <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="pic" name="pic" placeholder="Picture......" autocomplete="on"  required />
              </div>

              <input type="submit" name="submit"  class=" btn btn-block send-button tx-tfm" value="Modify" style="background: #F96D80; width:120px; font-weight: 600; color:#fff;margin-right:10px; padding: 8px 25px;"></br>
              <input value="Back" class=" btn btn-block send-button tx-tfm" onclick="window.location='admin.php'" style="background: #F96D80; width:130px; font-weight: 600; color:#fff; padding: 8px 25px;">
            </form>

<?php
require_once 'footer.php';
?>
