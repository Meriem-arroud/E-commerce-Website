<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <title>WomenShop</title>
    <link rel="shortcute icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/payment.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</head>
<body style="background-color: #FFCCBC">
    <form action="controle3.php" method="POST">
    <div class='container' >
     <div class="card mx-auto col-md-6 col-8 mt-3 p-0"><img class='mx-auto pic' src="img/1.jpg" />
        <div class="card-title d-flex px-4">
            <p class="item text-muted">Total:<p><?php echo number_format($_SESSION['total'],2)." "."$"; ?></p>
        </div>
        <div class="card-body">
            <p class="text-muted">Your payment details</p>
            <div class="numbr mb-3"><i class="col-1 fas fa-credit-card text-muted p-0"></i><input class="col-10 p-0" type="text" name="numcard" placeholder="Card Number" autocomplete="off"   required></div>
            <div class="line2 col-lg-12 col-12 mb-4">

                <i class="col-1 far fa-calendar-minus text-muted p-0"></i><input type="month" id="start" name="start"
                max="2025-06" value="2020-07" >
                <i class="col-1 fas fa-lock text-muted"></i><input class="cvc col-3 p-0" type="Password" name="code" placeholder="CVC" required> 
            </div>
         </div>
            <div class="footer text-center p-2">
                 <input type="submit" name="submit"  class="footer text-center p-0" value="Order Now" style="; width:100%; font-weight: 500; color:#fff;margin-right:20px; padding: 10px 25px;">
            </div>
        </div>
    </div>
</div>
</form>
</body>
</html>
