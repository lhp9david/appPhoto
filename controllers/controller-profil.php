<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: controller-login.php');
    exit;
}
if (isset($_POST['theme'])) {
    setcookie($_SESSION['user']['pseudo'].'theme', $_POST['theme'], time() + (86400 * 30), "/");
    $theme = $_POST['theme'];
} elseif (isset($_COOKIE[$_SESSION['user']['pseudo'].'theme'])) {
    $theme = $_COOKIE[$_SESSION['user']['pseudo'].'theme'];
} else {
    $theme = 'light';
}



function checkquota()
{

    $dir = '../assets/img/' . $_SESSION['user']['pseudo'] . '/';
    $files = array_diff(scandir($dir), array('..', '.'));
    $usedsize = 0;

    foreach ($files as $file) {
        $usedsize = $usedsize + filesize($dir . $file);
    }

    $usedsize = $usedsize / (1024 * 1024);
    $currentquota = $_SESSION['user']['quota'] - $usedsize;

    return number_format($currentquota, 2);
}
?>



<?php include_once('../views/view-profil.php'); ?>