<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details de produit</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="detail.css">
</head>
<body>
    <div class="container">
        <a href="./index.php" class="back">Retour</a>
<?php
                                include_once 'conn.php';
                                  $id = $_GET['id'];
                                   // read all row from database table
                                   $sql = "SELECT * FROM produit WHERE id = $id";
                                   $result = $bdd->query($sql);


                                   if (!$result) {
                                  die("Invalid query: " . $bdd->error);
                                   }

                                  //read data of each row
                                  while ($row = $result->fetch_assoc()) {
                                   echo "
                                   <div class='product'>
                                   <img src='./add_product/images_bdd/" . $row["img"] . "' alt=''>
                                   <div class='description'>
                                      <h1>" . $row["nom"] . "</h1>
                                      <p>" . $row["description"] . "</p>
                                      <small>" . $row["prix"] . " FCFA</small>
                                      <a href='./connexion/index.php'>Commander</a>
                                   </div>
                                   
                                </div>  
                                   ";
                
                                   }
                               ?>
    </div>
</body>
</html>