<?php
require_once 'header/headercart.php';
require_once 'panierclass.php';
session_start();

if (!isset($_SESSION['userId'])){
	echo "Not connected";
	header ("Location:./signin.php");
}else{
  	$userId = $_SESSION['userId'];
	  $panier = new Panier();
    $data = $panier->getPanier($userId);
//header ("Location: $_SERVER[HTTP_REFERER]" );
    $_SESSION['data']=$data;
    $_SESSION['total']=$panier->total($userId);
}?>
<section>
<?php if ($data == null){?>
 <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span><img src="img/cart.png" width="180px" height="180px"></span>
            <h2 class="display-3 text-black">Your cart is empty!</h2>
            <p class="lead mb-5">Please add a product to your basket to be continue !</p>
            <p><a href="Home.php" class=" btn btn-block send-button tx-tfm" style="background: #F96D80; width:100%; font-weight: 600;width:150px;margin:auto; color:#fff; padding: 8px 25px;">Back to shop</a></p>
          </div>
        </div>
      </div>
    </div>

<?php }
  else{?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
 <?php foreach ($data as $prod){
 ?>
    <tr>
        <th scope="row" class="prodpic"><img src="<?php echo $prod['photo']?>"></th>
        <td><strong class="item-price"><?php echo number_format($prod['prix'],2)." "."$";?></strong></td>
        <td><form method="POST" action="setqte.php?id=<?php echo $prod['id'];?>">
        <input type="text" name="qte" style="width:50px; height:30px;">
         <button type="submit" class="btn btn-success a-btn-slide-text">Modify</button>
    </form>
    </td>
    <td>
    <a href="delete.php?id=<?php echo $prod['id'];?>" class="btn btn-danger a-btn-slide-text">
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
 <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6">
                   <a href="Home.php" class=" btn btn-block send-button tx-tfm" style="background: #F96D80; width:100%; font-weight: 600; color:#fff; padding: 8px 25px;">Continue Shopping</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black"><strong> Subtotal</strong></span>
                  </div>
                  <div class="col-md-6 text-right">
              <strong class="text-black"><?php  echo number_format($panier->total($userId),2)." "."$"?></strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black"><strong>Total</strong></span>
                  </div>
                  <div class="col-md-6 text-right">
            <strong class="text-black"><?php  echo number_format($panier->total($userId),2)." "."$"?></strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class=" btn btn-block send-button tx-tfm" onclick="window.location='checkout.php' " style="background: #F96D80; width:100%; font-weight: 600; color:#fff; padding: 8px 25px;">Proceed To Checkout</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php }?>

</section>
<?php require_once 'footer.php'?>
 