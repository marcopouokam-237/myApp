<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier des produits</title>
    <link rel="stylesheet" href="../connexion/style.css">
</head>
<body>
    <div class="container">
    <?php
        include_once '../conn.php';
        $id = $_GET['id'];

        // read all row from database table
        $sql = "SELECT * FROM produit WHERE id ='$id' ";
        $result = $bdd->query($sql);

        if (!$result) {
            die("Invalid query: " . $bdd->error);
        }

        //read data of each row
        while ($row = $result->fetch_assoc()) {
    ?>
        <form action="con_bd.php?id=<?php echo $id; ?>" enctype="multipart/form-data" method="post">
            <div class="header">
                <h1>Modifier</h1>
                <div class="line"></div>
            </div>
            <div class="field">
                <div class="input-field">
                    <label for="">Nom du produit:</label>
                    <input type="text" placeholder="<?php echo $row['nom']; ?>" name="nom" value="<?php echo $row['nom']; ?>">
                </div>
                <div class="input-field">
                    <label for="">Prix du produit</label>
                    <input type="text" placeholder="<?php echo $row['prix']; ?>" name="prix" value="<?php echo $row['prix']; ?>">
                </div>
                <div class="input-field">
                    <label for="">Description du produit</label>
                    <textarea name="des" id="" cols="30" rows="10"><?php echo $row['description']; ?></textarea>
                </div>
                <div class="input-field">
                    <label for="">Choisissez une image</label>
                    <input type="file" name="img" value="<?php echo $row['img']; ?>">
                </div>
                <div class="input-field">
                    <input type="submit" value="Enregistrer">
                </div>
            </div>
        </form>
    <?php
        }
    ?>
    </div>
</body>
</html>