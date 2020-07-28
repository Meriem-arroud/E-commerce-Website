<!DOCTYPE html>
<html>
<head>
	<title>WomenShop</title>
	<meta charset="utf-8">
 <link rel="shortcute icon" type="image/png" href="img/favicon.png">
<link rel="stylesheet" type="text/css" href="css/signup.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="global" style="background-image:url('img/desk.jpg');   background-repeat: no-repeat;
  background-size: 100%;  "> 
	<div class="a"style="box-shadow: 0 22px 22px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.33); padding-top:30px;">
  <form method="POST" action="controle.php">
   <!-- <h1 class="b"><strong>Create your acount</strong></h1> -->
   <div class="container">
      <div class="row-md-6 mx-auto text-center">
         <div style="margin-bottom:40px; ">
            <h1 style="font-stretch:semi-condensed;font-family:cursive;">
               Create your acount
            </h1>
         </div>
      </div>
      <div class="row">
         <div class="col-md-8 mx-auto">
            <div class="myform form ">
                  <div class="form-group">
                     <input type="text" name="username"  class="form-control my-input" placeholder="Username" pattern="[0-9a-zA-Z]{6,10}" title="Please enter an Username with 6 to 10 characters."  autocomplete="off"  required>
                  </div>
                  <div class="form-group">
                     <input type="email" name="email"  class="form-control my-input" id="email" placeholder="E-mail"
                     autocomplete="on"required>
                  </div>
                  <div class="form-group">
                     <input type="Password" name="pass" class="form-control my-input" placeholder="Password" 
                     pattern="[0-9a-zA-Z]{5,8}" title="Please enter an Password with 5 to 8 characters." required>
                  </div>
                  <div class="form-group">
                     <input type="Password" name="pass" class="form-control my-input" placeholder="Confirm password" 
                     pattern="[0-9a-zA-Z]{5,8}" title="Please enter an Password with 5 to 8 characters." required>

                  </div>
                  <div class="text-center ">
                    <input type="submit" class=" btn btn-block send-button tx-tfm" name="Login" value="Create" 
                    style="background: #F96D80; width:100%; font-weight: 600; color:#fff; padding: 8px 25px;">
                  </div>
                  <div class="col-md-12 ">
                   <div class="login-or" style="position: relative; color: #aaa; margin-top: 10px; margin-bottom: 10px; padding-top: 10px; padding-bottom: 10px;">
                        <hr class="hr-or" style="height: 1px; margin-top: 0px !important;
                                margin-bottom: 0px !important;">
                        <span class="span-or" style="display: block;position: absolute;left: 50%;top: -2px;margin-left: -25px;background-color: #fff;width: 50px; text-align: center;">or</span>
                     </div>
                     <div style="text-align:center;color:#aaa"> Alredy have an account ?
                     
                     </div>
                    
                  </div>
                  <div class="form-group">
                     <a class="btn btn-block g-button" href="#">
                    <input type="button" class=" btn btn-block send-button tx-tfm"  onclick="location.href='signin.php';" value="Sign in" style="background:#54C7C3; width:100%; font-weight: 600; color:#fff; padding: 8px 15px;">
                  </div>
            </div>
         </div>
      </div>
    </form>	
	</div>
</body>
</html>