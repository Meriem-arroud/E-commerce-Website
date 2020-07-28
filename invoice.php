<?php 
require_once 'dbconnexion.php';
session_start();
$userId = $_SESSION['userId'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>WomenShop</title>
  <link rel="shortcute icon" type="image/png" href="img/favicon.png">
  <link href="css/bootstrap.min.css" rel="stylesheet" >
  <link rel="stylesheet" type="text/css" href="css/invoice.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style type="text/css">
    .print {
  display:none
}
 @media print {
  .print {display:block}
  .btn-print {display:none;}
}
  </style>
</head>
<body>


<div id="invoice">
    <div class="toolbar hidden-print">
        <div class="text-right">
            <button  onclick="javascript:window.print()" class="btn-print">Print</button>
        </div>
        <hr>
    </div>
    <div class="invoice overflow-auto">
        <div>
            <header>
                <div class="row">
                    <div class="col company-details">
                  <h2 class="name">
                 <div class="logo">
                 <div class="site-logo">
                 <a class="js-logo-clone">WomenShop</a>
                 </div>
                 </div>
                   </h2>
                        <div><h5>75Maarif  Casablanca – Morocco</h5></p></div>
                        <div><h5>www.Womenshop.com</h5></div>
                        <div><h5>+212 6 12 34 12 04</h5></div>
                        <div><h5>Womenshop@gmail.com<h5></div>
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light" style="color: #F96D80; font-size:20px;">INVOICE TO:</div>
                        <h3 class="to"><?php echo  $_SESSION['first']." ".$_SESSION['last']; ?></h3>
                 <h6><div class="address"><?php echo  $_SESSION['number']." ". $_SESSION['city']."-". $_SESSION['contry']; ?></div></h5>
                        <h6> <div class="email"><div><?php echo $_SESSION['email']   ?></div></div></h5>
                     <h6> <div class="numero"><div><?php echo  $_SESSION['phone']   ?></div></div></h5>
                    </div>
                    <div class="col invoice-details">
                        <h1 class="invoice-id" style="color: #F96D80;">INVOICE 3-2-1</h1>
                    </div>
                </div>
               <table class="table table-hover" style="background-color:#F4F6FF;">
               <thead>
                   <tr>
                        <th scope="col"></th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                  </tr>
              </thead>
         <tbody>
        <?php
         $gtotal=0;
          foreach ($_SESSION['data'] as $prod){
          $id=$prod['id'];
          $total=0;
          
          ?>
     <tr>
      <th scope="row" class="prodpic"><img src="<?php echo $prod['photo']?>"></th>
      <td><strong class="item-price"><?php echo number_format($prod['prix'],2)." "."$";?></strong></td>
       <td>
        <?php
         $reponse = $conn->query("SELECT * FROM panier where userId =$userId and prodId = $id ");
         $donnees=$reponse->fetch();?>
         <strong><?php echo $donnees['qte']."</br>";?></strong>
    </td>
    <td>
     <strong><?php echo number_format( $total = $prod['prix']*$donnees['qte'],2)." "."$"?></strong> 
    </td>
    </tr> 
     <?php $gtotal += $total;?>
 <?php }?>
</tbody>
</table>
      <table class="table table-hover" border="0" cellspacing="0" cellpadding="0" style="margin-bottom:50px;">
                    <tfoot>
                        <tr style="width:50px;">
                            <td colspan="2"></td>
                            <td colspan="2">SUBTOTAL</td>
                            <td><?php echo $gtotal." "."$";?></td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">TAX</td>
                            <td><?php echo "5"." "."$";?></td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2" style="color: #F96D80;">GRAND TOTAL</td>
                            <td style="color: #342B38;"><?php echo $gtotal+"5"." "."$";?></td>
                        </tr> 
                    </tfoot>
                </table>
                <div class="thanks" style="margin-top:7px;">Thank you!</div>
                <div class="notices" style=" border-left: 6px solid #F96D80;">
                    <div>NOTICE:</div>
                    <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
                </div>
            </main>
            <footer>
                Invoice was created on a computer and is valid without the signature and seal.
            </footer>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>
</body>
</html>