<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter des produits</title>
    <link rel="stylesheet" href="../connexion/style.css">
</head>
<body>
    <div class="container">

            <form action="con_bd.php" enctype="multipart/form-data" method="post">
                <div class="header">
                    <h1>Ajouter</h1>
                    <div class="line"></div>
                </div>
                <div class="field">
                    <div class="input-field">
                        <label for="">Nom du produit:</label>
                        <input type="text" placeholder="Nom du  produt ici" name="nom">
                    </div>
                    <div class="input-field">
                        <label for="">Prix du produit</label>
                        <input type="text" placeholder="Prix du produit" name="prix">
                    </div>
                    <div class="input-field">
                        <label for="">Description du produit</label>
                        <textarea name="des" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="input-field">
                        <label for="">Choisissez une image</label>
                        <input type="file" name="img">
                    </div>
                    <div class="input-field">
                        <input type="submit" value="Enregistrer">
                    </div>
                </div>
            </form>
    </div>
</body>
</html>