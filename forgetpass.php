 <?php
session_start();
require_once 'dbconnexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
       $email=$_POST['email'];
       $password=$_POST['pass'];

$request = "UPDATE user SET Pass=$password WHERE Email='$email'";
       try{
         $conn->exec($request);
       }catch(Exception $e){
           die(" Erreur :".$e->getMessage());
       }}
?>
<!DOCTYPE html>
<html>
<head>
  <title>WomenShop</title>
  <meta charset="utf-8">
    <link rel="shortcute icon" type="image/png" href="img/favicon.png">
  <link rel="stylesheet" type="text/css" href="css/signin.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body class="global" style="background-image:url('img/desk.jpg');background-repeat: no-repeat;
  background-size: 100% ;  "> 
  <div class="a"style="box-shadow: 0 22px 22px 0 rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.33); padding-top:30px;">
  <form method="POST"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
   <!-- <h1 class="b"><strong>Create your acount</strong></h1> -->
   <div class="container">
      <div class="row-md-6 mx-auto text-center">
         <div class="header-title">
            <h1 class="wv-heading--title"  style="font-stretch:semi-condensed;font-family:cursive;font-size:40px; ; margin-bottom:40px;">
             Reset your password
            </h1>
         </div>
      </div>
      <div class="row">
         <div class="col-md-8 mx-auto">
            <div class="myform form ">
                     <div class="form-group">
                     <input type="email" name="email"  class="form-control my-input" id="email" placeholder="E-mail"
                     autocomplete="on"required>
                  </div>
                 
                  <div class="form-group">
                     <input type="Password" name="pass" class="form-control my-input" placeholder="New password" 
                     pattern="[0-9a-zA-Z]{5,8}" title="Please enter an Password with 5 to 8 characters." required>
                  </div>
                  <div class="form-group">
                     <input type="Password" name="pass" class="form-control my-input" placeholder="Confirm password" 
                     pattern="[0-9a-zA-Z]{5,8}" title="Please enter an Password with 5 to 8 characters." required>
                  </div>
                </div>
              </div>
            </div>     
  </div>
        <div class="row">
         <div class="col-md-7 mx-auto">
            <div class="myform form ">
                  <div class="form-group">
                    <input type="submit" class=" btn btn-block send-button tx-tfm" name="submit" value="Reset"
                     style="background:#F96D80; width:100%; font-weight: 600; color:#fff; padding: 10px 25px; margin-bottom:50px;">
                  </div>
               </div>
                <div style="font-size:20px; color:#aaa;text-align:center; margin-bottom:30px; margin-top: 80px; font-family:bold;">Back to
                  <a href="signin.php" style="font-size:18px; color: #54C7C3">Sign in</a>
                  </div>
         </div>
      </div>
    </form> 
  </div>
</body>
</html>