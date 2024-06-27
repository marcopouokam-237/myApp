<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "ecommerce";

   $new_nom="";
   $img_nom ="";
if (isset($_FILES['img'])) {
    $img_nom = $_FILES['img']['name'];
    $tmp_nom = $_FILES['img']['tmp_name'];
    

    $img_explode = explode('.',$img_nom);
    $img_ext = end($img_explode);

    $extensions = ['png', 'jpeg', 'jpg'];
    if (in_array($img_ext, $extensions) === true) {
        $time = time();

        $new_nom = $time.$img_nom;
        
        if (move_uploaded_file($tmp_nom, "images_bdd/".$new_nom)) {
            echo"Importer avec succes";
        }
    }else{
        echo"Importer image jpeg, png ou jpg";
    }
}else {
    echo"image non importer";
}
   //récupération des données

   // Create connection
   $conn = new mysqli($servername, $username, $password, $database);
   $conn->set_charset("utf8");

   // Check connection
   if ($conn->connect_error){
      die ("Connection failed: " . $conn->connect_error);
    }else {
        $requete = "INSERT INTO         
        produit(nom, prix, description, img) VALUES('".$_POST['nom']."', '".$_POST['prix']."', '".$_POST['des']."', '".$new_nom."')";
        $resultat = $conn->query($requete);
        if ($resultat) {
            # code...
            header('Location:index.php');
        }else{
            echo "échec!!!!!";
            if (!$resultat) {
                die("Invalid query: " . $conn->error);
                 }
        }
    }
?>