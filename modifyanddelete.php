<?php

require_once 'dbconnexion.php';
require_once 'header/headeradmin.php';
session_start();

if (isset($_SESSION['admin'])){

 $reponse = $conn->query("SELECT * FROM produit");?>
 <style type="text/css">
  .icon{

    width:70px;
    height:70px;
  }
</style>

  <div class="shop-method-area section-padding30">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                        <a href="adminadd.php"> <img src="img/add.png" class="icon"></a>
                            <h6>Add a product</h6>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <a href="modifyanddelete.php"><img src="img/reset.png" class="icon"></a></br>
                            <h6>Reset product</h6>
                        </div>
                    </div> 
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                          <a href="modifyanddelete.php"><img src="img/delete.png" class="icon"></a></br>
                            <h6>Delete product</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

<table class="table table-hover" style="margin-top:50px; margin-bottom:50px;">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Price</th>
      <th scope="col">Categorie</th>
      <th scope="col">Modify</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
 <?php while($donnees=$reponse->fetch()){ ?>
    <tr>
        <th scope="row" class="prodpic"><img src="<?php echo $donnees['photo']?>"  style="width:200px;height:200px;"></th>
        <td><strong class="item-price"><?php echo number_format($donnees['prix'],2)." "."DH";?></strong></td>
        <td><strong class="item-categorie"><?php  echo $donnees['categorie']; ?></strong> </td>
        <td>
         <a href="adminmodify.php?id=<?php echo $donnees['id']; ?>" class="btn btn-success a-btn-slide-text">Modify          
         </a>
        </td>
         <td>
            <a href="admindelete.php?id=<?php echo $donnees['id'];?>" class="btn btn-danger a-btn-slide-text">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>            
            </a>
         </td>
         </tr><?php }?>
           <tr>
            <th colspan="3"></th>
             <th></th>
         </tr>
  </tbody>
</table>
<?php
}
require_once 'footer.php'; 
?>