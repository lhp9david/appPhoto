<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location: controller-login.php');
    exit;
}
// Cookie thème
if (isset($_COOKIE[$_SESSION['user']['pseudo'].'theme'])) {
    $theme = $_COOKIE[$_SESSION['user']['pseudo'].'theme'];
} else {
    $theme = 'light';
}

$files = array_diff(scandir("../assets/img/".$_SESSION['user']['pseudo']."/"), array('..', '.'));

if(isset($_GET['delete'])){
    unlink("../assets/img/".$_SESSION['user']['pseudo']."/".$_GET['delete']);
    header("Location: " . $_SERVER['PHP_SELF']);
    
}

include_once('../views/view-gallery.php');

?>