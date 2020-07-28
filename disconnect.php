<?php
session_start();
$_SESSION = Array();
session_destroy();
//session_unset();
header ("Location: Home.php");
?>