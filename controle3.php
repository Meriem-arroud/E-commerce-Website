<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
   if(!empty($_POST['numcard']) && !empty($_POST['date']) && !empty($_POST['code']))
   {
       $_SESSION['numcard']=$_POST['numcard'];
       $_SESSION['date']=$_POST['date'];
       $_SESSION['code']=$_POST['code'];
   }
}
 header ("Location:checkout2.php");
?>