<?php
require_once 'header/header.php';
require_once 'dbconnexion.php';
?>
<section>
    <div id="contenu">
<div class="row" style="margin-right:100px; margin-left:100px;">
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <div class="product-item md-height bg-white d-block">
             <img src="acces/a1.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'accessoire1'");
                $donnees = $reponse->fetch();
                ?>
            <strong class="item-price"><?php echo number_format($donnees['prix'],2)." "."$";?></strong>
            <form method="POST" action="addToPanier.php?id=<?php echo $donnees['id'];?>">
             <button type="submit" class="btn btn-success a-btn-slide-text">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            <span>Add to cart</span>            
            </button>
            </form>
          </div>


         <div class="col-lg-4 col-md-6 item-entry mb-4">
            <div class="product-item md-height bg-white d-block">
             <img src="acces/a12.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'accessoire2'");
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
             <img src="acces/a3.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'accessoire3'");
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
             <img src="acces/a4.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'accessoire4'");
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
             <img src="acces/a5.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'accessoire5'");
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
             <img src="acces/a6.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'accessoire6'");
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
             <img src="acces/a7.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'accessoire7'");
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
             <img src="acces/a8.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'accessoire8'");
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
             <img src="acces/a9.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'accessoire9'");
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
             <img src="acces/a10.png"  alt="Image" class="img-fluid">
            </div>
               <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'accessoire10'");
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
             <img src="acces/a11.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'accessoire11'");
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
             <img src="acces/a2.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'accessoire12'");
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
require_once 'footer.php'
?>