<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <?php
            if (isset($_GET['reg_err'])) {

                $err = htmlspecialchars($_GET['reg_err']);

                switch ($err) {
                    case 'success':
                        ?>
                        <strong style="color:green;">Inscription réussi</strong>
                        <?php

                    break;
                    case 'password':
                        ?>
                        <strong style="color:red;">Erreur Mot de passe différent</strong>
                        <?php

                    break;

                    case 'user_name':
                        ?>
                        <strong style="color:red;">nom 'utilisateur' non valide</strong>
                        <?php

                    break;

                    case 'user_name_length':
                        ?>
                        <strong style="color:red;">nom d'utilisateur trop long</strong>
                        <?php

                    break;
                    case 'prenom_length':
                        ?>
                        <strong style="color:red;">prenom trop long</strong>
                        <?php

                    break;

                    case 'nom_length':
                        ?>
                        <strong style="color:red;">nom trop long</strong>
                        <?php

                    break;

                    case 'already':
                        ?>
                        <strong style="color:red;">Compte déjà existant</strong>
                        <?php

                    break;
                }
            }
        ?>
            <form action="inscription_traitement.php" method="post">
                <div class="header">
                    <h1>Inscription</h1>
                    <div class="line"></div>
                </div>
                <div class="field">
                    <div class="details">
                        <div class="input-field">
                            <label for="">Nom:</label>
                            <input type="text" placeholder="Entrez votre nom" name="nom">
                        </div>
                        <div class="input-field">
                            <label for="">Prenom:</label>
                            <input type="text" placeholder="Entrez votre prenom" name="prenom">
                        </div>
                    </div>
                    <div class="input-field">
                        <label for="">Nom d'utilisateur:</label>
                        <input type="text" placeholder="Entrez votre nom d'utilisateur" name="user">
                    </div>
                    <div class="input-field">
                        <label for="">Mot de passe:</label>
                        <input type="password" placeholder="Entrez votre mot de passe" name="password">
                    </div>
                    <div class="input-field">
                    <label for="">Confirmer mot de Passe</label>
                        <input type="password" placeholder="Confirmez votre Mot de Passe" name="password_retype">
                    </div>
                    <div class="input-field">
                        <input type="submit" value="S'inscrire">
                    </div>
                    <div class="link">
                        <p>Vous avez déjà un compte <i>Goal attitude</i> ?   <a href="index.php">Connexion</a></p>
                    </div>
                    <div class="line"></div>
                    <div class="input-field">
                        <input type="button" value="S'inscrire avec Google">
                    </div>
                </div>
            </form>
    </div>
</body>
</html>