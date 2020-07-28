<?php
require_once 'dbconnexion.php';
require_once 'header/header.php';
?>
<section>
<div id="contenu">
 
<div class="row" style="margin-right:100px; margin-left:100px;">
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <div class="product-item md-height bg-white d-block">
             <img src="chaus/c1.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'chaussure1'");
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
             <img src="chaus/c2.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'chaussure2'");
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
             <img src="chaus/c3.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'chaussure3'");
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
             <img src="chaus/c4.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'chaussure4'");
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
             <img src="chaus/c5.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'chaussure5'");
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
             <img src="chaus/c6.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'chaussure6'");
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
             <img src="chaus/c7.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'chaussure7'");
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
             <img src="chaus/c8.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'chaussure8'");
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
             <img src="chaus/c9.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'chaussure9'");
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
             <img src="chaus/c10.png"  alt="Image" class="img-fluid">
            </div>
               <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'chaussure10'");
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
             <img src="chaus/c11.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'chaussure11'");
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
             <img src="chaus/c12.png"  alt="Image" class="img-fluid">
            </div>
             <?php
                $reponse = $conn->query("SELECT * FROM produit where nom_prod = 'chaussure12'");
                $donnees = $reponse->fetch();
                ?>
            <strong class="item-price"><?php echo number_format($donnees['prix'],2)." "."$";?></strong>
            <form method="POST" action="addToPanier.php?id=<?php echo $donnees['id'];?>">
              <button type="submit" class="btn btn-success a-btn-slide-text">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            <span>Add to cart</span>            
            </button></form>
          </div>
        </div>
      </div>
    </section>
<?php
require_once 'footer.php';
?>





