<?php
session_start();

require_once 'panierclass.php';

$panier = new Panier();

$userId = $_SESSION['userId'];

$prodId= $_GET['id'];

$qte =$_POST['qte'];

$data = $panier->setqte($prodId,$userId,$qte);

header("Location: $_SERVER[HTTP_REFERER]");
?>