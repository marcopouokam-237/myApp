<?php
    session_start();
    require_once 'con_db.php';

    if (isset($_POST['user_name']) && isset($_POST['password'])) {
        $user_name = htmlspecialchars($_POST['user_name']);
        $password = htmlspecialchars($_POST['password']);

        $check = $bdd->prepare('SELECT nom, prenom, user_name, password FROM utilisateur WHERE user_name = ?');
        $check->execute(array($user_name));
        $data = $check->fetch();
        $row = $check->rowCount();

        if ($row == 1) {
            if ($user_name) {

                $password = hash('sha256' ,$password);

                if ($data['password'] === $password) {
                    
                    $_SESSION['user'] = $data['nom'];
                    header('Location:../index.php');

                }else header('Location:index.php?login_err=password');
            }else header('Location:index.php?login_err=user_name');
        }else header('Location:index.php?login_err=already');
    }else header('Location:index.php');

?>