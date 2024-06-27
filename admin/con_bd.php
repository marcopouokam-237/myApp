<?php
include_once '../conn.php';

$id = $_GET['id'];
$nom = $_POST['nom'];
$prix = $_POST['prix'];
$description = $_POST['des'];
$img = $_FILES['img']['name'];

// Déplacer l'image dans le dossier approprié
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["img"]["name"]);
move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);

// Mettre à jour les données dans la base de données
$sql = "UPDATE produit 
        SET nom = '$nom', 
            prix = '$prix',
            description = '$description', 
            img = '$img'
        WHERE id = '$id'";

if ($bdd->query($sql) === TRUE) {
    echo "Données mises à jour avec succès.";
    header("Location: index.php");
} else {
    echo "Erreur lors de la mise à jour des données: " . $bdd->error;
}

$bdd->close();
?>