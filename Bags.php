<?php
require_once 'header/header.php';
require_once 'dbconnexion.php';
?>
<section>
<div id="contenu">
<div class="row" style="margin-right:100px; margin-left:100px;">
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <div class="product-item md-height bg-white d-block">
             <img src="sac/sac1.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'sac1'");
                $donnees = $reponse->fetch();
                ?>
            <strong class="item-price"><?php echo number_format($donnees['prix'],2)." "."$";?></strong>
            <form method="POST" action="addToPanier.php?id=<?php echo $donnees['id'];?>">
            <button type="submit" class="btn btn-success a-btn-slide-text">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            <span>Add to cart</span>            
            </button>            </form>
          </div>


         <div class="col-lg-4 col-md-6 item-entry mb-4">
            <div class="product-item md-height bg-white d-block">
             <img src="sac/sac2.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'sac2'");
                $donnees = $reponse->fetch();
                ?>
            <strong class="item-price"><?php echo number_format($donnees['prix'],2)." "."$";?></strong>
            <form method="POST" action="addToPanier.php?id=<?php echo $donnees['id'];?>">
<button type="submit" class="btn btn-success a-btn-slide-text">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            <span>Add to cart</span>            
            </button>            </form>
          </div>
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <div class="product-item md-height bg-white d-block">
             <img src="sac/sac3.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'sac3'");
                $donnees = $reponse->fetch();
                ?>
            <strong class="item-price"><?php echo number_format($donnees['prix'],2)." "."$";?></strong>
            <form method="POST" action="addToPanier.php?id=<?php echo $donnees['id'];?>">
<button type="submit" class="btn btn-success a-btn-slide-text">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            <span>Add to cart</span>            
            </button>            </form>
          </div>
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <div class="product-item md-height bg-white d-block">
             <img src="sac/sac4.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'sac4'");
                $donnees = $reponse->fetch();
                ?>
            <strong class="item-price"><?php echo number_format($donnees['prix'],2)." "."$";?></strong>
            <form method="POST" action="addToPanier.php?id=<?php echo $donnees['id'];?>">
<button type="submit" class="btn btn-success a-btn-slide-text">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            <span>Add to cart</span>            
            </button>            </form>
          </div>
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <div class="product-item md-height bg-white d-block">
             <img src="sac/sac5.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'sac5'");
                $donnees = $reponse->fetch();
                ?>
            <strong class="item-price"><?php echo number_format($donnees['prix'],2)." "."$";?></strong>
            <form method="POST" action="addToPanier.php?id=<?php echo $donnees['id'];?>">
<button type="submit" class="btn btn-success a-btn-slide-text">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            <span>Add to cart</span>            
            </button>            </form>
          </div>
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <div class="product-item md-height bg-white d-block">
             <img src="sac/sac6.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'sac6'");
                $donnees = $reponse->fetch();
                ?>
            <strong class="item-price"><?php echo number_format($donnees['prix'],2)." "."$";?></strong>
            <form method="POST" action="addToPanier.php?id=<?php echo $donnees['id'];?>">
<button type="submit" class="btn btn-success a-btn-slide-text">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            <span>Add to cart</span>            
            </button>            </form>
          </div>
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <div class="product-item md-height bg-white d-block">
             <img src="sac/sac7.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'sac7'");
                $donnees = $reponse->fetch();
                ?>
            <strong class="item-price"><?php echo number_format($donnees['prix'],2)." "."$";?></strong>
            <form method="POST" action="addToPanier.php?id=<?php echo $donnees['id'];?>">
<button type="submit" class="btn btn-success a-btn-slide-text">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            <span>Add to cart</span>            
            </button>            </form>
          </div>
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <div class="product-item md-height bg-white d-block">
             <img src="sac/sac8.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'sac8'");
                $donnees = $reponse->fetch();
                ?>
            <strong class="item-price"><?php echo number_format($donnees['prix'],2)." "."$";?></strong>
            <form method="POST" action="addToPanier.php?id=<?php echo $donnees['id'];?>">
<button type="submit" class="btn btn-success a-btn-slide-text">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            <span>Add to cart</span>            
            </button>            </form>
          </div>
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <div class="product-item md-height bg-white d-block">
             <img src="sac/sac9.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'sac9'");
                $donnees = $reponse->fetch();
                ?>
            <strong class="item-price"><?php echo number_format($donnees['prix'],2)." "."$";?></strong>
            <form method="POST" action="addToPanier.php?id=<?php echo $donnees['id'];?>">
<button type="submit" class="btn btn-success a-btn-slide-text">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            <span>Add to cart</span>            
            </button></form>
          </div>

          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <div class="product-item md-height bg-white d-block">
             <img src="sac/sac10.png"  alt="Image" class="img-fluid">
            </div>
               <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'sac10'");
                $donnees = $reponse->fetch();
                ?>
            <strong class="item-price"><?php echo number_format($donnees['prix'],2)." "."$";?></strong>
            <form method="POST" action="addToPanier.php?id=<?php echo $donnees['id'];?>">
<button type="submit" class="btn btn-success a-btn-slide-text">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            <span>Add to cart</span>            
            </button> </form>
          </div>

          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <div class="product-item md-height bg-white d-block">
             <img src="sac/sac11.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'sac11'");
                $donnees = $reponse->fetch();
                ?>
            <strong class="item-price"><?php echo number_format($donnees['prix'],2)." "."$";?></strong>
            <form method="POST" action="addToPanier.php?id=<?php echo $donnees['id'];?>">
<button type="submit" class="btn btn-success a-btn-slide-text">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            <span>Add to cart</span>            
            </button>            </form>
          </div>

          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <div class="product-item md-height bg-white d-block">
             <img src="sac/sac12.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'sac12'");
                $donnees = $reponse->fetch();
                ?>
            <strong class="item-price"><?php echo number_format($donnees['prix'],2)." "."$";?></strong>
            <form method="POST" action="addToPanier.php?id=<?php echo $donnees['id'];?>">
            <button type="submit" class="btn btn-success a-btn-slide-text">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            <span>Add to cart</span>            
            </button>            </form>
          </div>
        </div>
      </div>
    </section>
<?php
require_once 'footer.php';
?>





