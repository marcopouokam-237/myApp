<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <?php
            if (isset($_GET['login_err'])) {

                $err = htmlspecialchars($_GET['login_err']);

                switch ($err) {
                    case 'password':
                        ?>
                        <strong style="color:red;">Erreur Mot de passe incorrect</strong>
                        <?php

                    break;
                    case 'success':
                        ?>
                        <strong style="color:green;">Connexion réussie</strong>
                        <?php

                    break;
                    case 'success_i':
                        ?>
                        <strong style="color:green;">Inscription réussie veuillez vous connecter !</strong>
                        <?php

                    break;

                    case 'email':
                        ?>
                        <strong style="color:red;">Nom d'utilisateur incorrect</strong>
                        <?php

                    break;

                    case 'already':
                        ?>
                        <strong style="color:red;">Compte non existant</strong>
                        <?php

                    break;
                }
            }
        ?>
            <form action="connexion.php" method="post">
                <div class="header">
                    <h1>Connexion</h1>
                    <div class="line"></div>
                </div>
                <div class="field">
                    <div class="input-field">
                        <label for="">Nom d'utilisateur:</label>
                        <input type="text" placeholder="Entrez votre nom d'utilisateur" name="user_name">
                    </div>
                    <div class="input-field">
                        <label for="">Mot de passe:</label>
                        <input type="password" placeholder="Entrez votre mot de passe" name="password">
                    </div>
                    <div class="input-field">
                        <input type="submit" value="Connexion">
                    </div>
                    <div class="link">
                        <p>Vous n'avez pas encore de compte ?   <a href="./authentification.php"> Créer un compte</a></p>
                    </div>
                    <div class="line"></div>
                    <div class="input-field">
                        <input type="button" value="Connexion avec Google">
                    </div>
                </div>
            </form>
    </div>
</body>
</html>