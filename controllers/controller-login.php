<?php
session_start();

// Cookie thème
if (isset($_COOKIE['theme'])) {
    $theme = $_COOKIE['theme'];
} else {
    $theme = 'light';
}

// je recupere le JSON
@$json = file_get_contents('../data/users.json');

if ($json === false) {
    echo 'erreur technique';
    exit;
}

//je le transforme en tableau
$data = json_decode($json, true);
$users = $data['users'];



$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    if (isset($_POST['mail'])) {

        $mail = $_POST['mail'];

        if (empty($mail)) {
            $errors['mail'] = 'Veuillez entrer votre adresse mail';
        }
    }

    if (isset($_POST['password'])) {

        $password = $_POST['password'];

        if (empty($password)) {
            $errors['password'] = 'Veuillez entrer votre mot passe';
        }
    }

    if (empty($errors)) {

        foreach ($users as $key => $value) {
            $userMail =  $value['mail'];
            $userPassword = $value['password'];
            $userPseudo = $value['pseudo'];
            $userQuota = $value['quota'];

            if ($userMail === $mail) {

                if ($password === $userPassword) {

                    $_SESSION['user'] = [
                        'quota' => $userQuota,
                        'mail' => $userMail,
                        'pseudo' => $userPseudo
                    ];
                 

                    header('Location: controller-gallery.php');
                }
            } else if ($userMail != $mail || $password != $userPassword) {
                $errors['erreur'] = 'Erreur mail ou mot de passe';
            }
        }
    }
}

if(isset($_GET['logout'])) {
    session_destroy();
    $disconnected = true;
}
?>

<!-- // appelle de la vue  -->
<?php

include_once('../views/view-login.php');

?>