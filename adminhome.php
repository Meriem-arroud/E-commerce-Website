<?php
require_once 'headeradmin.php';
require_once 'dbconnexion.php';
?>
  <style type="text/css">
  	
  	.img{
  		width:200px;
  		height:200px;
  	}
  </style>
<body>
<?php
$reponse = $conn->query("SELECT * FROM produit");
$donnees = $reponse->fetchAll();?>
<h1 style="text-align:center; margin-top: 50px;">List of the products in our web site </h1>
<table class="table table-hover" style="margin-top:100px; margin-bottom: 70px;">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Prix</th>
      <th scope="col">Qategorie</th>
    </tr>
  </thead>
  <tbody>
 <?php 
foreach($donnees as $prod){?>
    <tr>
	    <th scope="row" class="prodpic"><img src="<?php echo $prod['photo']?>" class="img"></th>
        <td><strong class="item-price"><?php echo number_format($prod['prix'],2)." "."DH";?></strong></td>
        <td class="item-price"><?php echo $prod['categorie']; ?> </td>
</tr>
<?php 
}?>
<tr>
      <th colspan="3"></th>
      <th></th>
    </tr>
  </tbody>
</table>
</body>
</html>


<?php
require_once 'footer.php';
?>