<?php
require_once 'header/header.php';
require_once 'dbconnexion.php';
?>
<section>
  <div id="contenu">
<div class="row" style="margin-right:100px; margin-left:100px;">
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <div class="product-item md-height bg-white d-block">
             <img src="robes/r1.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'robe1'");
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
             <img src="robes/r2.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'pant2'");
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
             <img src="robes/r3.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'robe3'");
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
             <img src="robes/r4.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'robe4'");
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
             <img src="robes/r5.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'robe5'");
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
             <img src="robes/r6.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'robe6'");
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
             <img src="robes/r7.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'robe7'");
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
             <img src="robes/r8.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'robe8'");
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
             <img src="robes/r9.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'robe9'");
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
             <img src="robes/r10.jpg"  alt="Image" class="img-fluid">
            </div>
               <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'robe10'");
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
             <img src="robes/r11.jpg"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'robe11'");
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
             <img src="robes/r12.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'robe12'");
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