s<?php
session_start();
require_once 'panierclass.php';

$panier= new Panier();

$userId=$_SESSION['userId'];

$prodId=$_GET['id'];

$panier->delete($prodId,$userId);

header ("Location: $_SERVER[HTTP_REFERER]");
?>