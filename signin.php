 <?php
session_start();
require_once 'dbconnexion.php';
$admin='admin1';
$passadmin='123123';
$_SESSION['admin']=$admin; 
   $msgerreur = false;
 
if ($_SERVER["REQUEST_METHOD"] == "POST"){

      if(!empty($_POST['username']) && !empty($_POST['pass'])){

            if ($_POST['username'] ==$admin && $_POST['pass'] == $passadmin) {
               header ("Location:admin.php");
                 }
 else{
       $username=$_POST['username'];
       $password=$_POST['pass'];

       $request = "SELECT * FROM user WHERE  username='$username'";

       try{
          $reponse = $conn->query($request);
                  $user = $reponse->fetch();
       }catch(Exception $e){
           die(" Erreur :".$e->getMessage());
       } 
       if($user == null){
         $msgerreur = true;
       }else{

          if($password != $user['Pass']){
             $msgerreur = true;
          }else{
            $_SESSION['userId'] = $user['id'];
            header ("Location:Home.php");
          }
       }
  }
}     
}
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
            <h1 class="wv-heading--title"  style="font-stretch:semi-condensed;font-family:cursive;font-size:50px; ; margin-bottom:40px;">
               Sing in
            </h1>
         </div>
      </div>
      <div class="row">
         <div class="col-md-8 mx-auto">
            <div class="myform form ">
                  <div class="form-group">
                     <input type="text" name="username"  class="form-control my-input" placeholder="Username" pattern="[0-9a-zA-Z]{6,10}" title="Please enter an Username with 5 to 10 characters."  autocomplete="off"  required>
                  </div>
                 
                  <div class="form-group">
                     <input type="Password" name="pass" class="form-control my-input" placeholder="Password" 
                     pattern="[0-9a-zA-Z]{5,8}" title="Please enter an Password with 5 to 8 characters." required>
                  </div>
                  <div>
                    <a href="forgetpass.php" style="margin-left:13em; font-size:14px; color: #aaa;">Forget Password ?</a>
                  </div>
                </div>
              </div>
            </div>
                  
   <div class="msgerreur" style="color:red ;text-align:center;font-family:bold ;font-size: 19px; margin-bottom: 25px; margin-top:15px;"><?php 
         if ( $msgerreur == true) {
          echo "The username or password you entered is incorrect *";
          }else{
              echo " ";
            }
?>
  </div>
        <div class="row">
         <div class="col-md-7 mx-auto">
            <div class="myform form ">
                  <div class="form-group">
                    <input type="submit" class=" btn btn-block send-button tx-tfm" name="submit" value="Sign in"
                     style="background:#F96D80; width:100%; font-weight:500; color:#fff; padding: 10px 25px;">
                  </div>
               </div>
         </div>
      </div>
    </form>	
    <div style="font-size:18px; color:#aaa;text-align:center; margin-bottom:30px; margin-top: 80px; font-family:bold;">Don't have an account ?
       <a href="signup.php" style="font-size:18px; color: #54C7C3">Sign up</a>
    </div>
	</div>
</body>
</html>