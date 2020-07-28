<?php
require_once 'dbconnexion.php';
require_once 'header/headeradmin.php';
session_start();

if (isset($_SESSION['admin'])){

    if (isset($_POST['submit'])){
	    $nomprod=$_POST['nomprod'];
        $categorie=$_POST['categorie'];
        $price=$_POST['price'];
        $pic=$_POST['pic'];

   if ($nomprod&& $categorie &&$price&& $pic){
$sqlinsert="insert into produit (nom_prod,categorie,prix ,photo)"." VALUES ('$nomprod','$categorie','$price','$pic')";
$conn->exec($sqlinsert);
}else{

 echo "Erreur 2";
}
 }?>

<h1 style=" margin-left:5em; margin-top:3em;">Add product</h1>
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

              <input type="submit" name="submit"  class=" btn btn-block send-button tx-tfm" value="Add" style="background: #F96D80; width:120px; font-weight: 600; color:#fff;margin-right:10px; padding: 8px 25px;"></br>
              <input value="Back" class=" btn btn-block send-button tx-tfm" onclick="window.location='admin.php'" style="background: #F96D80; width:130px; font-weight: 600; color:#fff; padding: 8px 25px;">
            </form>
<?php 
}
require_once 'footer.php'
?>