<?php
require_once 'dbconnexion.php';
require_once 'panierclass.php';
$panier = new panier();

if (isset($_GET['id'])) {
	 $reponse = $conn->query("SELECT * FROM produit where id = ".$_GET['id']);
     $donnees = $reponse->fetch();
	 //var_dump($donnees);
	 if (empty($donnees)) {
	 	die(" ce produit n'est existe pas");
	 }
	 
die('ce produit a bien ete ajouter au panier');
 }
  else{
	die("vous avez pas selectioner le produit");
      }
?>

