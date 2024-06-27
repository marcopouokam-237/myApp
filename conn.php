<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "ecommerce";
  
  $bdd = new mysqli($servername, $username, $password, $database);
   $bdd->set_charset("utf8");

   if ($bdd->connect_error){
    die ("Connection failed: " . $bdd->connect_error);
  }
?>