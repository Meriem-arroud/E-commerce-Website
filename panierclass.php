<?php
class Panier{

	public function __construct()
	{
    	require_once 'dbconnexion.php';
     	$this->conn=$conn;
	}

public function add($prodId , $userId){
// valeur par defaut = 1
 $quantite = 1; 

 $INSERT = "INSERT INTO `panier` (`prodId`,`userId`,`qte`) VALUES ($prodId,$userId,$quantite)";
 try{
 	$this->conn->exec($INSERT);

 } catch (PDOException $e) {
	 die(" Erreur add:".$e->getMessage());
 }
}

public function getPanier($userId){
$donnees = null;
$request="SELECT * FROM produit where id IN ( SELECT prodId FROM panier WHERE userId = $userId )";
 try{
 	$reponse = $this->conn->query($request);
 	$donnees = $reponse->fetchAll();
 }catch(PDOException $e){
	 die(" Erreur getPanier:".$e->getMessage());
 }
return $donnees;
}

public function setqte($prodId,$userId,$qte){

	$request ="UPDATE panier SET qte=$qte WHERE prodId=$prodId AND userId=$userId";
	try{
		$this->conn->exec($request);
	}catch(PDOException $e){
		die(" Erreur setqte:".$e->getMessage());
	}
	return $this->getPanier($userId);
}

public function delete($prodId,$userId){
	
	$request ="DELETE FROM panier WHERE prodId=$prodId AND userId=$userId";

	try{
		$this->conn->exec($request);
	}catch(PDOException $e){
		die(" Erreur delete:".$e->getMessage());
	}

	return $this->getPanier($userId);
}

public function total($userId){

$total=0;

$data = $this->getPanier($userId);

foreach ($data as $prod){
$total +=$prod['prix']; 
}
return $total;
}
}
?>
