<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
   if(!empty($_POST['first']) && !empty($_POST['last']) && !empty($_POST['email']) && !empty($_POST['number'])  && !empty($_POST['city'])  && !empty($_POST['contry'])  && !empty($_POST['phone'])  && !empty($_POST['zip']))
   {
       $_SESSION['first']=$_POST['first'];
       $_SESSION['last']=$_POST['last'];
       $_SESSION['email']=$_POST['email'];
       $_SESSION['number']=$_POST['number'];
       $_SESSION['city']=$_POST['city'];
       $_SESSION['contry']=$_POST['contry'];
       $_SESSION['phone']=$_POST['phone'];
       $_SESSION['zip']=$_POST['zip'];
       $_SESSION['date']=$_POST['date'];
  }
}
 header ("Location: $_SERVER[HTTP_REFERER]");
?>