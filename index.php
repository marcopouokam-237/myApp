<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goal Attitude</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <header>
            <div class="logo">
                <img src="./images/logo1.jpg" alt="">
            </div>
            <div class="nav">
                <nav>
                    <ul>
                        <li><a href="">Accueil</a></li>
                        <li><a href="">Produit</a></li>
                        <li><a href="">Espace client</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                </nav>
                <button>More</button>
            </div>
        </header>
        <div class="bg">
            <img src="./images/jersey.jpg" alt="">
        </div>
    </div>
    <div class="main">
        <main>



        


            <div class="articles">
            <?php
                                include_once 'conn.php';
                                  
                                   // read all row from database table
                                   $sql = "SELECT * FROM produit ORDER BY id DESC";
                                   $result = $bdd->query($sql);


                                   if (!$result) {
                                  die("Invalid query: " . $bdd->error);
                                   }

                                  //read data of each row
                                  while ($row = $result->fetch_assoc()) {
                                   echo "
                                <div class='article'>
                                   <img src='./add_product/images_bdd/" . $row["img"] . "' alt=''>
                                   <div class='description'>
                                      <h3>" . $row["nom"] . "</h3>
                                      <p>" . $row["description"] . "</p>
                                      <small>" . $row["prix"] . " FCFA</small>
                                   </div>
                                   <a href='./details.php?id=".$row["id"]."'>Acheter maintenant</a>
                                </div>  
                                   ";
                
                                   }
                               ?>
            </div>
        </main>
    </div>
    
</body>
</html>