<?php
require_once 'dbconnexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
   if(!empty($_POST['username'])&& !empty($_POST['email']) && !empty($_POST['pass'])){
       $username=$_POST['username'];
       $email=$_POST['email'];
       $password=$_POST['pass'];
  }
}     
 $sqlinsert="insert into user (username,email,pass)"." VALUES ('$username','$email','$password')";
 $conn->exec($sqlinsert);
 header ("Location: $_SERVER[HTTP_REFERER]" );
?>