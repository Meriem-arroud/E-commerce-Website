<?php
require_once 'header/headeradmin.php';
require_once 'dbconnexion.php';


if (isset($_GET['id'])) {
   $id=$_GET['id'];

   $reponse = "DELETE FROM produit WHERE id=$id";
    try{
	 $conn->exec($reponse);
	}catch(PDOException $e){
		die(" Erreur delete:".$e->getMessage());
	}

?>


<div class="site-section" style="margin-bottom:200px; margin-top:70px">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">Action successful !</h2>
            <p class="lead mb-5"> Your product has been succssefully  deleted .</p>
            <p><a href="admin.php" class=" btn btn-block send-button tx-tfm" style="background: #F96D80; width:100%; font-weight: 600;width:170px;margin:auto; color:#fff; padding: 8px 25px;">Return</a></p>
          </div>
        </div>
      </div>
    </div>
<?php
}
require_once 'footer.php';
