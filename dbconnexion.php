<?php
try {
$APP_DIR='C:\\xampp\htdocs\\tp4\\';
$APP_ROOTPATH ='http://localhost' ;

//DB configuration
$bd_server = 'localhost';
$logindb = 'root';  
$passwordb = '';
$dbname = 'commerce';

$dburl = 'mysql:host=' . $bd_server . ';dbname=' . $dbname;
// Se connecter à la base de données

    $pdo_options [PDO::ATTR_ERRMODE] =  PDO::ERRMODE_WARNING;
    $conn = new PDO($dburl, $logindb, $passwordb, $pdo_options);
    $conn->exec("SET CHARACTER SET utf8");

} catch (PDOException $e) {
	 die(" Erreur connection to db:".$e->getMessage());
}
?>