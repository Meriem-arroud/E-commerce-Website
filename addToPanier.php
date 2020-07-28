<?php
session_start();
require_once 'panierclass.php';

if (!isset($_SESSION['userId'])){
	echo "not connected";
	header ("Location: ./signin.php");
}else{
	echo "connected ...";
	$productId = $_GET['id'];
	$userId = $_SESSION['userId'];
	$panier = new Panier();
	$panier->add($productId, $userId);
	header ("Location: $_SERVER[HTTP_REFERER]" );
}
?>