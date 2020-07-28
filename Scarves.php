<?php
require_once 'header/header.php';
require_once 'dbconnexion.php';
?>
<section>
<div id="contenu">
<div class="row" style="margin-right:100px; margin-left:100px;">
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <div class="product-item md-height bg-white d-block">
             <img src="foulard/f1.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'foulard1'");
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
             <img src="foulard/f2.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'foulard2'");
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
             <img src="foulard/f3.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'foulard3'");
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
             <img src="foulard/f4.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'foulard4'");
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
             <img src="foulard/f5.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'foulard5'");
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
             <img src="foulard/f6.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'foulard6'");
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
             <img src="foulard/f7.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'foulard7'");
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
             <img src="foulard/f8.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'foulard8'");
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
             <img src="foulard/f9.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'foulard9'");
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
             <img src="foulard/f10.png"  alt="Image" class="img-fluid">
            </div>
               <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'foulard10'");
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
             <img src="foulard/f11.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'foulard11'");
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
             <img src="foulard/f12.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'foulard12'");
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