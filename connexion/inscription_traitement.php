<?php
    require_once 'con_db.php';

    if (isset($_POST['nom']) && isset($_POST['user']) && isset($_POST['password']) && isset($_POST['prenom']) && isset($_POST['password_retype'])) {

        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);
        $user_name = htmlspecialchars($_POST['user']);

        $check = $bdd->prepare('SELECT nom, prenom, password, user_name FROM utilisateur WHERE user_name = ?');
        $check->execute(array($user_name));
        $data = $check->fetch();
        $row = $check->rowCount();

        if ($row == 0) {
            
           if (strlen($prenom) <= 100) {

            if (strlen($nom) <= 100) {
             
                if (strlen($user_name) <= 100) {
                    
                        if ($password == $password_retype) {
                            
                            $password = hash('sha256', $password);

                            $insert = $bdd->prepare('INSERT INTO utilisateur (nom, prenom, user_name, password) VALUES (:nom, :prenom, :user_name, :password)');
                            $result = $insert->execute(array(
                                'nom' => $nom,
                                'prenom' => $prenom,
                                'user_name' => $user_name,
                                'password' => $password
                            ));

                            if ($result) {
                                header('Location: index.php?login_err=success_i');
                                exit;
                            } else {
                                header('Location: authentification.php?reg_err=unknown_error');
                                exit;
                            }
                        } else {
                            header('Location: authentification.php?reg_err=password');
                            exit;
                        }
                } else {
                    header('Location: authentification.php?reg_err=user_name_length');
                    exit;
                }
            } else {
                header('Location: authentification.php?reg_err=nom_length');
                exit;
            }
           } else {
               header('Location: authentification.php?reg_err=prenom_length');
               exit;
           }
        } else {
            header('Location: authentification.php?reg_err=already');
            exit;
        }
    }
?>